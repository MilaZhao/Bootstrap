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
        //這邊的$data1,2,3是陣列
        // dd($data1 ,$data2, $data3); 
        
        return view('bootstrap.bootstrap',compact('data3'));
    }
    public function login() {
        return view('bootstrap.login');
    }
    public function checkout() {
        return view('bootstrap.checkout');
    }
    public function comment() {
        $commentdata = DB::table('comments')->orderby('id',"desc")->orderby('id','asc')->get();

        return view('bootstrap.comment',compact('commentdata'));
    }
    public function save_comment(Request $request) {
        // dd($request->all());
        // return view('bootstrap.comment');
        DB::table('comments')->insert([
            'title' => $request->title,
            'userName' => $request->name,
            'content' => $request->content,
            // 'email' => '',
        ]);
        return redirect('/comment'); //重新導向，與view不同
        //redirect 優點：(1)會幫忙重新整理url ; (2)按F5重新整理網頁時，不會重新送資料到後台去
        //view 缺點：(1)按F5重新整理的web時，url會顯示送出的資料內容；(2)按F5會一直重新送出同一筆資料到後台，後台資料庫就會有很多同一筆的資料
    }
    //刪除功能
    public function delete_comment($id) {
        DB::table('comments')->where('id', $id)->delete();
        return redirect('/comment'); 
    }  

    //編輯功能
    public function edit_comment($id) {
        // dd($id);
        //$comments = DB::table('comments')->where('id', $id)->first();//從符合條件的比數中，抓第一筆(結果不會是陣列)

        $comments = DB::table('comments')->find($id);//find只能針對id去搜尋 (1)優點：因為只找id，網頁效能比較好 (2)缺點：只能找主key(id)


        return view('bootstrap.edit',compact('comments'));
    }

    //Updata
    public function update_comment($id, Request $request) {
        DB::table('comments')->where('id', $id)->update([
            'title' => $request->title,
            'userName' => $request->name,
            'content' => $request->content,
        ]);
        return redirect('/comment');
    }


}
