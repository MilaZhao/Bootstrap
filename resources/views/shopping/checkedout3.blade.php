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
    @endsection

    @section('main')
        <div class="banner .container-fluid">
            <form action="/shopping4" method="POST" class="list-detail">
                @csrf
                <!-- 上方進度條 -->
                <div id="section1" class="container-xxl">
                    <!-- 購物車標題 -->
                    <div class="shop-car mb-5">
                        <h3>購物車</h3>
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
                <!-- 中間寄送資料 -->
                <div id="section2">
                    <div class="tittle">
                        <h3>寄送資料</h3>
                    </div>
                    <div class="content">
                        <div class="form">
                            <!-- Bootstrap表單 -->
                            <!--姓名 -->
                            <div class="name">
                                <div class="mb-1">
                                    <label for="name" class="form-label">
                                        <h5>姓名</h5>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="千夜未來">
                                </div>
                            </div>
                            <!-- 電話 -->
                            <div class="tel">
                                <div class="mb-1">
                                    <label for="phone" class="form-label">
                                        <h5>電話</h5>
                                    </label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="0922-520-222">
                                </div>
                            </div>
                            <!-- 電子郵件 -->
                            <div class="email">
                                <div class="mb-1">
                                    <label for="email" class="form-label">
                                        <h5>E-mail</h5>
                                    </label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="kittenIsCute@gmail.com">
                                </div>
                            </div>
                            <!--戶籍資料 -->
                            <div class="address">
                                <div class="mb-1">
                                    <label for="formGroupExampleInput2" class="form-label">
                                        <h5>地址</h5>
                                    </label>
                                    <div class="type-box">
                                        <input type="text" class="form-control-city" id="formGroupExampleInput2"
                                            placeholder="城市">
        
                                        <input type="text" class="form-control-code" id="formGroupExampleInput2"
                                            placeholder="郵遞區號">
                                        <input type="text" class="form-control-address" id="formGroupExampleInput2"
                                            placeholder="地址">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 下方價格 -->
                <div id="section3">
                    <div class="name-no-idea">
                        <!-- 價格明細 -->
                        <div class="price-box d-flex">
                            <div class="quantity d-flex justify-content-between">
                                <h5>數量:</h5>
                                <span>3</span>
                            </div>
                            <div class="subtotal d-flex justify-content-between">
                                <h5>小計:</h5>
                                <span>520.22</span>
                            </div>
                            <div class="shipping-fee d-flex justify-content-between">
                                <h5>運費:</h5>
                                <span>520.22</span>
                            </div>
                            <div class="total d-flex justify-content-between">
                                <h5>總計:</h5>
                                <span>520.22</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 底部按鈕 -->
                <div id="section4">
                    <!-- 功能按鈕 -->
                    <div class="button-box d-flex justify-content-between">
                        <div class="l-button"><a class="btn btn-primary" href="/shopping2" role="button">上一步</a>
        
                        </div>
                        <div class="r-button"><button class="btn btn-primary" type="submit" role="button">前往付款</button></div>
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
           

            //使用fetch 刪除 ProductEdit管理頁 的次要圖片
            function delete_img(id){
                // 準備表單以及內部的資料
                let formData = new FormData();
                formData.append("_method", 'DELETE');
                formData.append("_token", '{{ csrf_token() }}');

                //將準備好的表單籍由fetch送到後台
                fetch("/product/delete_img/"+id,{
                    method:'POST',
                    body:formData
                    }).then(function(response) {
                        //成功從資料庫删除資料後，將自己的HTML元素消除
                        let element = document.querySelector('#sup_img'+id)
                        element.parentNode.removeChild(element);
                })
            }
            //備註 fetch 不會自動更新網頁
        </script>
    @endsection
