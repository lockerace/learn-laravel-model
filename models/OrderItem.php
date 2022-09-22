<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order\Order;

class OrderItem extends Model
{
    protected $table = 'orderitems';
    protected $guarded = ['id'];

    function order()
    {
        return $this->belongsTO(Order::class, 'order_id', 'id');
    }

    function getSubtotalAttribute() {
        return $this->qty * $this->price;
    }
}
