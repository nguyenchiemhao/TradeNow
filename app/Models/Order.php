<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'order_status_id', 'user_id', 'receive_name', 'receive_phone', 'receive_email','receive_city',
        'receive_address', 'description' 
    ];

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function order_status() {
        return $this->belongsTo('App\Models\OrderStatus');
    }
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function order_product() {
        return $this->hasMany('App\Models\OrderProduct');
    }

    public function getTotalPayment() {
        $total = 0;
        $order_products = OrderProduct::where('order_id', $this->id)->get();

        foreach ($order_products as $key => $item) {
            $total += $item->getSubTotal();
        }
        return $total;
    }

    public function getTotalWithShipping($ship = 0, $reduce = 0) {
        return $this->getTotalPayment() + $ship;
    }
}
