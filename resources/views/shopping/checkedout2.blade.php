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
        <link rel="stylesheet" href="{{ asset('css/checkedout2.css') }}">
    @endsection

    @section('main')
        <div class="banner .container-fluid">
            <div class="list-detail">
                <!-- 上方進度條 -->
                <div id="section1" class="container-xxl">
                    <!-- 購物車標題 -->
                    <div class="shop-car">
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
                <!-- 中間付款方式與運送方式 -->
                <div id="section2">
                    <!-- 付款方式 -->
                    <div class="howToPay">
                        <div class="tittle">
                            <h3>付款方式</h3>
                        </div>
                        <div class="content">
                            <div class="first-choice d-flex align-items-center">
                                <input type="radio" name="pay" id="">
                                <p>信用卡付款</p>
                            </div>
                            <div class="second-choice d-flex align-items-center">
                                <input type="radio" name="pay" id="">
                                <p>網路 ATM</p>
                            </div>
                            <div class="third-choice d-flex align-items-center">
                                <input type="radio" name="pay" id="">
                                <p>超商代碼</p>
                            </div>
                        </div>
                    </div>
                    <!-- 運送方式 -->
                    <div class="howToDeliver">
                        <div class="tittle">
                            <h3>運送方式</h3>
                        </div>
                        <div class="content">
                            <div class="first-choice d-flex align-items-center">
                                <input type="radio" name="deliver" id="">
                                <p>黑貓宅配</p>
                            </div>
                            <div class="second-choice d-flex align-items-center">
                                <input type="radio" name="deliver" id="">
                                <p>超商店到店</p>
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
                        <div class="l-button"><a class="btn btn-primary" href="/shopping1" role="button">上一步</a>

                        </div>
                        <div class="r-button"><a class="btn btn-primary" href="/shopping3" role="button">下一步</a></div>
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
