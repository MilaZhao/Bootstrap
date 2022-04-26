<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::get();
        return view('bootstrap.product',compact('products'));
    }

    public function create()
    {
        return view('bootstrap.ProductCreate');
    }

    public function store(Request $request)
    {
        $path = Storage::disk('local')->put('public/product', $request->product_img);
        $path = str_replace('public','storage',$path);
        Product::create([
            'img_path' => '/'.$path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,
            'type' => $request->type,
            'title' => $request->title,
            'price' => $request->price,
            'number' => $request->number,
            'content' => $request->content,
        ]);
        return redirect('/product');
    }


    public function edit($id)
    {
        //編輯功能
        $product = Product::find($id);
        return view('bootstrap.ProductEdit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        
        //根據 id 找到想修改的資料
        $product = Product::find($id);
        //使用者上傳的資料，先經過處理(eg.檔案上傳/防呆...)後
        if($request->hasfile('product_img')){
            $path = Storage::disk('local')->put('public/product', $request->product_img);
            $path = str_replace('public','storage',$path);//將路徑中的public置換成storage

            //將舊有資料的檔案刪除
            $target = str_replace('/storage','public',$product->img_path);//將路徑中的storage置換成public
            Storage::disk('local')->delete($target);//刪除舊圖

            //將新的資料更新到資料庫裡面
            $product->img_path = '/'.$path;
        }
       
       
        $product->img_opacity = $request->img_opacity;
        $product->weight = $request->weight;
        $product->type = $request->type;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->number = $request->number;
        $product->content = $request->content;

        $product->save();

        return redirect('/product');
    }



    public function destroy($id)
    {
        //刪除功能
        $product = Product::find($id);
        $target = str_replace('/storage','public',$product->img_path);//將路徑中的storage置換成public
        Storage::disk('local')->delete($target);//刪除舊圖片
        $product->delete();

        return redirect('/product');
    }

}
