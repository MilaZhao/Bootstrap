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
                                <img id="blah" src="{{asset($product->img_path)}}" alt="">
                                <label for="product_img">Product圖片上傳</label>
                                <input type="file" name="product_img" id="product_img" value="">

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
        </script>
    @endsection
