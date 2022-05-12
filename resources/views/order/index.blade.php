@extends('layouts.app')

    @section('pageTitle')
        確認訂單
    @endsection
    
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- 通用css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/checkedout3.css') }}">

        <style>
            .border-bottom{
                border-width: 3px !important;
                border-color: gray !important;
            }
            .banner_img{
                width: 250px;
            }
            main #section1{
                height: unset;
            }
            .btn, .btn-success{
                background-color:unset;
                border-color:unset;
                /* color: #f3f4f6; */
            }
            .btn-success:hover{
                background-color: unset;
                border-color:unset;
                /* color: #f3f4f6; */
            }
            .btn-success:active{
                background-color: unset;
                border-color:unset;
                /* color: #f3f4f6; */
            }
            span{
                color: #4856fd;
            }
            #order_list{
                width: 100%;
                text-align: center
            }
           .text {
               text-align: center;
           }
           
           
            


        </style>
    @endsection

    @section('main')
    <div class="banner container-fluid">
        <div class="list-detail">
            <!-- 上方留言內容 -->
            <div id="section1" class="container-xxl mb-5">
                <!-- 留言區標題 -->
                <div class="shop-car d-flex justify-content-between mb-2">
                    <h3>訂單管理</h3>
                </div>
                <!-- 留言們 -->
                <table id="order_list" class="display">
                    <thead>
                        <tr>
                            <th>訂單編號</th>
                            <th>購買人</th>
                            <th>信箱</th>
                            <th>總金額</th>
                            <th>訂單狀態</th>
                            <th class="text">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->total}}</td>
                            <td>
                                {{-- 1->訂單成立(未付款), 2->已付款, 3->已出貨, 4->已結單, 5->已取消 --}}
                                @if ($item->status == 1)
                                    訂單成立(未付款)
                                @elseif ($item->status == 2)
                                    已付款
                                @elseif ($item->status == 3)
                                    已出貨
                                @elseif ($item->status == 4)
                                    已結單
                                @else
                                    已取消
                                @endif
                            </td>
    
                            <td>
                                <button class="btn btn-success" onclick="location.href='/order/edit/{{$item->id}}'"> <span>修改訂單狀態</span> </button>
                            </td>
                        </tr>
                        @endforeach
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

    @section('js')

         <!-- Bootstrap js -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            egrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        
    @endsection
