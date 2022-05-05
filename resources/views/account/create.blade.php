@extends('layouts.app')

    @section('pageTitle')
        會員管理-新增頁
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
                    <h1 class="displayTitle mb-5">會員管理-新增頁</h1>
                    <!-- Comment -->
                    <div class="comment p-0">


                        <!-- 中間寄送資料 -->
                        <div id="section2">
                            <div class="content">
                                <form class="d-flex flex-column" action="/account/store" method="post" enctype="multipart/form-data"> <!--需跟route對應--> <!-- 需加上 enctype="multipart/form-data"後台才有辦法存到圖片資料，不然只會有檔名 -->
                                    @csrf <!-- 金鑰 -->

                                    <label for="name">使用者名稱</label>
                                    <input type="text" name="name" id="name">
                
                                    <label for="email">使用者信箱</label>
                                    <input type="email" name="email" id="email">
                
                                    <label for="password">使用者密碼</label>
                                    <input type="password" name="password" id="password">
                
                                    <label for="password_confirmation">確認密碼</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation">

                    

                                    <div class="button-box d-flex justify-content-center mt-2">
                                        <button class="btn btn-secondary me-3" type="reset" onclick="location.href='/account'">取消</button>
                                        <button class="btn btn-primary" type="submit">新增管理者</button>
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
