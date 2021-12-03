@extends('layouts.main')
@section('title',$brand->name)
@section('content')
    <main>
        <section>

            <div class="row">
                <div class="col-12 mx-auto">
                    <h2 class="mb-4 ms-1 ms-lg-3 mt-3 fs-4 fw-bold" style="color: black"><a href="#" title="Homepage" class="text-decoration-none">Home</a> |
                        <a href="{{route('brands.show',$brand->slug)}}" title="{{$brand->name}}" class="text-decoration-none">{{$brand->name}}</a></h2>
                    <div id="Banner-carousel" class="carousel slide carousel-fade " data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" >
                            <div class="carousel-item active " data-bs-interval="3000">
                                <div class="brand-head p-5">
                                    <div class="row p-3">
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <p class="mb-0 fs-5 fw-bold" style="color: black;">Product of the day</p>
                                            <h2 class="mt-0">Tecno Camon 18 Premier</h2>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                                <p class="trending-tag"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                                <form>
                                                    <button type="submit" class="btn btn-primary ms-3">BUY NOW</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <img src="images/samsung-bespoke.png" class="img-fluid" title="Samsung Bespoke" style="width: 400px;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="brand-head p-5">
                                    <div class="row p-3">
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <p class="mb-0 fs-5 fw-bold" style="color: black;">Product of the day</p>
                                            <h2 class="mt-0">Oppo Reno 5</h2>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                                <p class="trending-tag"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                                <form>
                                                    <button type="submit" class="btn btn-primary ms-3">BUY NOW</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <img src="images/samsung-bespoke.png" class="img-fluid" title="Samsung Bespoke" style="width: 400px;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="brand-head p-5">
                                    <div class="row p-3">
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <p class="mb-0 fs-5 fw-bold" style="color: black;">Product of the day</p>
                                            <h2 class="mt-0">Galaxy Z Flip3 Bespoke Edition</h2>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                                <p class="trending-tag"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                                <form>
                                                    <button type="submit" class="btn btn-primary ms-3">BUY NOW</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto">
                                            <img src="images/samsung-bespoke.png" class="img-fluid" title="Samsung Bespoke" style="width: 400px;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#Banner-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#Banner-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon " aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <section class="trending pt-2 p-2 mb-5">

            <div class="sort mt-2 p-2 rounded-2">

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">

                        <form>
                            <div class="form-group row ">
                                <label for="sort-select" class="col-3 col-sm-6 col-md-4 col-lg-3 col-form-label fw-bold text-end ">SORT BY:</label>
                                <div class="col-6 col-sm-6 col-md-8 col-lg-9 text-start">
                                    <select class="form-select" aria-label="Default select example" id="sort-select">
                                        <option selected>FEATURED</option>
                                        <option value="1">NEWEST</option>
                                        <option value="2">PRICE $-$$</option>
                                        <option value="3">PRICE $$-$</option>
                                    </select>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-end">
                        <button class="btn btn-link text-decoration-none fs-5"><i class="far fa-comment-dots me-2"></i> Chat with Us</button>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mx-auto p-2">
                    <div class="product-filter pt-3 ps-2 pe-2">
                        <!--product search-->
                        <section>
                            <h5 class="ms-3 mb-4">Filters</h5>
                            <form>
                                <div class="input-group">
                                    <input type="text" placeholder="SEARCH BRANDS & PRODUCTS" name="search" class="form-control search">
                                    <button type="submit" class="sechi"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </section>
                        <!--product search-->
                        <!-- Section: Average -->
                        <section class="mb-4 review-rate">

                            <h6 class="fw-bold mb-3 mt-3 ms-3">Avg. Customer Review</h6>

                            <a href="#!" >
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <p class="small  card-link-secondary px-2">& Above</p>
                                    </li>
                                </ul>
                            </a>
                            <a href="#!">
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <p class="small  card-link-secondary px-2">& Above</p>
                                    </li>
                                </ul>
                            </a>
                            <a href="#!">
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <p class="small  card-link-secondary px-2">& Above</p>
                                    </li>
                                </ul>
                            </a>
                            <a href="#!">
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm "></i>
                                    </li>
                                    <li>
                                        <p class="small card-link-secondary px-2">& Above</p>
                                    </li>
                                </ul>
                            </a>

                        </section>
                        <!-- Section: Average -->
                        <!-- Section: Price -->
                        <section class="mb-4 ps-3">

                            <h6 class="fw-bold mb-3">Price</h6>

                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Under KES 25,000</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="2550">KES 5,000 to KES 10,000</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="50100">KES 10,000 to KES 15,000</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input" id="100200" name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="100200">KES 15,000 to KES 20,000</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input" id="200above" name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="200above">KES 20,000 & Above</label>
                            </div>

                        </section>
                        <!-- Section: Price -->
                        <!-- Section: Price -->

                        <section class="mb-4 ps-3">

                            <h6 class="fw-bold mb-3">Price</h6>

                            <form>
                                <div class="d-flex align-items-center mt-4 pb-1">
                                    <div class="md-form md-outline my-0">
                                        <input id="from" type="text" class="form-control mb-0">
                                        <label for="form">$ Min</label>
                                    </div>
                                    <p class="px-2 mb-0 text-muted"> - </p>
                                    <div class="md-form md-outline my-0">
                                        <input id="to" type="text" class="form-control mb-0">
                                        <label for="to">$ Max</label>
                                    </div>
                                </div>
                            </form>

                        </section>
                        <!-- Section: Price -->
                        <!-- Section: Condition -->
                        <section class="mb-4 ps-3">

                            <h6 class="font-weight-bold mb-3">Color</h6>

                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="new">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="new">Black</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="used">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="used">Gold</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="collectible">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Purple</label>
                            </div>
                            <div class="form-check pl-0 mb-3 pb-1">
                                <input type="checkbox" class="form-check-input filled-in" id="renewed">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Silver</label>
                            </div>

                        </section>
                        <!-- Section: Condition -->

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 mx-auto">

                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4  p-2 ">
                            <div class="trending-product p-3 text-center shadow-sm">
                                <div class="compare text-end">
                                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                                </div>
                                <img src="images/tecno-camon-18-1.png" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
                                <h6 class="mt-2 text-start product-card-title">Galaxy XCover Pro 64GB</h6>
                                <div class="text-start mt-3 trending-paragraph">
                                    <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                    <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                    <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="#" class="btn btn-link text-decoration-none">Learn More</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <form>
                                            <button type="submit" class="btn btn-primary">BUY NOW</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4  p-2 ">
                            <div class="trending-product p-3 text-center shadow-sm">
                                <div class="compare text-end">
                                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                                </div>
                                <img src="images/tecno-camon-18-1.png" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
                                <h6 class="mt-2 text-start product-card-title">Galaxy XCover Pro 64GB</h6>
                                <div class="text-start mt-3 trending-paragraph">
                                    <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                    <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                    <p class="trending-tag" style="height: 20px;"></p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="#" class="btn btn-link text-decoration-none">Learn More</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <form>
                                            <button type="submit" class="btn btn-primary">BUY NOW</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4  p-2 ">
                            <div class="trending-product p-3 text-center shadow-sm">
                                <div class="compare text-end">
                                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                                </div>
                                <img src="images/tecno-camon-18-1.png" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
                                <h6 class="mt-2 text-start product-card-title">Galaxy XCover Pro 64GB</h6>
                                <div class="text-start mt-3 trending-paragraph">
                                    <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                    <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                    <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="#" class="btn btn-link text-decoration-none">Learn More</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <form>
                                            <button type="submit" class="btn btn-primary">BUY NOW</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4  p-2">
                            <div class="trending-product p-3 text-center shadow-sm">
                                <div class="compare text-end">
                                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                                </div>
                                <img src="images/tecno-camon-18-1.png" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
                                <h6 class="mt-2 text-start product-card-title">Galaxy XCover Pro 64GB</h6>
                                <div class="text-start mt-3 trending-paragraph">
                                    <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                    <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                    <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i> Get a free 2GB Data bundle on us</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="#" class="btn btn-link text-decoration-none">Learn More</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <form>
                                            <button type="submit" class="btn btn-primary">BUY NOW</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="text-center">
                <nav class=" nav justify-content-center">
                    <ul class="pagination pagination-circle">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </section>

        </section>
    </main>
@endsection
