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
                    <h1 class="displayTitle">修改留言</h1>
                   
                    <!-- Comment -->
                    <div class="comment p-0">
                        
                        {{-- 編輯留言 --}}
                        <div class="commentWrite p-5 ">
                            <h4 class="commentWriteTitle mb-3">留言</h4>
                            <form class="form m-auto" action="/comment/update/{{$comments->id}}" method="GET"> <!-- 需要跟route對應 -->
                                <div class="input mb-3"> 
                                    <label for="name" class="form-label">暱稱</label>
                                    <input type="text" class="form-control" value="{{$comments->userName}}" id="name" name="name"
                                        placeholder="Name">
                                </div>
                                <div class="input mb-3">
                                    <label for="title" class="form-label">標題</label>
                                    <input type="text" class="form-control" value="{{$comments->title}}" id="title" name="title"
                                        placeholder="標題">
                                </div>
                                <div class="input mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" 
                                    rows="3" placeholder="分享你的心情">{{$comments->content}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3" onclick="location.href='/bootstrap';">Updata</button>
                            </form>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>
    @endsection
