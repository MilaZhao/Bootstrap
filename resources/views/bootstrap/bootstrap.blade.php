@extends('bootstrap.template')

    @section('pageTitle')
        index
    @endsection


    <!-- 各頁css -->
    @section('css')
     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @endsection
    


    @section('main')
        <!-- Banner -->
        <section id="banner">
            <div class="container-fluid p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/banner01.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/banner04.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/banner03.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section id="info">
            <div class="container d-flex flex-column align-items-center">
                
                <!-- 文字區塊 -->
                <div class="textBlock row text-center d-flex justify-content-center pt-5 my-5">
                    <h2 class="mb-4">Raw Denim Heirloom Man Braid</h2>
                    <p class="lead">
                        Blue bottle crucifix vinyl
                        post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing
                        banh mi
                        pug. </p>
                    <div class="divider mt-2" style="width: 5rem; height: 4px"></div>
                </div>

                <!-- 3 Cards -->
                <div class="info_cards row">
                    @foreach ( $data3 as $news )
                        <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center flex-column ">
                            <div class="info_card text-center py-5">
                                <img src="
                                    @if ($news->img == "" || $news->img == null)
                                        {{asset('img/pic02.jpeg')}}
                                    @else
                                        {{$news->img}}
                                    @endif 
                                    " alt="" class="rounded-circle"  style="width: 80px; height: 80px;" >
                            </div>
                                {{-- <svg class="card_icon m-auto" style="width: 80px" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                    viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg> --}}
                             <div class="card-body text-center">
                                 <h5 class="card-title p-1">{{$news->title}}</h5>
                                 <p class="card-text">{{$news->content}}</p>
                                 <a href="#" class="card-link p-1">Go somewhere &emsp;<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                        <div class="info_card text-center py-5">
                            <svg class="card_icon m-auto" style="width: 80px" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title p-1">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="card-link p-1">Go somewhere &emsp;<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                        <div class="info_card text-center py-5">
                            <svg class="card_icon m-auto" style="width: 80px" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title p-1">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="card-link p-1">Go somewhere &emsp;<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                        <div class="info_card text-center py-5">
                            <svg class="card_icon m-auto" style="width: 80px" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title p-1">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="card-link p-1">Go somewhere &emsp;<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <button class="btn btn-primary mt-5" type="submit">Button</button>
            </div>
        </section>
        <section id="pic_wall_wraper">
            <div class="container">
                <!-- 文字區塊 -->
                <div class="pic_wall_text row d-flex" style="padding-bottom: 80px;">
                    <h2 class="col-lg-5 col-md-12">Master Cleanse Reliac Heirloom</h2>
                    <p class="col">Whatever cardigan tote bag tumblr hexagon
                        brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                        heard of them
                        man bun deep jianbing selfies heirloom.</p>
                </div>
                <!-- 照片牆 -->
                <div class="pic_wall row d-flex m-0 gx-0">
                    <div class="wall_one col d-flex flex-wrap">
                        <div class="picA pic_size_m col p-2">
                            <img src="
                            @if ($news->img == "" || $news->img == null)
                                {{asset('img/pic01.jpeg')}}
                            @else
                                {{$news->img}}
                            @endif 
                            " alt="">
                        </div>
                        <div class="picB pic_size_m col p-2">
                            <img src="{{ asset('img/pic02.jpeg') }}" alt="">
                        </div>
                        <div class="picC pic_size_l p-2">
                            <img src="{{ asset('img/pic03.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="wall_two col d-flex flex-wrap">
                        <div class="picA pic_size_l p-2">
                            <img src="{{ asset('img/pic01.jpeg') }}" alt="">
                        </div>
                        <div class="picB pic_size_m col p-2">
                            <img src="{{ asset('img/pic02.jpeg') }}" alt="">
                        </div>
                        <div class="picC pic_size_m col p-2">
                            <img src="{{ asset('img/pic03.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing">
            <div class="container text-center">
                <!-- 文字區塊 -->
                <div class="pricing_text_content row" style="padding-bottom: 80px;">
                    <h2>Pricing</h2>
                    <p>Banh mi cornhole echo park skateboard authentic crucifix
                        neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
                </div>
                <!-- Table -->
                <div class="row col-9 m-auto">
                    <table class="table table-borderless table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Plan</th>
                                <th scope="col">Speed</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-3">Start</td>
                                <td class="px-2 py-3">5 Mb/s</td>
                                <td class="px-2 py-3">15GB</td>
                                <td class="px-2 py-3">Free</td>
                                <td class="radio px-2 py-3">
                                    <input type="radio" name="radios" id="radio1" />
                                    <label for="radio1"></label>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-2 py-3">Start</td>
                                <td class="px-2 py-3">5 Mb/s</td>
                                <td class="px-2 py-3">15GB</td>
                                <td class="px-2 py-3">Free</td>
                                <td class="radio px-2 py-3">
                                    <input type="radio" name="radios" id="radio1" />
                                    <label for="radio1"></label>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-2 py-3">Start</td>
                                <td class="px-2 py-3">5 Mb/s</td>
                                <td class="px-2 py-3">15GB</td>
                                <td class="px-2 py-3">Free</td>
                                <td class="radio px-2 py-3">
                                    <input type="radio" name="radios" id="radio1" />
                                    <label for="radio1"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row d-flex justify-content-between p-0">
                        <a href="#" class="card-link p-1 col d-flex justify-content-start align-items-center">Go
                            somewhere &emsp;<i class="fa-solid fa-arrow-right-long"></i></a>
                        <button class="btn btn-primary col-2">Button</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="Blog_cards">
            <div class="container">
                <div class="pic_wall_text row d-flex" style="padding-bottom: 80px;">
                    <h2 class="col-lg-5 col-md-12">Pitchfork Kickstarter Taxidermy
                        <div class="divider mt-2" style="width: 5rem; height: 4px"></div>
                    </h2>

                    <p class="col">Whatever cardigan tote bag tumblr hexagon brooklyn
                        asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of
                        them man bun
                        deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                </div>
                <div class="blog_card_wrapper_row">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <div class="card p-4">
                                <img src="{{ asset('img/pic04.jpeg') }}" class="card-img-top mb-4" alt="...">
                                <div class="card-body">
                                    <h6>SUBTITLE</h6>
                                    <h5 class="card-title mb-3">Chichen Itza</h5>
                                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                        Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-4">
                                <img src="{{ asset('img/pic04.jpeg') }}" class="card-img-top mb-4" alt="...">
                                <div class="card-body">
                                    <h6>SUBTITLE</h6>
                                    <h5 class="card-title mb-3">Chichen Itza</h5>
                                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                        Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-4">
                                <img src="{{ asset('img/pic04.jpeg') }}" class="card-img-top mb-4" alt="...">
                                <div class="card-body">
                                    <h6>SUBTITLE</h6>
                                    <h5 class="card-title mb-3">Chichen Itza</h5>
                                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                        Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-4">
                                <img src="{{ asset('img/pic04.jpeg') }}" class="card-img-top mb-4" alt="...">
                                <div class="card-body">
                                    <h6>SUBTITLE</h6>
                                    <h5 class="card-title mb-3">Chichen Itza</h5>
                                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat.
                                        Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="container">
                <div class="new_list row justify-content-center">
                    <div class="new_icon col-3 ">
                        <svg class="card_icon m-auto" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="new_content col">
                        <h2>Shooting Stars</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine.</p>
                        <a href="#" class="card-link p-1 col">Go
                            somewhere &emsp;<i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>

                <div class="new_list row justify-content-center">
                    <div class="new_icon col-3">
                        <svg class="card_icon m-auto" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="new_content col">
                        <h2>Shooting Stars</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine.</p>
                        <a href="#" class="card-link p-1 col">Go
                            somewhere &emsp;<i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>


                <div class="new_list row justify-content-center">
                    <div class="new_icon col-3">
                        <svg class="card_icon m-auto" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="new_content col">
                        <h2>Shooting Stars</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine.</p>
                        <a href="#" class="card-link p-1 col">Go
                            somewhere &emsp;<i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="shopping_card">
            <div class="container">
                <!-- 商品照片 -->
                <div class="products row row-cols-1 row-cols-lg-2 d-flex">
                    <div class="products_img col h-auto">
                        <img class="h-100" src="
                        @if ($ProductsInRandomOrder->img_path == "" || $ProductsInRandomOrder->img_path == null)
                                        {{asset('/storage/product/LPNBnAtPENn0EqWGHptkJvAM0XnFg5Y08dTSL9mA.jpg')}}
                                    @else
                                        {{$ProductsInRandomOrder->img_path}}
                                    @endif 
                                    " alt="" >
                    </div>
                    <!-- 商品詳細介紹 -->
                    <div class="products_content col ps-5 pe-0 pt-4 pb-4">
                        <h6>{{$ProductsInRandomOrder->type}}</h6>
                        <h5 class="card-title mb-3">{{$ProductsInRandomOrder->title}}</h5>
                        <div class="rating pb-3">
                            <span class="star_icon">
                                <svg class="star" style="width: 16px;" fill="currentColor" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg class="star" style="width: 16px;" fill="currentColor" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg class="star" style="width: 16px;" fill="currentColor" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg class="star" style="width: 16px;" fill="currentColor" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg class="star-ouline" style="width: 16px;" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <span class="reviews ps-3">4 Reviews</span>
                            </span>
                            <span class="social_icon_item ms-3 ps-3 pt-1 pb-1">
                                <a class="fb" href="#">
                                    <svg class="social_icon" style="width: 16px;" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>

                                <a class="twitter" href="#">
                                    <svg class="social_icon" style="width: 16px;" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="message" href="#">
                                    <svg class="social_icon" style="width: 16px;" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>

                            </span>
                        </div>
                        <p class="card-text">{{$ProductsInRandomOrder->content}}</p>

                        <div class="color_size mt-4 mb-4">
                            <span class="title me-3">Color</span>
                            <button class="border_color light" style="width: 24px; height: 24px;"></button>
                            <button class="border_color balck" style="width: 24px; height: 24px;"></button>
                            <button class="border_color purple" style="width: 24px; height: 24px;"></button>
                            <span class="title me-3 ms-3">Size</span>

                            <select class="form-select py-2" name="" id="">
                                <option value="">SM</option>
                                <option value="">S</option>
                                <option value="">M</option>
                                <option value="">L</option>
                                <option value="">XL</option>
                            </select>
                        </div>
                        <div class="price d-flex">
                            <span class="price col">${{$ProductsInRandomOrder->price}}</span>
                            <div class="button_item col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Button</button>
                                <button class="like btn btn-light ms-3"><i class="fa-solid fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- 卡片商品 --}}
        <section id="cads">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                    @foreach ( $ProductsTake as $products )
                        
                        <div class="col">
                            <div class="card wall" style="background-color: #fff;">

                                <a href="/ProductPage">

                                <img src="{{asset($products->img_path)}}" alt="">
                                {{-- <img src="
                                @if ($products->img_path == "" || $products->img_path == null)
                                    {{asset('/storage/product/LPNBnAtPENn0EqWGHptkJvAM0XnFg5Y08dTSL9mA.jpg')}}
                                @else
                                    {{$products->img_path}}
                                @endif 
                                " alt="" > --}}
                                
                                <div class="card-body">
                                    <h6>{{$products->type}}</h6>
                                    <h5 class="card-title mb-3">{{$products->title}}</h5>
                                    <p class="card-text">${{$products->price}}</p>

                                </div>

                                </a>
                            </div>
                        </div>

                    @endforeach

                    {{-- <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card wall" style="background-color: #fff;">
                            <img src="{{ asset('img/banner03.jpeg') }}" alt="">

                            <div class="card-body">
                                <h6>CATEGORY</h6>
                                <h5 class="card-title mb-3">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>

                            </div>
                        </div>
                    </div> --}}

                </div>
        </section>
        <section id="map">
            <div class="container-fluid p-0 position-relative">
                <div class="map position-absolute" style="width: 100%; height: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55859.33622645171!2d120.66333277695095!3d24.19048453202767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dec4ca3a271%3A0xd8b5a337271e60e2!2z6Ie65Lit5ZyL5a625q2M5YqH6Zmi!5e0!3m2!1szh-TW!2stw!4v1649654285512!5m2!1szh-TW!2stw"
                        width="100%" height="100%" style="border:0;filter: grayscale(1) contrast(1.2) opacity(0.4);"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="container contact d-flex justify-content-end">
                    <div class="contact_input col-sm-12 col-lg-4 shadow p-3 mb-5 bg-body rounded p-5">
                        <h5 class="pb-2">Feedback</h5>
                        <p class="pb-3">Post-ironic portland shabby chic echo park, banjo fashion axe
                        </p>
                        <!-- email -->
                        <div class="col pb-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control py-2 px-3" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="col pb-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control py-2 px-3" id="address" placeholder="1234 Main St"
                                required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <!-- submit btn -->
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                        <p class="pt-2" style="font-size: .75rem;">Chicharrones blog helvetica normcore iceland
                            tousled
                            brook viral
                            artisan.</p>
                    </div>

                </div>
            </div>
        </section>
    @endsection