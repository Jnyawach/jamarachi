@extends('layouts.admin')
@section('title','Create Products')
@section('content')
    <section class="p-4">
        <h1>Create Product</h1>
        <hr>
        <form class="mt-5" action="{{route('products.store')}}" method="POST">
            @csrf
            <h5>Section One: Name & Category</h5>
            <hr>
            <div class="form-group required">
                <label for="name" class="control-label">Product Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                required autofocus style="width:600px" maxlength="100" value="{{session()->get('product.name')}}">
                <small class="mt-3"> A maximum of 100 characters for product name</small><br>
                <small class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </small>

            </div>
            <div class="form-group row required">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <label class="control-label">SKU:</label>
                    <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" required autofocus
                    value="{{session()->get('product.sku')}}">
                    <small>Must be unique to every product</small>
                    <small class="text-danger">
                        @error('sku')
                        {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <label for="brand" class="control-label">Brand:</label>
                    <select class="form-select normal-text category" name="brand_id" required id="brand">
                        <option selected disabled>Select Brand</option>
                        @foreach($brands as $key=>$brand)
                            <option value="{{$key}}">{{$brand}}</option>
                        @endforeach

                    </select>
                    <small class="text-danger">
                        @error('brand_id')
                        {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <label for="category" class="control-label">Category:</label>
                    <select class="form-select normal-text category" name="category_id" required id="category">

                            <option selected disabled>Select Category</option>
                            @foreach($categories as $key=>$category)
                                <option value="{{$key}}">{{$category}}</option>
                            @endforeach



                    </select>
                    <small class="text-danger">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <label for="subcategory" class="control-label">Sub-Category:</label>
                    <select class="form-select normal-text subcategory" name="subcategory_id" required id="subcategory">


                    </select>
                    <small class="text-danger">
                        @error('subcategory_id')
                        {{ $message }}
                        @enderror
                    </small>
                </div>

            </div>
            <div class="form-group mt-5 float-end">
                <button type="submit" class="btn btn-primary">Next</button>
            </div>






        </form>
    </section>
@endsection
@section('scripts')

    <script>


        $('#category').change(function() {

            var categoryID = $(this).val();

            if (categoryID) {

                $.ajax({
                    type: "GET",
                    url: "{{ url('subCategory') }}?category_id=" + categoryID,
                    success: function(res) {

                        if (res) {

                            $("#subcategory").empty();
                            $("#subcategory").append('<option>Select Subcategory</option>');
                            $.each(res, function(key, value) {
                                $("#subcategory").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#subcategory").empty();
                        }
                    }
                });
            } else {

                $("#subcategory").empty();

            }
        });
    </script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description');
        CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'box' );
    </script>
@endsection
