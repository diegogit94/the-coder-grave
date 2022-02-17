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

        $orders = Order::where('user_id', $id)->paginate(10);

        return view('user-history', compact('orders'));
    }

    /**
     * Shows all auth user orders
     * 
     * @return [type]
     */
    public function admin()
    {
        $orders = Order::paginate(10);

        return view('admin-history', compact('orders'));
    }
}
