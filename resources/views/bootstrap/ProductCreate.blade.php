@extends('layouts.app')

    @section('pageTitle')
        Product管理-新增頁
    @endsection

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- 通用css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
        <link rel="stylesheet" href="{{asset('css/banner.css')}}">
        
        <!-- datatable css -->
        <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    @endsection

    @section('main')
        <section id="banner">
            <div class="container">
                <div class="content row m-auto p-5">
                    <h1 class="displayTitle mb-5">Product管理</h1>
                    <!-- Comment -->
                    <div class="comment p-0">


                        <!-- 中間寄送資料 -->
                        <div id="section2">
                            <div class="content">
                                <form class="d-flex flex-column" action="/product/store" method="post" enctype="multipart/form-data"> <!--需跟route對應--> <!-- 需加上 enctype="multipart/form-data"後台才有辦法存到圖片資料，不然只會有檔名 -->
                                    @csrf <!-- 金鑰 -->

                                    <!-- 上傳後顯示 主要 商品圖片 -->
                                    {{-- <div>現在的圖片</div> --}}
                                    {{-- <img id="blah" src="{{asset($product->img_path)}}" alt=""> --}}

                                    <!-- 主要商品上傳 -->
                                    <label for="product_img">Product主要圖片上傳</label>
                                    <input type="file" name="product_img" id="product_img">


                                    <!-- 次要商品上傳 -->
                                    <label for="product_img">Product次要圖片上傳</label>
                                    {{-- multiple可選多張圖片，accept可以指定上傳格式，[]將上傳的圖片變成陣列 --}}
                                    <input type="file" name="second_img[]" id="product_img" multiple  accept="image/*">

                                    <label for="weight">權重設定</label>
                                    <input type="number" name="weight" id="weight">

                                    <label for="img_opacity">透明度設定</label>
                                    <input type="text" name="img_opacity" id="img_opacity">

                                    <label for="type">商品類型</label>
                                    <input type="text" name="type" id="type">

                                    <label for="title">商品名稱</label>
                                    <input type="text" name="title" id="title">

                                    <label for="price">商品價錢</label>
                                    <input type="text" name="price" id="price">

                                    <label for="number">商品數量</label>
                                    <input type="text" name="number" id="number">

                                    <label for="content">商品描述</label>
                                    <textarea type="text" name="content" id="content"></textarea>

                                    <div class="button-box d-flex justify-content-center mt-2">
                                        <button class="btn btn-secondary me-3" type="reset">取消</button>
                                        <button class="btn btn-primary" type="submit">新增Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('js')

        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            egrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- jq cdn -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        
        <!-- js -->
        <script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    @endsection
