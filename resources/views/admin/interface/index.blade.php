@extends('layouts.admin')
@section('title','Adjust Interface')
@section('content')
    <section>
        <div class="row">
            <div class="col-10 mx-auto">
                <h2 class="fw-bold">Homepage Slide show</h2>
                <p>Slide  show banner image must be 800 px by 500px.<br>
                    The image content must be positioned to the right to allow for
                    text overlay
                </p>
                <div id="Banner-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#Banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" >
                        <div class="carousel-item active position-relative" data-bs-interval="3000">
                            <img src="{{asset('images/tecno-banner.jpg')}}" class="d-block w-100" alt="..." >


                            <div class="carousel-caption d-none d-md-block text-start caption-text">
                                <h1>Imagine a world <br> #WithNoBoundaries</h1>
                                <p>Designed for you by you. <span class="fw-bold">#With lots of love</span></p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="{{asset('images/motorolla-banner.jpg')}}" class="d-block w-100" alt="..." >
                            <div class="carousel-caption d-none d-md-block text-start caption-text">
                                <h1>Imagine a world <br> #WithNoBoundaries</h1>
                                <p>Designed for you by you</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="{{asset('images/motorolla-banner2.jpg')}}" class="d-block w-100" alt="..." >
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
                <a href="{{route('slide.index')}}" class="btn btn-primary mt-3">Change Slide Show</a>
            </div>
        </div>
    </section>
@endsection
