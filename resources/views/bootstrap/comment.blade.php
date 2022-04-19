@extends('bootstrap.template')
    @section('pageTitle')
        購物車
    @endsection
    <!-- 各頁css -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    @endsection

    @section('main')
        <section id="comment">
            <div class="container">
                <div class="content row m-auto p-5">
                    <h1 class="displayTitle mb-5 padding64">評論</h1>
                    <!-- 進度條 開始 -->
                    {{-- <div class="progress-block my-5">
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

                    </div> --}}
                    <!-- 進度條 結束-->
                    <!-- Comment -->
                    <div class="comment p-0">
                        {{-- 留言貼文 --}}
                        <div class="commentBlock padding64">
                            <div class="info d-inline-flex align-items-end mb-3">
                                <h5 class=" me-3 mb-0">Mac 實用技巧 在終端機下開啓資料夾
                                </h5>
                                <span class="username">Finder</span>
                                <span class="time">2022-04-03 13:04</span>
                            </div>
                            <div class="commentText">
                                <p>We've added a bunch of additional payment options to the gift certificates section, including Apple Pay, Google Pay, bank transfers, and more. 👍

                                    This is a great way to give a contractor or employee access to Laracasts without sharing your card details.</p>
                            </div>

                        </div>

                        {{-- 留言 --}}
                        <div class="commentWrite p-5 ">
                            <h4 class="commentWriteTitle mb-3">留言</h4>
                            <form class="form m-auto" action="/comment/save" method="GET"> <!-- 需要跟route對應 -->
                                <div class="input mb-3">
                                    <label for="name" class="form-label">暱稱</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name">
                                </div>
                                <div class="input mb-3">
                                    <label for="title" class="form-label">標題</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="標題">
                                </div>
                                <div class="input mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" 
                                    rows="3" placeholder="分享你的心情"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3" onclick="location.href='/bootstrap';">Submit</button>
                            </form>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>
    @endsection
