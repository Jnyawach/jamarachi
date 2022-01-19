@extends('layouts.admin')
@section('title','Edit Slide Show')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endsection
@section('content')
    <section>
        <div class="row">
            <div class="col-10 mx-auto">
                <form action="{{route('slide.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row required">
                        <div class="sm-12 col-md-6 col-lg-6">
                            <label for="status" class="control-label">Status:</label>
                            <select class="pe-3 form-select" required style="width: 200px" name="status" id="status">
                                <option selected>Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>


                            </select>
                            <small class="text-danger">
                                @error('status')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                        {{--<div class="sm-12 col-md-6 col-lg-6">
                            <label for="action" class="control-label">Action:</label>
                            <select class="pe-3 form-select" required style="width: 200px" name="action" id="action">
                                <option selected>Select Action</option>
                                <option value="Read More">Read More</option>
                                <option value="Learn More">Learn More</option>
                                <option value="Buy Now">Buy Now</option>


                            </select><br>
                            <small>Select action text for the slide show</small>
                            <small class="text-danger">
                                @error('action')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>--}}
                    </div>

                    <div class="form-group required mt-3">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}"
                                       required>
                                <small>The bold header title on the slide show</small>

                                <small class="text-danger">
                                    @error('title')
                                    {{ $message }}
                                    @enderror
                                </small>
                    </div>
                    <div class="form-group required mt-3">
                        <label class="control-label" for="title">Support Text:</label>
                        <input type="text" name="tagline" class="form-control" id="title" value="{{old('tagline')}}"
                               required>
                        <small>The support text located under title</small>

                        <small class="text-danger">
                            @error('tagline')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-6">
                            <label for="formFile" class="form-label">Slide Banner:</label>
                            <small>Image size must be <strong>400px by 400 px</strong><br>
                            The image must be PNG file type without background</small>
                            <input class="form-control" type="file" id="formFile" name="banner" required>
                            <small class="text-danger">
                                @error('banner')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endsection
