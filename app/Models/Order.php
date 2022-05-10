<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $keyType = 'integer';
    protected $fillable = ['subtotal', 'shipping_fee', 'total', 'product_qty', 'name', 'phone', 'email', 'address', 'pay_way', 'shipping_way', 'store_address', 'status', 'ps', 'created_at', 'updated_at','user_id'];
    
    public function detail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
