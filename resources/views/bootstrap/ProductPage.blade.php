@extends('bootstrap.template')

@section('pageTitle')
    ProductPage
@endsection


<!-- 各頁css -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ProductPage.css') }}">

@endsection

@section('main')
    {{-- <section id="ProductPage">
        <div class="container">
            <!-- 商品照片 -->
            <div class="products row row-cols-1 row-cols-lg-2 d-flex">
                <div class="products_img col h-auto">
                    <img class="h-100" src="
                            @if ($ProductsInRandomOrder->img_path == '' || $ProductsInRandomOrder->img_path == null) {{ asset('/storage/product/LPNBnAtPENn0EqWGHptkJvAM0XnFg5Y08dTSL9mA.jpg') }}
                                    @else
                                        {{ $ProductsInRandomOrder->img_path }} @endif
                                        " alt="">
                </div>
                <!-- 商品詳細介紹 -->
                <div class="products_content col ps-5 pe-0 pt-4 pb-4">
                    <h6>{{ $ProductsInRandomOrder->type }}</h6>
                    <h5 class="card-title mb-3">{{ $ProductsInRandomOrder->title }}</h5>
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
                    <p class="card-text">{{ $ProductsInRandomOrder->content }}</p>

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
                        <span class="price col">${{ $ProductsInRandomOrder->price }}</span>
                        <div class="button_item col d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Button</button>
                            <button class="like btn btn-light ms-3"><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- 商品資訊 -->
    <section class="product-main  mt-5">

        <div class="product-content">

            <div class="product-media">
                <div class="product-image">
                    <img class="active"
                        src="https://images-na.ssl-images-amazon.com/images/I/81J7k2APs9L._AC_SL1500_.jpg" alt="...">
                </div>

                <div class="product-thumb">
                    <div class="thumb-item">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81J7k2APs9L._AC_SL1500_.jpg" alt="...">
                    </div>
                    <div class="thumb-item">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81OX7mh54wL._AC_SL1500_.jpg" alt="...">
                    </div>
                    <div class="thumb-item">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/819F38EBG3L._AC_SL1500_.jpg" alt="...">
                    </div>
                    <div class="thumb-item">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81J04QuVMVL._AC_SL1500_.jpg" alt="...">
                    </div>
                </div>
            </div>

            <div class="product-desc">

                <div class="desc-header">
                    
                    <!-- 評分 -->
                    <div class="rating">
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

                    <h1>THE RIDER - STEEL TABLE LEGS</h1>

                    <div class="price">
                        <span class="price-old">24.00 £ loc net</span>
                        <span class="price-new">19.20 £ tac incl.</span>
                        <span class="price-discount">-20%</span>
                    </div>
                </div>

                <div class="desc-content">
                    <span>
                        <h4>Available in two sizes:</h4>
                        <p>40cm and 71 cm</p>
                    </span>
                    <span>
                        <h4>2 colors:</h4>
                        <p>dark steel of matt black</p>
                    </span>
                    <span>
                        <p>The price is for one leg</p>
                    </span>
                    <span class="mt-space">
                        <p>All our legs are handmade, with love, in Montpellier, France!</p>
                    </span>
                </div>

                <div class="product-type">
                    <div class="item product-type-color">
                        <label for="product-type-color">Color</label>
                        <div class="color_size" id="product-type-color">
                            <button class="border_color light" style="width: 24px; height: 24px;"></button>
                            <button class="border_color balck" style="width: 24px; height: 24px;"></button>
                            <button class="border_color purple" style="width: 24px; height: 24px;"></button>
                        </div>
                        {{-- <select id="product-type-color" name="color">
                            <option>Any</option>
                            <option selected>Dark Steel</option>
                            <option>Matt Black</option>
                        </select> --}}

    
                    </div>

                    <div class="item product-type-size">
                        <label for="product-type-size">Height</label>
                        <select id="product-type-size" name="size">
                            <option>Any</option>
                            <option selected>40 cm</option>
                            <option>50 cm</option>
                        </select>
                    </div>

                    <div class="item product-type-qty">
                        <label for="product-type-qty">Qty</label>
                        <select id="product-type-qty" name="qty">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="product-payment">
                    <h4>Payment:</h4>
                    <span>
                        <img src="img/mastercard.svg" alt="">
                    </span>
                    <span>
                        <img src="img/maestro.svg" alt="">
                    </span>
                </div>

                <!-- 付款方式 -->
                {{-- <div class="product-payinfo">
                    <div class="item">
                        <span>
                            <svg class="icon icon-credit-card">
                                <use xlink:href="#icon-credit-card"></use>
                            </svg>
                        </span>
                        <p>3x payment <br>free of change</p>
                    </div>

                    <div class="item">
                        <span>
                            <svg class="icon icon-easy-returns">
                                <use xlink:href="#icon-easy-returns"></use>
                            </svg>
                        </span>
                        <p>Easy Returns</p>
                    </div>

                    <div class="item">
                        <span>
                            <svg class="icon icon-free-delivery">
                                <use xlink:href="#icon-free-delivery"></use>
                            </svg>
                        </span>
                        <p>Free delivery <br>from £ 16g</p>
                    </div>
                </div> --}}

            </div>

        </div>

        <div class="product-footer">
            <div class="footer-inf">
                <div class="inf-image">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81J7k2APs9L._AC_SL1500_.jpg" alt="...">
                </div>
                <div class="inf-title">
                    <div class="inf-cat">
                        <span>BEATIFUL</span>
                        <span>SOLO</span>
                        <span>DURABLE</span>
                    </div>
                    <h2>
                        <a href="#">The Rider - Steel Table Legs</a>
                    </h2>
                </div>
            </div>

            <div class="footer-price">
                <div class="total-price">
                    <span>Total Prices:</span>
                    <div class="">19.20 £</div>
                </div>
                <button type="button" name="button" onclick="location.href='/';">ADD TO CART</button>
            </div>
        </div>
    </section>
@endsection


@section('js')
    <script>
        const activeImage = document.querySelector(".product-image .active");
        const productImages = document.querySelectorAll(".product-thumb img");
        function changeImage(e) {
            activeImage.src = e.target.src;
        }
        productImages.forEach((image) => image.addEventListener("click", changeImage));
    </script>
@endsection
