<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Placetopay\PlacetopayConnection;
use Illuminate\Support\Facades\Log;

class PlacetopayCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'placetopay:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consult if the pending orders has changed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pendingOrders = Order::where('status', 'PENDING')->get();

        $connection = new PlacetopayConnection;

        foreach ($pendingOrders as $pendingOrder) {
            $response = $connection->getRequestInformation($pendingOrder->request_id);

            if ($response['status']['status'] != 'PENDING') {

                $pendingOrder->status = $response['status']['status'];

                $pendingOrder->update();

                $this->info("Order updated correctly"); 

            } else {
                $this->info("The orders are still pending");
            }
        }
    }
}
