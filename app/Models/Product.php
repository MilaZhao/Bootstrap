<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $keyType = 'integer';

     //madel可以使用黑名單 or 白名單(2選1)，設定好則可填寫欄位
     protected $fillable = ['created_at', 'updated_at', 'img_path', 'img_opacity', 'weight', 'type', 'title', 'price', 'number', 'content']; //整張表單只有設定的這幾的可以被填寫
     //protected $guard = ['created_at','updated_at','id'];//除了左邊3個以外(這3個不可被填寫)，其他都可以填寫
 
}
