@extends('bootstrap.template')
    @section('pageTitle')
        Banner編輯
    @endsection
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
        <link rel="stylesheet" href="{{asset('css/banner.css')}}">
        {{-- datatable css --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    @endsection

    @section('main')
        <section id="banner">
            <div class="container">
                <div class="content row m-auto p-5">
                    <h1 class="displayTitle mb-5 padding64">Banner管理</h1>
                    <a href="/banner/create" class="btn btn-success">新增BANNER</a>
                    <!-- Comment -->
                    <div class="comment p-0">


                        <table id="banner_list" class="display">
                            <thead>
                                <tr>
                                    <th>圖片預覽</th>
                                    <th>圖片權重</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                <tr>
                                    <td>
                                        <div class="banner_img">
                                            <img src="{{$banner->img_path}}" alt="" class="w-100" style="{{$banner->img_opacity}}">
                                        </div>
                                    </td>
                                    <td>{{$banner->weight}}</td>
                                    <td>
                                        <button class="btn btn-success" onclick="location.href='/banner/edit/{{$banner->id}}'">編輯</button>
                                        
                                        <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$banner->id}}').submit();">刪除</button>
                                        <form action="/banner/delete/{{$banner->id}}" method="post" id="deleteForm{{$banner->id}}" hidden>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                               
                
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('js')
        {{-- jq cdn --}}
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous">
        </script>
        {{-- datatables js --}}
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
       
        <script>
            $(document).ready( function () {
                $('#banner_list').DataTable();
            });
        </script>
    @endsection
