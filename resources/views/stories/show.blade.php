@extends('layouts.main')
@section('title','Stories')
@section('content')
<section>
    <div class="row">
        <div class="col-11 mx-auto">

         <hr>
            <h1 class="fw-bold mb-4">{{$post->title}}</h1>
            <div class="hero">
                <img src="{{asset($post->getFirstMediaUrl('post')? $post->getFirstMediaUrl('post'):'/images/no-image.png' )}}"
                     class="img-fluid mb-3">
                <p class="fw-bold">By: <span>{{$post->user->name}} {{$post->user->last_name}}</span> on {{$post->created_at->isoFormat('Y-m-d')}}</p>
                <p class="fw-bold">Tags:
                    @foreach($post->tag as $tag)
                        <mark>{{$tag->name}}</mark>
                    @endforeach
                </p>
                <div class="summary">
                    <p class="p-0 m-0">{{$post->summary}}</p>
                </div>
                <p>{!! $post->body !!}</p>

            </div>
        </div>
    </div>
</section>
<section class="mt-5 p-4 p-lg-5 p-md-5 offer-card mx-auto">
    <h5 class="text-center fs-5 mb-5">Products on Offer today</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3  p-2 mx-auto">
            <div class="trending-product p-3 text-center shadow-sm">
                <div class="compare text-end">
                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                </div>
                <img src="{{asset('images/tecno-camon-18-1.png')}}" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
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
        <div class="col-12 col-sm-6 col-md-6 col-lg-3  p-2 mx-auto">
            <div class="trending-product p-3 text-center shadow-sm">
                <div class="compare text-end">
                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                </div>
                <img src="{{asset('images/tecno-camon-18-1.png')}}" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
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
        <div class="col-12 col-sm-6 col-md-6 col-lg-3  p-2 mx-auto">
            <div class="trending-product p-3 text-center shadow-sm">
                <div class="compare text-end">
                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                </div>
                <img src="{{asset('images/tecno-camon-18-1.png')}}" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
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
        <div class="col-12 col-sm-6 col-md-6 col-lg-3  p-2 mx-auto">
            <div class="trending-product p-3 text-center shadow-sm">
                <div class="compare text-end">
                    <a href="#" class="btn btn-link text-decoration-none">COMPARE</a>
                </div>
                <img src="{{asset('images/tecno-camon-18-1.png')}}" alt="Tecno Cammon 11" class="img-fluid m-1" style="width: 150px;">
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
</section>
@endsection
