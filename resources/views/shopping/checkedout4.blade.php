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
        <link rel="stylesheet" href="{{asset('css/checkedout4.css')}}">
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
                <!-- 中間內容：訂單資訊確認 -->
                <div id="section2">
                    <!-- 訂單成立 -->
                    <div class="order-title">
                        <h1>訂單成立</h1>
                    </div>
                    <!-- 訂單明細 -->
                    <div class="order-list">
                        <div class="list-title">
                            <h3>訂單明細</h3>
                        </div>
                        <div class="order-content">
                            <div class="order-list">
                                <div class="first-item d-flex justify-content-between">
                                    <!-- 訂單內容左方區塊 -->
                                    <div class="l-box d-flex">
                                        <!-- 商品照 -->
                                        <div class="goods-img">
                                            <img src="{{asset('img/pic01.jpeg')}}" alt="Goods-Photo">
                                        </div>
                                        <!-- 商品名稱&訂單編號 -->
                                        <div class="goods-info d-flex justify-content-center align-items-start">
                                            <div class="name">Cute-kitten-miao-miao</div>
                                            <div class="number">#94-koo-tsui</div>
                                        </div>
                                    </div>
                                    <!-- 訂單內容右方區塊 -->
                                    <div class="r-box d-flex align-items-center">
                                        <!-- 商品數量與商品價格 -->
                                        <div class="quantity">
                                            <p>X1</p>
                                        </div>
                                        <div class="sum-price"> $520.22</div>
                                    </div>
                                </div>
                                <div class="second-item d-flex justify-content-between">
                                    <!-- 訂單內容左方區塊 -->
                                    <div class="l-box d-flex">
                                        <!-- 商品照 -->
                                        <div class="goods-img">
                                            <img src="{{asset('img/pic01.jpeg')}}" alt="Goods-Photo">
                                        </div>
                                        <!-- 商品名稱&訂單編號 -->
                                        <div class="goods-info d-flex justify-content-center align-items-start">
                                            <div class="name">Cute-kitten-miao-miao</div>
                                            <div class="number">#94-koo-tsui</div>
                                        </div>
                                    </div>
                                    <!-- 訂單內容右方區塊 -->
                                    <div class="r-box d-flex align-items-center">
                                        <!-- 商品數量與商品價格 -->
                                        <div class="quantity">
                                            <p>X1</p>
                                        </div>
                                        <div class="sum-price"> $520.22</div>
                                    </div>
                                </div>
                                <div class="third-item d-flex justify-content-between">
                                    <!-- 訂單內容左方區塊 -->
                                    <div class="l-box d-flex">
                                        <!-- 商品照 -->
                                        <div class="goods-img">
                                            <img src="{{asset('img/pic01.jpeg')}}" alt="Goods-Photo">
                                        </div>
                                        <!-- 商品名稱&訂單編號 -->
                                        <div class="goods-info d-flex justify-content-center align-items-start">
                                            <div class="name">Cute-kitten-miao-miao</div>
                                            <div class="number">#94-koo-tsui</div>
                                        </div>
                                    </div>
                                    <!-- 訂單內容右方區塊 -->
                                    <div class="r-box d-flex align-items-center">
                                        <!-- 商品數量與商品價格 -->
                                        <div class="quantity">
                                            <p>X1</p>
                                        </div>
                                        <div class="sum-price"> $520.22</div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <!-- 寄送資料 -->
                    <div class="shipping-info">
                        <div class="shipping-title">
                            <h3>寄送資料</h3>
                        </div>
                        <div class="shipping-content">
                            <!--姓名 -->
                            <div class="name d-flex">
                                <h3>姓名</h3>
                                <p>12334</p>
                            </div>
                            <!-- 電話 -->
                            <div class="tel d-flex">
                                <h3>電話</h3>
                                <p>0912345678</p>
                            </div>
                            <!-- 電子郵件 -->
                            <div class="email d-flex">
                                <h3>E-mail</h3>
                                <p>abc123@gmail.com</p>
                            </div>
                            <!-- 地址 -->
                            <div class="address d-flex">
                                <h3>地址</h3>
                                <p>409 台中市</p>
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
                    <div class="button-box d-flex justify-content-end">
                        <div class="l-button"><a class="btn btn-primary" href="/" role="button"><i
                                    class="fa-solid fa-arrow-left"></i>返回購物</a>
                        </div>
                        <div class="r-button">
                            <a class="btn btn-primary" href="/" role="button">返回首頁</a>
                        </div>
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
