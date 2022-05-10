<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $keyType = 'integer';
    protected $fillable = ['product_id', 'qty', 'price', 'order_id', 'created_at', 'updated_at'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    
    public function product()
    {
        return $this->hasOne(Product::class,'id', 'product_id');
    }

}
