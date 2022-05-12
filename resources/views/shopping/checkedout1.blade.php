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
        <link rel="stylesheet" href="{{asset('css/checkedout1.css')}}">
    @endsection

    @section('main')
    
        <div class="banner .container-fluid">
            <div class="list-detail">
                
                <!-- 上方進度條 -->
                <div id="section1" class="container-xxl">
                    <!-- 購物車標題 -->
                    <div class="shop-car mb-5">
                        <h3>購物車 確認訂單</h3>
                    </div>
                    <!-- 進度表 -->
                    <div class="progress-container">
                        <div class="progress">
                            <div class="box1">
                                <div class="box1-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step1 d-flex ">1</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box1-b">
                                    <li>確認購物車</li>
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box2-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step2 d-flex ">2</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box2-b">
                                    <li>付款與運送方式</li>
                                </div>
                            </div>
                            <div class="box3">
                                <div class="box3-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step3 d-flex ">3</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box3-b">
                                    <li>填寫資料</li>
                                </div>
                            </div>
                            <div class="box4">
                                <div class="box4-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step4 d-flex ">4</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box4-b">
                                    <li>完成訂購</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                    <!-- 中間訂單資訊 -->
                    <div id="section2">
                        <!-- 訂單明細 -->
                        <div class="list-title">
                            <h4>訂單明細</h4>
                        </div>
                        <!-- 訂單內容 -->
                        <div class="order-list">
                            @foreach ($shopping as $item )
                            <div class="first-item d-flex justify-content-between">
                                <!-- 訂單內容左方區塊 -->
                                <div class="l-box d-flex">
                                    <!-- 商品照 -->
                                    <div class="goods-img">
                                        <img src="{{ $item->product->img_path }}" alt="Goods-Photo">
                                    </div>
                                    <!-- 商品名稱&訂單編號 -->
                                    <div class="goods-info d-flex justify-content-center align-items-start">
                                        <div class="name">{{$item->product->title}}</div>
                                        <div class="number">{{$item->product->content}}</div>
                                    </div>
                                </div>
                                <!-- 訂單內容右方區塊 -->
                                <div class="r-box d-flex align-items-center">
                                    <!-- 商品數量與商品價格 -->
                                    <div class="quantity">
                                        <i class="fa-solid fa-plus"></i>
                                        <input form="formtext" type="number" name="qty[]" value="{{$item->qty}}">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <div class="sum-price">${{$item->qty * $item->product->price}}</div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>

                    <!-- 下方價格 -->
                    <div id="section3">
                        <div class="name-no-idea">
                            <!-- 價格明細 -->
                            <div class="price-box d-flex">
                                <div class="quantity d-flex justify-content-between">
                                    <h5>數量:</h5>
                                    <span>{{ count($shopping) }}</span>

                                </div>
                                <div class="subtotal d-flex justify-content-between">
                                    <h5>小計:</h5>
                                    <span>${{ $subtotal }}</span>
                                </div>
                                
                                <div class="total d-flex justify-content-between">
                                    <h5>總計:</h5>
                                    <span>${{ $subtotal }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 底部按鈕 -->
                    <div id="section4">
                        <!-- 功能按鈕 -->
                        <div class="button-box d-flex justify-content-between">
                            <div class="l-button"><a class="btn btn-primary" href="#" role="button"><i
                                        class="fa-solid fa-arrow-left"></i>返回購物</a>
                                        {{-- href="/ProductPage/{{$products->id}}" --}}
                            </div>

                            <!-- form表單 -->
                            <form id="formtext" method="POST" action="/shopping2" >
                                @csrf
                            </form>

                             <!-- submit -->
                            <label for="submit">
                                <input type="submit" form="formtext" id="submit" value="下一步" class="btn btn-primary">
                            </label>
                        

                        </div>
                    </div>
                    
            </div>
        </div>
    
    @endsection

    @section('js')

         <!-- Bootstrap js -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            egrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script>
            const minus = document.querySelectorAll('.fa-minus')
            const plus = document.querySelectorAll('.fa-plus')
            const qty = document.querySelectorAll('.qty')
            const sum_price = document.querySelectorAll('.sum_price')
            const number = document.querySelectorAll('.number')

            //小計與總計的元素
            const subtotal = document.querySelector('.subtotal span')
            const total = document.querySelector('.total span')


            for (let i = 0; i < minus.length; i++) {
                minus[i].onclick = function(){

                    if (parseInt(qty[i].value) > 1) {
                        qty[i].value = parseInt(qty[i].value) - 1
                        sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
                    }

                    //計算所有品項的金額並加總
                    var sum
                    for (let j = 0; j < array.length; j++) {
                        sum += parseInt(number[j].dataset.product_price) * parseInt(qty[j].value)
                    }
                    subtotal.innerHTML = 
                }
                plus[i].onclick = function(){

                    if (parseInt(qty[i].value) < parseInt(number[i].dataset.product_qty)) {
                        qty[i].value = parseInt(qty[i].value) +1 
                        sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
                    }
                }
                
            }

        </script>

    @endsection
