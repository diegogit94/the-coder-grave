<?php

namespace App\Http\Controllers;

use App\Placetopay\PlacetopayConnection;
use Illuminate\Http\Request;
use App\Models\Order;

class ResumeController extends Controller
{
    /**
     * Shows the payment resume
     * 
     * @return [type]
     */
    public function index($reference)
    {
        $order = Order::where('id', $reference)->first();

        $connection = new PlacetopayConnection();
        $response = $connection->getRequestInformation($order->request_id);

        $order->status = $response['status']['status'];

        $order->update();

        return view('resume', compact('response'));
    }
}
