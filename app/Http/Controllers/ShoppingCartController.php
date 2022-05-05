<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;



class ShoppingCartController extends Controller
{
    public function step01(){
        return view('shopping.checkedout1');
    }
    public function step02(){
        return view('shopping.checkedout2');
    }
    public function step03(){
        return view('shopping.checkedout3');
    }
    public function step04(){
        return view('shopping.checkedout4');
    }
}
