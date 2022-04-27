@extends('bootstrap.template')
    @section('pageTitle')
        ProductEdit編輯頁
    @endsection
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
        <link rel="stylesheet" href="{{asset('css/banner.css')}}">
    @endsection

    @section('main')
    <section id="banner">
        <div class="container">
            <div class="content row m-auto p-5">
                <h1 class="displayTitle mb-5">ProductEdit管理</h1>
                <!-- Comment -->
                <div class="comment p-0">


                    <!-- 中間寄送資料 -->
                    <div id="section2">
                        <div class="content">
                            <form class="d-flex flex-column" action="/product/update/{{$product->id}}" method="post" enctype="multipart/form-data"> <!--需跟route對應--> <!-- 需加上 enctype="multipart/form-data"後台才有辦法存到圖片資料，不然只會有檔名 -->
                                @csrf <!-- 金鑰 -->
                                <div>現在的圖片</div>
                                {{-- 上傳後顯示主要商品圖片 --}}
                                <img id="blah" src="{{asset($product->img_path)}}" alt="">

                                {{-- 主要商品上傳 --}}
                                <label for="product_img">Product圖片上傳</label>
                                <input type="file" name="product_img" id="product_img" value="">


                                 {{-- 上傳後顯示 次要 商品圖片 --}}
                                 <div>次要的圖片</div>
                                 <div class="d-flex flex-wrap align-items-start">

                                     

                                     
                                     @foreach ( $product->imgs as $item ) 
                                        <!-- 不使用fetch的寫法 -->
                                         {{-- <img src="{{asset($item->img_path)}}" alt="" style="width: 150px;" class="me-3">
                                         <button class="btn btn-danger w-100" type="button" onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除</button> --}}

                                            {{-- $item 為自定義名稱，當$product->imgs取出的圖片陣列都會儲存到$item裡面 --}}
                                            {{-- dd的效果 ： {{$product->imgs}} --}}


                                         <!-- 使用fetch的寫法 -->
                                         <div class="mb-5" id="sup_img{{$item->id}}">
                                            <img src="{{asset($item->img_path)}}" alt="" style="width: 150px;" class="w-50 me-3 mb-3">
                                            <button class="btn btn-danger w-50" type="button" onclick="delete_img({{$item->id}})">刪除</button>
                                         </div>

                                     @endforeach

 

                                 </div>

                                {{-- 次要商品上傳 --}}
                                <label for="product_img">Product次要圖片上傳</label>
                                {{-- multiple可選多張圖片，accept可以指定上傳格式，[]將上傳的圖片變成陣列 --}}
                                <input type="file" name="second_img[]" id="product_img" multiple  accept="image/*">

                                <label for="weight">權重設定</label>
                                <input type="numver" name="weight" id="weight" value="{{$product->weight}}">

                                <label for="img_opacity">透明度設定</label>
                                <input type="text" name="img_opacity" id="img_opacity" value="{{$product->img_opacity}}">

                                <label for="type">商品類型</label>
                                <input type="text" name="type" id="type" value="{{$product->type}}">

                                <label for="title">商品名稱</label>
                                <input type="text" name="title" id="title" value="{{$product->title}}">

                                <label for="price">商品價錢</label>
                                <input type="text" name="price" id="price" value="{{$product->price}}">
                               
                                <label for="number">商品數量</label>
                                <input type="text" name="number" id="number" value="{{$product->number}}">

                                <label for="content">商品描述</label>
                                <textarea type="text" name="content" id="content" value="{{$product->content}}"></textarea>

                                <div class="button-box d-flex justify-content-center mt-2">
                                    <button class="btn btn-secondary me-3" type="reset" onclick="">取消</button>
                                    <button class="btn btn-primary" type="submit">修改Product</button>
                                </div>
                            </form>
                            {{-- 使用fetch 就可以不使用這段 --}}
                            {{-- @foreach ( $product->imgs as $item )
                                <form action="/product/delete_img/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                                    <!-- 對應到web.php的Route::delete -->
                                    @method('DELETE') 
                                    @csrf
                                </form>
                            @endforeach --}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('js')
        <script>
            //選擇檔案後可以即時顯示變更的圖片（按修改banner前）
            banner_img.onchange = evt => {
                const [file] = banner_img.files
                    if (file) {
                        blah.src = URL.createObjectURL(file)
                }
            }

            //使用fetch 刪除 ProductEdit管理頁 的次要圖片
            function delete_img(id){
                // 準備表單以及內部的資料
                let formData = new FormData();
                formData.append("_method", 'DELETE');
                formData.append("_token", '{{ csrf_token() }}');

                //將準備好的表單籍由fetch送到後台
                fetch("/product/delete_img/"+id,{
                    method:'POST',
                    body:formData
                    }).then(function(response) {
                        //成功從資料庫删除資料後，將自己的HTML元素消除
                        let element = document.querySelector('#sup_img'+id)
                        element.parentNode.removeChild(element);
                })
            }
            //備註 fetch 不會自動更新網頁
        </script>
    @endsection
