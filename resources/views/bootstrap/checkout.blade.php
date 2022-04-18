@extends('bootstrap.template')
    @section('pageTitle')
        購物車
    @endsection
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    @endsection

    @section('main')
        <section id="checkout">
            <div class="container">
                <div class="content row m-auto p-5">
                    <h1>購物車</h1>
                    <!-- 進度條 開始 -->
                    <div class="progress-block my-5">
                        <div class="progress_wrapper">
                            <div class="step_item">
                                <div class="step grey" data-tex="確認購物車">
                                    <div class="box">1</div>
                                </div>
                            </div>

                            <div class="step_item">
                                <div class="step grey" data-tex="確認購物車">
                                    <div class="box">2</div>
                                </div>
                            </div>

                            <div class="step_item">
                                <div class="step grey" data-tex="確認購物車">
                                    <div class="box">3</div>
                                </div>
                            </div>

                            <div class="step_item">
                                <div class="step grey" data-tex="確認購物車">
                                    <div class="box">4</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 進度條 結束-->
                    <!-- 訂單明細 -->
                    <div class="detail">
                        <span>訂單明細</span>
                    </div>

                </div>
            </div>
        </section>
    @endsection
