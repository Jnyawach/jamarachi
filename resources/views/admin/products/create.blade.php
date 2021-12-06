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
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <label class="control-label">SKU:</label>
                    <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" required autofocus>
                    <small>Must be unique to every product</small>
                    @error('sku')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
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
            <h5 class="mt-5">Section Two: Description</h5>
            <hr>
            <div class="form-group">
                <label for="description" class="control-label">Description:</label><br>
                <small>Create product description. Include the keywords. Do not include
                images and links at this point</small>
                <textarea name="text" class="form-control description" id="description">
                                    {{old('description')}}
                                </textarea>

                <small class="text-danger">
                    @error('description')
                    {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group mt-3">
                <label for="details" class="control-label">Additional Details:</label><br>
                <small>Create a detailed description of the product. Include all images and links
                ofr additional item description</small>
                <textarea name="text" class="form-control details" id="details">
                                    {{old('details')}}
                                </textarea>

                <small class="text-danger">
                    @error('details')
                    {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group mt-3">
                <label for="box" class="control-label">What is in the box?:</label><br>
                <small>Give a list of all items in the box</small>
                <textarea name="text" class="form-control box" id="box">
                                    {{old('box')}}
                                </textarea>

                <small class="text-danger">
                    @error('box')
                    {{ $message }}
                    @enderror
                </small>
            </div>
            <h5 class="mt-5">Section Three: Product Variation (color)</h5>
            <hr>
            <p>Add color variation to the product. Attach an image to each color variation</p>





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
