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
<header class="p-5">
    <div class="row">
        <div class="col-4">

                <button class="btn btn-link fs-4 nav-button ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideBar" aria-controls="sideBar">
                    <span><i class="fas fa-bars"></i></span>
                </button>

            <h5>    <span class="d-none d-sm-block"> Jamarachi Admin</span></h5>


        </div>
        <div class="col-8">
            <ul class="nav justify-content-end admin-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><i class="far fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle text-uppercase text-decoration-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                           <li><hr class="dropdown-divider"> </li>
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><hr class="dropdown-divider"> </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>


</header>
<!---------------------------Sidebar------------>
<div class="offcanvas offcanvas-start sidebar" data-bs-scroll="true" tabindex="-1" id="sideBar" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
        <button type="button" class="text-reset close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white; background: none !important;
    border: none !important; font-size: 28px">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion accordion-flush admin-sidebar " id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="far fa-user me-3"></i>Users
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">

                            <li><a href="{{route('users.index')}}" title="Admins">Users</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fas fa-user-lock me-3"></i>Roles & Permission
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('roles.index')}}" title="Admins">Create Roles & Permission</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="fas fa-store-alt me-3"></i>Store
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('products.index')}}" title="Admins">Products</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <i class="fas fa-info-circle me-3"></i>Faqs
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('faqs.index')}}" title="Admins">FAqs Category</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('faqs.create')}}" title="Admins">Create Faqs</a> </li>

                        </ul>
                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <i class="far fa-file-alt me-2"></i>Policies
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-collapseFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('policy.index')}}" title="Admins">Policies</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('policy.create')}}" title="Admins">Create Policy</a> </li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        <i class="fas fa-tags me-2"></i>Brands
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-collapseSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('brand.index')}}" title="Admins">Brands</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('brand.create')}}" title="Admins">Create Brands</a> </li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        <i class="fas fa-code-branch me-2"></i>Categories
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-collapseSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('category.index')}}" title="Admins">Create Categories</a> </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        <i class="fas fa-code-branch me-2"></i>Subcategories
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-collapseEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('subcategory.index')}}" title="Admins">Create Subcategories</a> </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        <i class="fas fa-blog me-2"></i>Blog
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-collapseNine" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('blog.index')}}" title="Admins">Manage Blog</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('blog.create')}}" title="Admins">Create Posts</a> </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        <i class="fas fa-money-check-alt me-2"></i>Promotions
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-collapseTen" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('promotions.index')}}" title="Admins">View Promotions</a> </li>

                        </ul>
                        <ul class="list-unstyled folders">
                            <li><a href="{{route('promotions.create')}}" title="Admins">Create Promotions</a> </li>

                        </ul>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!----------------------End of sidebar----------------->
<main>
    @yield('content')
</main>
<footer class="p-3 mt-5">
    <hr>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
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
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
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
                    <a class="nav-link" href="#">Redmi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Motorolla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Oppo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">See more</a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
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
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h6 class="ms-1">ABOUT US</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"  href="#">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
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
    <p class="mt-2">&copy; 2021 Cerve Ltd. All rights reserved</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
