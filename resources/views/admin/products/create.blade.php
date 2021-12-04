@extends('layouts.admin')
@section('title','Create Products')
@section('content')
    <section class="p-4">
        <h1>Create Product</h1>
        <hr>
        <form class="mt-5" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            <h5>Section One: Name & Category</h5>
            <hr>
            <div class="form-group required">
                <label for="name" class="control-label">Product Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                required autofocus style="width:600px" maxlength="100">
                <small class="mt-3"> A maximum of 100 characters for product name</small>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group row required">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <label class="control-label">SKU:</label>
                    <input type="text" name="sku" class="form-control" required autofocus>
                </div>

            </div>


        </form>
    </section>
@endsection
