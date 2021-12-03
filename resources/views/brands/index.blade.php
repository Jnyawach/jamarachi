@extends('layouts.main')
@section('title','Samsung|Sony|Nokia')
@section('content')
    <main>
        <section>
            <div class="row pt-5 pb-5">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 mx-auto text-center mt-5">
                    @foreach($brands as $brand)
                        <a href="{{route('brands.show',$brand->slug)}}" class="btn btn-outline-secondary m-1" title="Phone Brands">
                            {{$brand->name}}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
