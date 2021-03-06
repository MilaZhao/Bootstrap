<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        @yield('pageTitle')

    </title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- 通用css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- 各頁css -->
    @yield('css')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-xxl">
            <a class="navbar-brand" href="/"> <img src="{{asset('img/logo.svg')}}" alt="" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="text-align: center;" id="navbarTogglerDemo02">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/comment">Comment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ProductPage">Product</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/product">Product管理</a>
                    </li> --}}
                
                <div class="d-flex justify-content-center text-end align-items-center">
                    <a href="/shopping1" class="shoppingCar px-3"><i class="fas fa-shopping-cart"></i></a>
                    @auth
                    {{-- 如果帳號是管理者  要顯示後台的連結 --}}
                    @if (Auth::user()->power == 1)
                        <a href="/dashboard" class="nav-link">後台</a>

                    @endif
                        <a class="nav-link">{{ Auth::user()->name}}, 您好</a>
                        <a class="nav-link" href="" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</a>
                        <form method="POST" action="{{ route('logout') }}" hidden id="logout_form">
                            @csrf
                        </form>
                    @endauth
                    
                    @guest
                        <a class="user-icon nav-link " href="/login">登入</a>                   
                    @endguest
                    

                    {{-- <a href="/login" class="Login" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">
                        <i class="fas fa-user-circle ">登入</i>
                    </a> --}}
                </div>
            </div>
        </div>
    </nav>


    <main>
        @yield('main')
    </main>



    <footer id="footer">
        <div class="container">
            <div class="footer_content row row-cols-1 row-cols-sm-2 justify-content-between">
                <div class="col">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

                        <span class="ml-3 text-xl">數位方塊</span>
                    </a>
                    <p class="text-muted">© 2021Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>

                <div class="sitemap row row-cols-1 row-cols-sm-2 row-cols-xl-4 d-flex mt-5">
                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="footer_company">
        <div class="container">
            <div class="row">
                <p>© 2020 Tailblocks —
                    <a href="#">@knyttneve</a>
                </p>
            </div>
        </div>
    </section>

   

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/48055bd9f0.js" crossorigin="anonymous"></script>
    
     <!-- 各頁js -->
     @yield('js')

</body>

</html>
