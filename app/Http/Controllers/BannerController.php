<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index() 
    {
        $banners = Banner::get();
        return view('bootstrap.banner',compact('banners'));
    }

    public function create()
    {
        return view('bootstrap.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $path = Storage::disk('local')->put('public/banner', $request->banner_img);
        $path = str_replace('public','storage',$path);
        Banner::create([
            'img_path' => '/'.$path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,
        ]);
        return redirect('/banner');
    }

    public function edit($id)
    {
        //編輯功能
        $banner = Banner::find($id);
        return view('bootstrap.bannerEdit',compact('banner'));
        // return view('banner.edit');
    }

    public function update(Request $request, $id)
    {
        

        //根據 id 找到想修改的資料
        $banner = Banner::find($id);
        //使用者上傳的資料，先經過處理(eg.檔案上傳/防呆...)後
        if($request->hasfile('banner_img')){
            $path = Storage::disk('local')->put('public/banner', $request->banner_img);
            $path = str_replace('public','storage',$path);//將路徑中的public置換成storage

            //將舊有資料的檔案刪除
            $target = str_replace('/storage','public',$banner->img_path);//將路徑中的storage置換成public
            Storage::disk('local')->delete($target);//刪除舊圖

            //將新的資料更新到資料庫裡面
            $banner->img_path = '/'.$path;
        }
       
       
        $banner->img_opacity = $request->img_opacity;
        $banner->weight = $request->weight;
        $banner->save();

        return redirect('/banner');
    }

    public function destroy($id)
    {
        //刪除功能
        $banner = Banner::find($id);
        $target = str_replace('/storage','public',$banner->img_path);//將路徑中的storage置換成public
        Storage::disk('local')->delete($target);//刪除舊圖片
        $banner->delete();

        return redirect('/banner');
    }

}
