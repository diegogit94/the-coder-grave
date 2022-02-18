<?php

namespace App\Placetopay;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Order;

/**
 * Class PlaceToPayConnection
 * @package App\Library
 */
class PlacetopayConnection
{
    // public $reference;

    /**
     * Generate all the authentication credentials
     * @return array
     * @throws \Exception
     */
    public function authentication(): array
    {
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }

        $nonceBase64 = base64_encode($nonce);
        $seed = date('c');
        $secretKey = env('PLACETOPAY_SECRETKEY');
        $tranKey= base64_encode(sha1($nonce . $seed . $secretKey, true));

        return $auth = [
            'login' => env('PLACETOPAY_LOGIN'),
            'seed' => $seed,
            'nonce' => $nonceBase64,
            'tranKey' => $tranKey
        ];
    }

    /**
     * Create a POST petition for P2P webcheckout and save the response on DB
     * @param Request $request
     * @param Product $product
     * @return array|mixed
     * @throws \Exception
     */
    public function createRequest(Request $request, Product $product, Order $order): array
    {
        $response = Http::post(env('P2P_ENDPOINT'), [
            'auth' => $this->authentication(),
            'payment' => [
                'reference' => $order->id,
                'description' => $product->name,
                'amount' => ['currency' => "USD", 'total' => $product->price]
            ],
            'buyer' => [
                'name' => $order->customer_name,
                'surname' => $order->user->surname,
                'email' => $order->customer_email,
                'documentType' => $request['document-type'],
                'document' => $request['document'],
                'mobile' => $order->customer_mobile,
                ],
            'expiration' => date('c', strtotime("+15 minutes")),
            'returnUrl' => route('resume.index', $order->id),
            'ipAddress' => request()->ip(),
            'userAgent' => request()->server('HTTP_USER_AGENT')
        ]);

        return $response->json();
    }

    /**
     * @param $requestId
     * @return array|mixed
     * @throws \Exception
     */
    public function getRequestInformation($requestId): array
    {
        $response = Http::post(env('P2P_ENDPOINT') . "/$requestId", [
            'auth' => $this->authentication(),
        ]);

        return $response->json();
    }
}
