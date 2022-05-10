@extends('layouts.app')

    @section('pageTitle')
        會員管理
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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    @endsection

    @section('main')
        <section id="banner">
            <div class="container">
                <div class="content row m-auto p-5">
                    
                    <div class="top">
                        <h1 class="displayTitle">會員管理</h1>
                        <a href="/account/create" class="btn btn-primary">新增會員</a>
                    </div>
                    
                    <!-- Comment -->
                    <div class="comment p-0">


                        <table id="product_list" class="display">
                            <thead>
                                <tr>
                                    <th>使用者名稱</th>
                                    <th>信箱</th>
                                    <th>權限</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>

                                    <td>
                                        @if ($item->power == 1)
                                            管理者
                                        @else
                                            一般會員
                                        @endif
                                    </td>


                                    <td>
                                        <button class="btn btn-success" onclick="location.href='/account/edit/{{$item->id}}'">編輯</button>
                                        <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除</button>
                                        <form action="/account/delete/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                                            @csrf
                                            @method('DELETE')
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

        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            egrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- jq cdn -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous">
        </script>

        <!-- datatables js -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
       
        <script>
            $(document).ready( function () {
                $('#product_list').DataTable();
            });
        </script>
    @endsection
