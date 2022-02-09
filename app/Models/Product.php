<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the order that belongs the product
     * 
     * @return [type]
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
