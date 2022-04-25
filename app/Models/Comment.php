<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Comment extends Model
{
    use HasFactory;
    //使用的資料庫表單名稱
    protected $table = 'comments';
    //資料表的主key 通常會有所引的角色 (不可重複，會有自動累加的特性)
    protected $primaryKey = 'id';
    //madel可以使用黑名單 or 白名單(2選1)，設定好則可填寫欄位
    protected $fillable = ['title','userName','content','email']; //整張表單只有設定的這幾的可以被填寫
    //protected $guard = ['created_at','updated_at','id'];//除了左邊3個以外(這3個不可被填寫)，其他都可以填寫
}
