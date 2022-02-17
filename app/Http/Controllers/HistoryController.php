<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class HistoryController extends Controller
{
    /**
     * Shows all auth user orders
     * 
     * @return [type]
     */
    public function user()
    {
        $id = Auth::user()->id;

        // $user = User::where('id', $id)->first();

        $orders = Order::where('user_id', $id)->get();

        return view('user-history', compact('orders'));
    }

    /**
     * Shows all auth user orders
     * 
     * @return [type]
     */
    public function admin()
    {
        $orders = Order::all();

        return view('admin-history', compact('orders'));
    }
}
