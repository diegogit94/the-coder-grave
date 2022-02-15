<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Placetopay\PlacetopayConnection;
use App\Models\Order;

class CheckoutController extends Controller
{
    /**
     * Shows the checkout view with form and payment information
     * 
     * @return [type]
     */
    public function index()
    {
        $product = Product::first();
        $id = Auth::user()->id;

        $user = User::where('id', $id)->first();

        return view('checkout', compact('product', 'user'));
    }

    /**
     * Make the Placetopay redirection
     * 
     * @param Request $request
     * @param Product $product
     * 
     * @return [type]
     */
    public function pay(Request $request, Product $product)
    {
        $connection = new PlacetopayConnection();
        $response = $connection->createRequest($request, $product);

        $order = new Order;

        $order->customer_name = auth()->user()->name;
        $order->customer_email = auth()->user()->email;
        $order->customer_mobile = auth()->user()->mobile;
        $order->total = $product->price;
        $order->status = 'pending';
        $order->request_id = $response['requestId'];
        $order->user_id = auth()->user()->id;
        $order->product_id = $product->id;

        $order->save();

        return redirect($response['processUrl']);
    }
}
