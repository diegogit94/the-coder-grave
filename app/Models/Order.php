<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    /**
     * Attributes in DB with default values. 
     *
     * @var array<int, string>
     */
    protected $attributes = [
        'request_id' => 0,
     ];

    /**
     * Get the user that belongs the order
     * 
     * @return [type]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user product
     * 
     * @return [type]
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
