<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

/**
 * @property integer $id
 * @property string $img_path
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product_img extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'product_id', 'created_at', 'updated_at'];

    public function product(){
        //hasOne 與 hasMany 格式(對照的Model::class,'被對照的欄位'，'自己的欄位')
        $this->hasOne(Product::class,'id', 'product_id');
    }
}
