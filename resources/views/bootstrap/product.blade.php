@extends('bootstrap.template')
    @section('pageTitle')
        Product編輯
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
                    
                    <div class="top">
                        <h1 class="displayTitle">Product管理</h1>
                        <a href="/product/create" class="btn btn-primary">新增Product</a>
                    </div>
                    
                    <!-- Comment -->
                    <div class="comment p-0">


                        <table id="product_list" class="display">
                            <thead>
                                <tr>
                                    <th>圖片權重</th>
                                    <th>圖片預覽</th>
                                    <th>商品類型</th>
                                    <th>商品名稱</th>
                                    <th>價錢</th>
                                    <th>數量</th>
                                    <th>描述</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->weight}}</td>
                                    {{-- 主要商品 --}}
                                    <td>
                                        <div class="$product_img">
                                            <img src="{{$product->img_path}}" alt="" class="w-100" style="{{$product->img_opacity}}">
                                        </div>
                                    </td>

                                   
                                    <td>{{$product->type}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->number}}</td>
                                    <td>{{$product->content}}</td>



                                    <td>
                                        <button class="btn btn-success" onclick="location.href='/product/edit/{{$product->id}}'">編輯</button>
                                        
                                        <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$product->id}}').submit();">刪除</button>
                                        <form action="/product/delete/{{$product->id}}" method="post" id="deleteForm{{$product->id}}" hidden>
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
                $('#product_list').DataTable();
            });
        </script>
    @endsection
