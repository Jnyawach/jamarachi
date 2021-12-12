@extends('layouts.admin')
@section('title','Products')
@section('content')
    <section>
        <div class="row">
            <div class="col-9">
                <ul class="nav ms-3">
                    <li class="nav-item">
                        <a href="#" class="btn btn-link text-decoration-none">All Products</a>
                    </li>

                        <li class="nav-item">
                            <a href="#" class="btn btn-link text-decoration-none">Live</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-link text-decoration-none">In-active</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-link text-decoration-none">Sold Out</a>
                        </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-link text-decoration-none">Best Selling</a>
                    </li>

                </ul>



            </div>
            <div class="col-3">
                <a href="{{route('products.create')}}" class="btn btn-primary float-end m-2">Create</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-11 mx-auto">
                @include('includes.status')
            </div>
        </div>
    </section>
@endsection
