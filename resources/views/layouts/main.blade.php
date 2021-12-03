<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jamarachi-@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/css/all.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body class="admin">
<header>
    <section class="introduction pt-2 ps-3 pe-3 d-none d-sm-block">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div  class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>#Free Shipping for order above KES 9999</p>
                        </div>
                        <div class="carousel-item">
                            <p>#We will be closed during the Mashuja Holiday</p>
                        </div>
                        <div class="carousel-item">
                            <p>#Free phone Bluetooth speaker on orders above KES 14999</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-lg-end text-md-end text-sm-end">
                <p class="justify-content-end">Call Us Now: 0717109280</p>
            </div>
        </div>
    </section>
    <section class="introduction pb-1 ps-3 pt-3 d-lg-none d-md-none d-sm-none">
        <p class="justify-content-end">Call Us Now: 0717109280</p>
    </section>
    <section class="d-lg-none mt-3 d-md-none">
        <div class="row p-1">
            <div class="col-6 ">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="Jamarachi Logo" style="width: 180px;">
                </a>

            </div>
            <div class="col-6 text-end">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <button type="button" class="fs-4 phone-user nav-link" data-bs-toggle="modal" data-bs-target="#small-modal"><i class="fas fa-search"></i></button>
                        <div class="modal fade" id="small-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header search-close">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; font-size: 34px;color: white;"><i class="far fa-times-circle"></i></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-12 mx-auto text-center m-4">
                                                <h1 class="search-heading">What are you looking for?</h1>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-5 mx-auto text-center m-1 mb-1">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="search" placeholder="SEARCH BRANDS" name="search" class="form-control search">
                                                        <button type="submit" class="sechi"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 mx-auto text-center m-1 mb-5">
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Tecno Camon 11 pro
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Samsung Galaxy S-Edge
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Sony Z-edge
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Infinix Pro max
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Nokia flip side
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                    Oppo Camera phone
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="fs-4 phone-user nav-link"><i class="fas fa-shopping-basket"></i></button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="fs-4 phone-user nav-link"data-bs-toggle="offcanvas" data-bs-target="#small-menu" aria-controls="small-menu"> <i class="fas fa-bars"></i></button>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="small-menu" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">JAMARACHI</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body text-start">
                                <nav class="nav flex-column">
                                    <a class="nav-link btn-link">SHOP ALL</a>
                                    <a class="nav-link btn-link" href="#">BRANDS</a>
                                    <a class="nav-link btn-link" href="#">OFFERS</a>
                                    <a class="nav-link btn-link" href="#">GIFTS IDEAS</a>
                                    <a class="nav-link btn-link" href="#">SUPPORT</a>
                                   @auth()
                                        <a class="nav-link btn-link" href="#"><i class="far fa-user me-2"></i>MY ACCOUNT</a>
                                        <a class="nav-link btn-link" href="#">MY ORDERS</a>
                                       <form action="{{route('logout')}}" method="POST">
                                          @csrf
                                           <button type="submit" class="btn btn-primary">Logout</button>
                                       </form>
                                       @endauth


                                </nav>
                                <hr>
                                @guest()
                                <a href="{{route('login')}}" class="btn btn-link fs-5"><i class="far fa-user me-2"></i>Sign in/Create Account</a>
                                @endguest
                                <a href="#" class="btn btn-link fs-5">Track your Orders</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>



        </div>
    </section>
    <section class="d-none d-md-block d-lg-block">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-expand-md">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="Jamarachi Logo" style="width: 180px;">
                        </a>
                        <div class="navbar-collapse">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="shop-all.html">Shop all</a>
                                </li>
                                <!--Brands menu tab-->
                                <li class="nav-item dropdown full-dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown-brands" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">Brands</a>
                                    <ul class="dropdown-menu full-dropdown-content" aria-labelledby="navbarDropdown-brands">

                                        <div class="row p-5 mt-4">
                                            <div class="col-12 col-sm-12 col-mg-8 col-lg-5 mx-auto text-center m-1 mb-5">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="text" placeholder="SEARCH BRANDS" name="search" class="form-control search">
                                                        <button type="submit" class="sechi"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 mx-auto text-center m-1">
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    SAMSUNG
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    HUAWEI
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    OPPO
                                                </a>
                                            </div>

                                            <div class="col-12 mx-auto text-center m-1">
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    TECNO
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    INFINIX
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    REDMI
                                                </a>
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    IPHONE
                                                </a>

                                            </div>
                                            <div class="col-12 mx-auto text-center m-1">
                                                <a href="#" class="btn btn-outline-secondary brands" title="Phone Brands">
                                                    ALL
                                                </a>


                                            </div>


                                        </div>
                                    </ul>
                                </li>
                                <!--end of Brands menu tab-->
                                <!--Offer menu tab-->
                                <li class="nav-item dropdown full-dropdown">
                                    <a class="nav-link" href="#"  id="navbarDropdown-offers" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Offers
                                    </a>
                                    <ul class="dropdown-menu full-dropdown-content" aria-labelledby="navbarDropdown-offers">
                                        <div class="row pt-5 pb-5 ps-2 pe-2">
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <a href="#" title="Tecno camon 11">
                                                            <div class="gift-card p-3 text-center align-content-center">
                                                                <img src="images/tecno-camon-18-1.png"
                                                                     alt="two people surfing" class="img-fluid round-3">
                                                                <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                            </div>
                                                        </a>
                                                        <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                        <p>Kshs. 11,999</p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary mt-4 ms-5 mb-5 " title="Phones on Offer">SHOW MORE</a>

                                    </ul>
                                </li>
                                <!--End of Offer menu tab-->
                                <li class="nav-item dropdown full-dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Gifts
                                    </a>
                                    <ul class="dropdown-menu full-dropdown-content" aria-labelledby="navbarDropdown">
                                        <div class="row gifts p-5">
                                            <div class="col-12 col-sm-10 col-md-4 col-lg-4 p-2" >
                                                <h5 class="mb-5">Discover Amazing Gifts</h5>
                                                <p>Unlimited ways to express love <br>to your loved ones.</p>
                                                <p id="package"><span>We package and deliver to where you want it!</span>
                                                </p>
                                                <a href="#" class="btn btn-outline-primary mt-4">SHOP GIFTS</a>

                                            </div>
                                            <div class="col-12 col-sm-10 col-md-4 col-lg-4 p-2">
                                                <img src="images/surfer.jpg" alt="two people surfing" class="img-fluid "
                                                     style="width: 250px;border-radius: 30px;">
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-4 col-lg-4 p-1">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <a href="#" title="Tecno camon 11">
                                                                    <div class="gift-card p-3 text-center rounded-3">
                                                                        <img src="images/tecno-camon-18-1.png"
                                                                             alt="two people surfing" class="img-fluid round-3">
                                                                        <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                                    </div>
                                                                </a>
                                                                <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                                <p>Kshs. 11,999</p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <a href="#" title="Tecno camon 11">
                                                                    <div class="gift-card p-3 text-center rounded-3">
                                                                        <img src="images/tecno-camon-18-1.png"
                                                                             alt="two people surfing" class="img-fluid round-3">
                                                                        <a href="#" class="btn btn-primary add-to-cart ">add to Cart</a>

                                                                    </div>
                                                                </a>
                                                                <h6 class="mt-2">Tecno Camon 11 Pro</h6>
                                                                <p>Kshs. 11,999</p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </ul>
                                </li>
                                <li></li>

                            </ul>
                            <ul class="list-unstyled nav">
                                <li class="nav-item ">
                                    <a class="nav-link ps-0 ms-0" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ps-0 ms-0 fs-5 fw-normal" href="#" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="fas fa-search"></i></a>
                                    <div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="search-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl ">
                                                <div class="modal-content">
                                                    <div class="modal-header search-close">

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; font-size: 34px;color: white;"><i class="far fa-times-circle"></i></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-12 mx-auto text-center m-4">
                                                                <h1 class="search-heading">What are you looking for?</h1>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-5 mx-auto text-center m-1 mb-1">
                                                                <form>
                                                                    <div class="input-group">
                                                                        <input type="search" placeholder="SEARCH BRANDS" name="search" class="form-control search">
                                                                        <button type="submit" class="sechi"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 mx-auto text-center m-1 mb-5">
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Tecno Camon 11 pro
                                                                </a>
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Samsung Galaxy S-Edge
                                                                </a>
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Sony Z-edge
                                                                </a>
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Infinix Pro max
                                                                </a>
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Nokia flip side
                                                                </a>
                                                                <a href="#" class="btn btn-outline-secondary search-button" title="Phone Brands">
                                                                    Oppo Camera phone
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">

                                    <div class="dropdown">
                                        <a class="nav-link ps-0 ms-0 fs-5" href="#" id="user-login" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i></a>
                                        <ul class="dropdown-menu user-drop " aria-labelledby="user-login">
                                            @guest()
                                            <li><a class="dropdown-item user-item" href="{{route('login')}}">Login or Sign Up </a></li>
                                                <li><hr class="dropdown-divider"></li>
                                            @endguest

                                            <li><a class="dropdown-item user-item" href="#">Orders</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item user-item" href="#">My Account</a></li>

                                            @auth()
                                                    <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item user-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                                @endauth
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                   <a href="#" class="nav-link ps-0 ms-0 fs-5"><i class="fas fa-shopping-basket"></i></a>

                                </li>
                            </ul>





                        </div>
                    </div>
                </nav>
            </div>

        </div>


    </section>
</header>

<main>
    @yield('content')
</main>
<footer class="p-3 mt-5 d-none d-sm-block">
    <hr>
    <div class="row">
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            <h6 class="ms-1">SHOP</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"  href="#">Shop all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gifts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Track Orders</a>
                </li>

            </ul>

        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            <h6 class="ms-1">BRANDS</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"  href="#">Samsung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tecno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Huawei</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Oppo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">See more</a>
                </li>

            </ul>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            <h6 class="ms-1">SUPPORT</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"  href="#">Chat with us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Give Feedback</a>
                </li>


            </ul>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            <h6 class="ms-1">ABOUT US</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"  href="#">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('stories.index')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Terms and Condition</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Return Policy</a>
                </li>

            </ul>
        </div>
    </div>
    <p class="mt-2 text-center">&copy; 2021 Cerve Ltd. All rights reserved</p>
</footer>
<!--Phone device footer-->
<footer class="d-lg-none d-md-none d-sm-none mini-footer">
    <div class="row">
        <div class="col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                           SHOP
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Shop all</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Offers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gifts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Track Orders</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            BRANDS
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Samsung</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tecno</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Huawei</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Oppo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">See more</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            SUPPORT
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Our Story</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('stories.index')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Careers</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Terms and Condition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Return Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            ABOUT US
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Shop all</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Offers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gifts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Track Orders</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <h4 class="p-3">&copy; {{\Carbon\Carbon::now()->format('Y')}} Cerve Ltd All rights reserved</h4>
            <div class="text-center">
                <h6>BE PART OF THE REVOLUTION</h6>
                <ul class="nav justify-content-center social">
                    <li class="nav-item">
                        <a class="nav-link "  href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>

