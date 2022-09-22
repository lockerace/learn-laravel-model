<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order\Order;

class OrderService extends Model
{
    protected $table = 'orderservices';
    protected $guarded = ['id'];

    function order()
    {
        return $this->belongsTO(Order::class, 'order_id', 'id');
    }

    function getSubtotalAttribute() {
        return $this->qty * $this->price;
    }
}
