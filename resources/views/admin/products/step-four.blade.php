@extends('layouts.admin')
@section('title','Create Products')
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                <h1>Create Product</h1>
                <hr>
                <form action="{{route('stepFourStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="step-four">
                        <h5>Step Four: Search Engine Optimization & Images</h5>

                        <div class="form-group required">
                            <label for="keywords" class="control-label">Meta Keywords</label>
                            <textarea class="form-control @error('keywords')@enderror" name="keywords" id="keywords">
                           {{session()->get('product.keywords')?session()->get('product.keywords'):old('keywords')}}
                            </textarea>
                            <br>
                            <small>Please enter Comma separated words For example: Phones, Smart Phones,Gadgets;</small>
                            <small class="text-danger">
                                @error('keywords')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group required">
                            <label for="meta_description" class="control-label">Meta Description</label>
                            <textarea class="form-control @error('meta_description')@enderror" name="meta_description" id="meta_description">
                           {{session()->get('product.meta_description')?session()->get('product.meta_description'):old('meta_description')}}
                         </textarea>
                            <br>
                            <small>Should not exceed 150 words</small>
                            <small class="text-danger">
                                @error('keywords')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>



                    <div class="step-five">

                        <div class="form-group mt-3 row">
                            <div class="col-6 col-md-4 col-lg-3 p-2">
                                <div class="image-upload text-center p-3">
                                    <img id="firstImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                                    <div class="mb-3">
                                        <input class="form-control d-none" type="file" id="mainImage" onchange="preview()" name="mainImage">
                                    </div>
                                    <label for="mainImage" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                                        Main Image</label><br>
                                </div>
                                <small class="text-danger">
                                    @error('mainImage')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 p-2">
                                <div class="image-upload text-center p-3">
                                    <img id="secondImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                                    <div class="mb-3">
                                        <input class="form-control d-none" type="file" id="imageTwo" onchange="previewTwo()" name="imageTwo">
                                    </div>
                                    <label for="imageTwo" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                                        Second Image</label><br>
                                </div>
                                <small class="text-danger">
                                    @error('imageTwo')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3 p-2">
                                <div class="image-upload text-center p-3">
                                    <img id="thirdImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                                    <div class="mb-3">
                                        <input class="form-control d-none" type="file" id="imageThree" onchange="previewThree()" name="imageThree">
                                    </div>
                                    <label for="imageThree" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                                        Third Image</label><br>
                                </div>
                                <small class="text-danger">
                                    @error('imageThree')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 p-2">
                                <div class="image-upload text-center p-3">
                                    <img id="fourthImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                                    <div class="mb-3">
                                        <input class="form-control d-none" type="file" id="imageFour" onchange="previewFour()" name="imageFour">
                                    </div>
                                    <label for="imageFour" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                                        Fourth Image</label><br>
                                </div>
                                <small class="text-danger">
                                    @error('imageFour')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>

                        </div>
                    </div>

                    <div class="form-group mt-5 float-end">
                        <a href="{{route('productStepThree')}}" class="btn btn-primary">Previous</a>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function preview() {
            firstImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("firstImage").style.display = "block";

        }
    </script>
    <script>
        function previewTwo() {

            secondImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("secondImage").style.display = "block";
        }
    </script>
    <script>
        function previewThree() {

            thirdImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("thirdImage").style.display = "block";
        }
    </script>
    <script>
        function previewFour() {

            fourthImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("fourthImage").style.display = "block";
        }
    </script>
@endsection
