@extends('bootstrap.template')
    @section('pageTitle')
        BANNER管理-新增頁
    @endsection
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
        <link rel="stylesheet" href="{{asset('css/banner.css')}}">
        {{-- datatable css --}}
        <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                                <form class="d-flex flex-column" action="/banner/store" method="post" enctype="multipart/form-data"> <!--需跟route對應--> <!-- 需加上 enctype="multipart/form-data"後台才有辦法存到圖片資料，不然只會有檔名 -->
                                    @csrf <!-- 金鑰 -->
                                    <label for="banner_img">BANNER圖片上傳</label>
                                    <input type="file" name="banner_img" id="banner_img">

                                    <label for="img_opacity">透明度設定</label>
                                    <input type="text" name="img_opacity" id="img_opacity">

                                    <label for="weight">權重設定</label>
                                    <input type="numver" name="weight" id="weight">

                                    <div class="button-box d-flex justify-content-center mt-2">
                                        <button class="btn btn-secondary me-3" type="reset">取消</button>
                                        <button class="btn btn-primary" type="submit">新增banner</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('jq')
        {{-- jq cdn --}}
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        {{-- js --}}
        <script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );</script>
    @endsection
