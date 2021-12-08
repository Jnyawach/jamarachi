@extends('layouts.admin')
@section('title','Create Products')
@section('content')
    <section class="p-4">
        <h1>Create Product</h1>
        <hr>
        <form class="mt-5" action="{{route('stepTwoStore')}}" method="POST">
            @csrf
            <h5 class="mt-5">Section Two: Description</h5>
            <hr>
            <div class="form-group required">
                <label for="description" class="control-label">Description:</label><br>
                <small>Create product description. Include the keywords. Do not include
                    images and links at this point</small>
                <textarea name="description" class="form-control description" id="description" required >
                                    {{old('description')}}
                                </textarea>

                <small class="text-danger">
                    @error('description')
                    {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group mt-3 required">
                <label for="details" class="control-label">Additional Details:</label><br>
                <small>Create a detailed description of the product. Include all images and links
                    ofr additional item description</small>
                <textarea name="details" class="form-control details" id="details" required>
                                    {{old('details')}}
                                </textarea>

                <small class="text-danger">
                    @error('details')
                    {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group mt-3 required">
                <label for="box" class="control-label">What is in the box?:</label><br>
                <small>Give a list of all items in the box</small>
                <textarea name="text" class="form-control box" id="box" required>
                                    {{old('box')}}
                                </textarea>

                <small class="text-danger">
                    @error('box')
                    {{ $message }}
                    @enderror
                </small>
            </div>


            <div class="form-group mt-5 float-end">
                <a href="{{url()->previous()}}" class="btn btn-primary">Previous</a>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>






        </form>
    </section>
@endsection
@section('scripts')


    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description');
        CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'box' );
    </script>
@endsection
