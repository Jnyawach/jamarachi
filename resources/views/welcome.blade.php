@extends('layouts.main')
@section('title','Mobile Phones| Computers | Accessories')
@section('content')
    <section>
    <div class="row">
        <div class="col-12">
            <div id="Banner-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" >
                    <div class="carousel-item active position-relative" data-bs-interval="3000">
                        <img src="images/tecno-banner.jpg" class="d-block w-100" alt="..." >


                        <div class="carousel-caption d-none d-md-block text-start caption-text">
                            <h1>Imagine a world <br> #WithNoBoundaries</h1>
                            <p>Designed for you by you. <span class="fw-bold">#With lots of love</span></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="images/motorolla-banner.jpg" class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block text-start caption-text">
                            <h1>Imagine a world <br> #WithNoBoundaries</h1>
                            <p>Designed for you by you</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="images/motorolla-banner2.jpg" class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block text-start caption-text">
                            <h1>Imagine a world <br> #WithNoBoundaries</h1>
                            <p>Designed for you by you. Lots of love</p>
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
    <section class="newest-offer mb-5">
        <div class="row">
            <div class="col-12 mx-auto text-center mt-5">
                <h2 class="section-start">New and Customized for you</h2>
                <ul class="nav nav-pills mb-3 justify-content-center"  id="pills-tab" role="tablist">
                    <li class="nav-item new-button" role="presentation">
                        <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For You</button>
                    </li>
                    <li class="nav-item new-button" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">On Offer</button>
                    </li>
                    <li class="nav-item new-button" role="presentation">
                        <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Gift Ideas</button>
                    </li>
                </ul>
                <div class="tab-content mt-5 p-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 text-center for-you m-2 mx-auto">
                                <div class=" p-5 text-center">
                                    <img src="images/tecno-camon-18-1.png" alt="Tecno Cammon 11" class="img-fluid m-1">
                                    <h6 class="fs-4 mt-5 text-start product-card-title">Tecno Camon 18 Premier</h6>
                                    <a href="#" class="btn btn-primary mt-3 for-btn">add to Cart</a>
                                    <div class="text-start mt-3 trending-paragraph">
                                        <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                        <p >#Money back Guarantee<br>
                                            #Free 2GB data bundles on us<br>
                                            #Free Ear buds on us</p>

                                    </div>

                                </div>

                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center m-2 mx-auto">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="for-tile p-4 text-center ">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3  product-card-title text-start">Samsung Galaxy S-Edge</h6>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="trending-tag" style="height: 20px;">#Free Ear buds on us</p>
                                                <div class="compare">
                                                    <a href="#" class="btn btn-primary">Explore <i class="fas fa-long-arrow-alt-right ms-3"></i></a>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="for-tile p-4 text-center mt-2">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="trending-tag" style="height: 20px;">#Free Ear buds on us</p>
                                                <div class="compare">
                                                    <a href="#" class="btn btn-primary">Explore <i class="fas fa-long-arrow-alt-right ms-3"></i></a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="for-tile p-4 text-center">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="trending-tag" style="height: 20px;">#Free Ear buds on us</p>
                                                <div class="compare">
                                                    <a href="#" class="btn btn-primary">Explore <i class="fas fa-long-arrow-alt-right ms-3"></i></a>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="for-tile p-4 text-center mt-2">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                            <div class="text-start mt-3 trending-paragraph">
                                                <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                                <p class="trending-tag" style="height: 20px;">#Free Ear buds on us</p>
                                                <div class="compare">
                                                    <a href="#" class="btn btn-primary">Explore <i class="fas fa-long-arrow-alt-right ms-3"></i></a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 mx-auto text-center m-2">
                                <div class=" p-4 text-center for-you">
                                    <img src="images/tecno-camon-18-1.png " alt="Tecno CAmmon 11" class="img-fluid ">
                                    <h6 class="fs-4 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                    <a href="#" class="btn btn-primary mt-3 for-btn">add to Cart</a>
                                    <div class="text-start mt-3 trending-paragraph">
                                        <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                        <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                        <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i>Available for a limited time only</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 mx-auto text-center m-2">
                                <div class=" p-4 text-center for-you">
                                    <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid ">
                                    <h6 class="fs-4 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                    <a href="#" class="btn btn-primary mt-3 for-btn">add to Cart</a>
                                    <div class="text-start mt-3 trending-paragraph">
                                        <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                        <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                        <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i>Available for a limited time only</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 mx-auto text-center m-2">
                                <div class=" p-4 text-center for-you">
                                    <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid" >
                                    <h6 class="fs-4 mt-3 product-card-title text-start">Tecno Camon 18 Premier</h6>
                                    <a href="#" class="btn btn-primary mt-3 for-btn">add to Cart</a>
                                    <div class="text-start mt-3 trending-paragraph">
                                        <p class="mb-0"><span>Kshs.24999</span>&nbsp;<strong> Save Kshs. 2000</strong></p>
                                        <p class="fw-bold fs-5 mt-0">KShs.22499</p>
                                        <p class="trending-tag" style="height: 20px;"><i class="fas fa-hashtag"></i>Available for a limited time only</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                                <div class="text-center explore-gift">
                                    <img src="images/gifts.jpg" alt="Tecno Cammon 11" class="img-fluid" style="border-radius: 30px;">
                                    <a href="#" class="btn btn-primary mt-3 for-btn p-2 ms-3">#Explore Gifts<i class="fas fa-long-arrow-alt-right ms-5"></i></a>

                                </div>

                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="text-start love-air">
                                    <h2>An Amazing way to express love</h2>
                                    <p>We package and <mark>deliver</mark> to your or their <mark>doorstep</mark>
                                        <span>#LoveInTheAir<i class="far fa-heart"></i></span>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="for-tile p-4 text-center ">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3">Tecno Camon 18 Premier</h6>



                                        </div>
                                        <div class="for-tile p-4 text-center mt-2">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3">Tecno Camon 18 Premier</h6>


                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="for-tile p-4 text-center">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3">Tecno Camon 18 Premier</h6>


                                        </div>
                                        <div class="for-tile p-4 text-center mt-2">
                                            <img src="images/tecno-camon-18-1.png" alt="Tecno CAmmon 11" class="img-fluid m-1" style="width: 150px;">
                                            <h6 class="fs-5 mt-3">Tecno Camon 18 Premier</h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 trending pt-2 p-2 mb-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <p class="fs-4 p-3 m-4">Save up to <span class="fw-bold">an extra 8%</span>  on these selected products</p>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mx-auto p-2 ">
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
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mx-auto p-2 ">
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
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mx-auto p-2 ">
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
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mx-auto p-2">
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
    </section>
    @if($blog->count()>0)
    <section class="mt-5 mb-5 p-3 blog explore-gift">
        <h1 class="text-center">#Discover all you have been missing</h1>
        <div class="row p-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img src="{{asset('images/skater.jpg')}}" alt="Tecno Cammon 11" class="img-fluid m-1">

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @foreach($blog as $index=>$post)

                <div class="blog-post">
                    <hr class="blog-hide">
                    <div class="row">
                        <div class="col-2">
                            <h4>0{{$index}}</h4>

                        </div>
                        <div class="col-10">
                            <h2>{{\Illuminate\Support\Str::limit($post->title, 80, $end='...')}}</h2>
                            <a href="{{route('stories.show', $post->slug)}}" title="read more" class="btn btn-link fs-5 blog-hide">Read More<i class="fas fa-long-arrow-alt-right ms-3"></i></a>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif
@endsection
