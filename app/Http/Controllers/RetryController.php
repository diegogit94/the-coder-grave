<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Placetopay\PlacetopayConnection;

class RetryController extends Controller
{
    /**
     * Allows retry a payment.
     * 
     * @return [type]
     */
    public function retry(Request $request, Order $order)
    {
        $product = Product::first();
        $retry = new Order;

        $retry->id = rand(0, 1000000);
        $retry->customer_name = auth()->user()->name;
        $retry->customer_email = auth()->user()->email;
        $retry->customer_mobile = auth()->user()->mobile;
        $retry->total = $order->total;
        $retry->status = 'PENDING';
        $retry->user_id = auth()->user()->id;
        $retry->product_id = $order->product_id;
        
        $retry->save();

        $connection = new PlacetopayConnection();
        $response = $connection->createRequest($request, $product, $retry);

        $retry->request_id = $response['requestId'];
        
        $retry->update();
        
        return redirect($response['processUrl']);
    }
}
