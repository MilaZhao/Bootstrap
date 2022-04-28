@extends('layouts.app')

    @section('pageTitle')
        Banner編輯頁
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
    @endsection

    @section('main')
    <section id="banner">
        <div class="container">
            <div class="content row m-auto p-5">
                <h1 class="displayTitle mb-5 padding64">Banner管理</h1>
                
                <!-- Comment -->
                <div class="comment p-0">


                    <!-- 中間寄送資料 -->
                    <div id="section2">
                        <div class="content">
                            <form class="d-flex flex-column" action="/banner/update/{{$banner->id}}" method="post" enctype="multipart/form-data"> <!--需跟route對應--> <!-- 需加上 enctype="multipart/form-data"後台才有辦法存到圖片資料，不然只會有檔名 -->
                                
                                <!-- 金鑰 -->
                                @csrf 

                                <div>現在的圖片</div>
                                <img id="blah" src="{{asset($banner->img_path)}}" alt="">
                                <label for="banner_img">BANNER圖片上傳</label>
                                <input type="file" name="banner_img" id="banner_img" value="">

                                <label for="img_opacity">透明度設定</label>
                                <input type="text" name="img_opacity" id="img_opacity" value="{{$banner->img_opacity}}">

                                <label for="weight">權重設定</label>
                                <input type="numver" name="weight" id="weight" value="{{$banner->weight}}">

                                <div class="button-box d-flex justify-content-center mt-2">
                                    <button class="btn btn-secondary me-3" type="reset" onclick="">取消</button>
                                    <button class="btn btn-primary" type="submit">修改banner</button>
                                </div>
                            </form>
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
