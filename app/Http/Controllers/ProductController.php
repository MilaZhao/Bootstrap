<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Product_img;



class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::get();
        $header = '';
        $slot = '';
        return view('bootstrap.product',compact('products','header','slot'));
    }

    

    public function create()
    {
        $header = '';
        $slot = '';
        return view('bootstrap.ProductCreate',compact('header','slot'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // 主要圖片
        $path = Storage::disk('local')->put('public/product', $request->product_img);
        $path = str_replace('public','storage',$path);
        $product = Product::create([
            'img_path' => '/'.$path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->weight,
            'type' => $request->type,
            'title' => $request->title,
            'price' => $request->price,
            'number' => $request->number,
            'content' => $request->content,
        ]);
        // 次要圖片
        foreach ($request->second_img as $index => $element){
            $path = Storage::disk('local')->put('public/product', $element);
            $path = str_replace('public','storage',$path);
            Product_img::create([
                'img_path' => $path,
                'product_id' => $product->id,
            ]);
        }

        return redirect('/product');
    }


    public function edit($id)
    {
        //編輯功能
        $product = Product::find($id);
        $header = '';
        $slot = '';
        return view('bootstrap.ProductEdit',compact('product','header','slot'));
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

         // 次要圖片
         if($request->hasfile('second_img')){
            foreach ($request->second_img as $index => $element){
                $path = Storage::disk('local')->put('public/product', $element);
                $path = str_replace('public','storage',$path);
                Product_img::create([
                    'img_path' => $path,
                    'product_id' => $product->id,
                ]);
            }
           
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

        // $img = Product_img::where('product_id',$id)->get();
        // foreach($imgs as $key => $value){
        //     $target = str_replace('/storage','public',$product->img_path);//將路徑中的storage置換成public
        //     $target = Storage::disk('local')->delete($target);//刪除舊圖片
        //     $value->delete();
        // }

        $product->delete();

        return redirect('/product');
    }
   
    //刪除次要圖片
    public function delete_img($img_id)
    {
        $img = Product_img::find($img_id);
        $target = str_replace('/storage','public',$img->img_path);//將路徑中的storage置換成public
        Storage::disk('local')->delete($target);//刪除舊圖片
    //    FilesController::deleteUpload($img->$img_path);
        $product_id = $img->product_id;
        $img->delete();

        return redirect('/product/edit/'.$product_id);
    }

}
