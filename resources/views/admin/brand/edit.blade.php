@extends('layouts.admin')
@section('title','Edit Brand')

@section('content')


    <div class="container">

        <h5>Edit Brand</h5>
        <hr class="dropdown-divider">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <h6>{{$brand->name}}</h6>
                <img src="{{url($brand->getFirstMediaUrl('logo')? $brand->getFirstMediaUrl('logo'):'/images/no-image.png' )}}"
                     class="img-fluid" >
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="{{route('brand.update',$brand->id)}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group row">
                        <label class="control-label" for="brand">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required autocomplete="brand" value="{{$brand->name}}"
                               style="width: 500px;">
                        <small class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </small>

                    </div>

                    <div class="form-group mt-3">

                        <div class="image-upload text-center p-3">
                            <img id="frame" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                            <div class="mb-3">
                                <input class="form-control d-none" type="file" id="formFile" onchange="preview()" name="logo">
                            </div>
                            <label for="formFile" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                                Select Image</label><br>
                        </div>
                        <small class="text-danger">
                            @error('logo')
                            {{ $message }}
                            @enderror
                        </small>

                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>




    </div>

@endsection
@section('scripts')
    <script>
        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("frame").style.display = "block";
        }
    </script>
@endsection


