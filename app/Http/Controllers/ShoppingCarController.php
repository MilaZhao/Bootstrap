<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ShoppingCarController extends Controller
{
    public function bootstrap() {
        // return 'hkljljwld';
        //$data1 = DB::table('news')->take(3)->get();//抓最舊的3筆
        //$data2 = DB::table('news')->inRandomOrder()->limit(3)->get();//隨機抓3rows
        $data3 = DB::table('news')->orderby('id',"desc")->take(3)->orderby('id','asc')->get();//抓最新 3 rows

        // dd($data1 ,$data2, $data3); 
        
        return view('bootstrap.bootstrap',compact('data3'));
    }
    public function login() {
        return view('bootstrap.login');
    }
    public function checkout() {
        return view('bootstrap.checkout');
    }
    
}
