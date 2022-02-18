<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
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
    public function pay(CheckoutRequest $request, Product $product)
    {
        $request->validated();

        $order = new Order;

        $order->customer_name = auth()->user()->name;
        $order->customer_email = auth()->user()->email;
        $order->customer_mobile = auth()->user()->mobile;
        $order->total = $product->price;
        $order->status = 'CREATED';
        $order->user_id = auth()->user()->id;
        $order->product_id = $product->id;
        
        $order->save();

        $connection = new PlacetopayConnection();
        $response = $connection->createRequest($request, $product, $order);

        $order->request_id = $response['requestId'];

        $order->update();

        return redirect($response['processUrl']);
    }
}
