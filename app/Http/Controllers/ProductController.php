<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
    /**
     * Shows all the products... in this case only one
     * 
     * @return [type]
     */
    public function index()
    {
        $product = Product::first();

        return view('product', compact('product'));
    }
}
