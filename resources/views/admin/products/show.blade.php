@extends('layouts.admin')
@section('title', $product->name)
@section('content')
    <section class="product-page pt-3">
        <div class="row">
            <div class="col-11 mx-auto">
                <ul class="nav ms-3">
                    <li class="nav-item">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit Product</a>
                    </li>

                    <li class="nav-item">
                        @if($product->status==1)
                            <form action="{{route('productStatus', $product->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-check form-switch">
                                    <input type="hidden" name="status" value="0">
                                    <button type="submit" class="btn btn-primary">Disable product</button>

                                </div>
                            </form>
                        @elseif($product->status==0)
                            <form action="{{route('productStatus', $product->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-check form-switch">
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-primary">Enable product</button>

                                </div>
                            </form>
                        @endif
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{route('products.destroy',$product->id)}}">

                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger ms-3">Delete <i
                                    class="far fa-trash-alt ms-2"></i></button>
                        </form>
                    </li>


                </ul>


            </div>
        </div>



        <div class="row">
            <!--Carousel for the product-->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-5">
                <div class="product-group p-3">

                    <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset($product->getFirstMediaUrl('mainImage')? $product->getFirstMediaUrl('mainImage'):'/images/no-image.png' )}}" class="d-block w-100"
                                     alt="{{$product->name}}">
                            </div>
                            <div class="carousel-item">

                                <img src="{{asset($product->getFirstMediaUrl('imageTwo')? $product->getFirstMediaUrl('imageTwo'):'/images/no-image.png' )}}" class="d-block w-100"
                                     alt="{{$product->name}}">
                            </div>
                            @if($product->getFirstMediaUrl('imageThree'))
                            <div class="carousel-item">
                                <img src="{{asset($product->getFirstMediaUrl('imageThree')? $product->getFirstMediaUrl('imageThree'):'/images/no-image.png' )}}" class="d-block w-100"
                                     alt="{{$product->name}}">
                            </div>
                                @endif
                            @if($product->getFirstMediaUrl('imageFour'))
                                <div class="carousel-item">
                                    <img src="{{asset($product->getFirstMediaUrl('imageFour')? $product->getFirstMediaUrl('imageFour'):'/images/no-image.png' )}}" class="d-block w-100"
                                         alt="{{$product->name}}">
                                </div>
                            @endif
                        </div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#product-carousel" data-bs-slide-to="0" class="active carousel-icon"
                                aria-current="true" aria-label="Slide 1">
                                <img src="{{asset($product->getFirstMediaUrl('mainImage')? $product->getFirstMediaUrl('mainImage','mainImage-card'):'/images/no-image.png' )}}"
                                alt="{{$product->name}}">
                            </li>
                            <li data-bs-target="#product-carousel" data-bs-slide-to="1" class="carousel-icon" aria-current="true"
                                aria-label="Slide 2">
                                <img src="{{asset($product->getFirstMediaUrl('imageTwo')? $product->getFirstMediaUrl('imageTwo','imageTwo-card'):'/images/no-image.png' )}}"
                                     alt="{{$product->name}}">
                            </li>
                            @if($product->getFirstMediaUrl('imageThree'))
                            <li data-bs-target="#product-carousel" data-bs-slide-to="2" class="carousel-icon" aria-current="true"
                                aria-label="Slide 3">
                                <img src="{{asset($product->getFirstMediaUrl('imageThree')? $product->getFirstMediaUrl('imageThree','imageThree-card'):'/images/no-image.png' )}}"
                                     alt="{{$product->name}}">
                            </li>
                                @endif
                            @if($product->getFirstMediaUrl('imageFour'))
                                <li data-bs-target="#product-carousel" data-bs-slide-to="3" class="carousel-icon" aria-current="true"
                                    aria-label="Slide 4">
                                    <img src="{{asset($product->getFirstMediaUrl('imageFour')? $product->getFirstMediaUrl('imageFour','imageFour-card'):'/images/no-image.png' )}}"
                                         alt="{{$product->name}}">
                                </li>
                            @endif

                        </ol>

                        <button class="carousel-control-prev" type="button" data-bs-target="#product-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon " aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

            </div>

            <!--Product Details-->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 pt-5 ps-3">
                <h5 class="fs-5">{{$product->name}}</h5>

                <p class="fw-bold"><span>Brand:</span> {{$product->brand->name}}</p>
                <h4 class="fw-bold">Kshs: {{$product->price}} | Sale Price: {{$product->sale_price}}</h4>
                <div class="available-offers">
                    <h6 class="text-decoration-underline">Available Offers</h6>
                    <p>#Free delivery within Nairobi</p>
                    <p>#Free earbuds on us</p>
                    <p>#Get 5% off with <span class="fw-bold">KARIBU</span> code when you make you first purchase!</p>

                </div>
                <div class="add-cart mt-5 ">

                    <form >
                        <h6 class="fw-bold">Choose your Color</h6>
                            <div class="form-group row">
                                @if($product->colors->count()>0)
                                    @foreach($product->colors as $color)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                                    <div class="form-check color-select text-center">
                                        <input class="color-select-check" type="radio" name="exampleRadios" id="phantom-violet" value="option1">
                                        <label class="form-check-label" for="phantom-violet">
                                            <img src="{{asset($color->getFirstMediaUrl('colorFile')? $color->getFirstMediaUrl('colorFile','colorFile'):'/images/no-image.png' )}}" style="width: 40px;">
                                            <h5 class="fw-bold fs-6">{{$color->name}}</h5>

                                        </label>
                                    </div>

                                </div>
                                    @endforeach
                                @endif


                            </div>




                    </form>

                </div>
                <section class="newest-offer mb-5 mt-4">


                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item new-button" role="presentation">
                            <button class="nav-link active fs-6" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product Description</button>
                        </li>
                        <li class="nav-item new-button" role="presentation">
                            <button class="nav-link fs-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Shipping</button>
                        </li>
                        <li class="nav-item new-button" role="presentation">
                            <button class="nav-link fs-6" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Return</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>{!! $product->description !!}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>Ships within 48hr. Available for pickup at G4S Thika Mall</p>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                        </div>
                    </div>

                </section>

            </div>

        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 mx-auto p-3">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5>Product Details</h5>
                    </div>
                    <div class="card-body">
                        {!! $product->details !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto p-3">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5>Product Overview</h5>
                    </div>
                    <div class="card-body product-overview">
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li><span>Brand:</span> {{$product->brand->name}}</li>
                                    <li><span>CPU:</span> {{$product->cpu}}</li>
                                    <li><span>Processor Brand:</span> {{$product->processor_brand}}</li>
                                    <li><span>Rear Camera:</span> {{$product->rear_camera}}MP</li>
                                    <li><span>Front Camera:</span> {{$product->front_camera}}MP</li>
                                    <li><span>Cellular:</span> {{$product->cellular}}</li>
                                    <li><span>Operating System:</span> {{$product->operating_system}}</li>
                                    <li><span>Condition:</span> {{$product->condition}}</li>

                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>

                                    <li><span>Simcard:</span> {{$product->simcard}}</li>
                                    <li><span>Battery Capacity:</span> {{$product->battery}}</li>
                                    <li><span>Screen Size:</span> {{$product->screen_size}}''</li>
                                    <li><span>Language:</span> {{$product->language}}</li>
                                    <li><span>Display Type:</span> {{$product->display_type}}</li>
                                </ul>
                            </div>
                        </div>
                        <h5>What is in the box?</h5>
                        <hr>
                        {!! $product->box !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
