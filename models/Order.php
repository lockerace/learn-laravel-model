<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order\OrderItem;
use App\Models\Order\OrderService;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = ['id'];

    function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    function services()
    {
        return $this->hasMany(OrderService::class, 'order_id', 'id');
    }
}
