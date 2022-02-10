<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $id = auth()->id;
        $user = User::where('id', $id)->first();

        return view('product.index', compact('product', 'user'));
    }
}
