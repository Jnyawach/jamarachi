<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/css/all.css')}}" rel="stylesheet">
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
                                <form class="dropdown-item">
                                    <button type="submit" class="btn btn-link p-0 text-decoration-none">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sideBar" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
            <button type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="nav-left-sidebar sidebar-dark pt-5">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg  p-3">

                        <div class="navbar-collapse" >
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#"  aria-expanded="false" >ADMIN PANEL</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-user" aria-hidden="true"></i>Users</a>
                                    <div id="submenu-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Admin</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Managers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Writers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Client</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</header>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
