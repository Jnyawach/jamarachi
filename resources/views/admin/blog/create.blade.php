@extends('layouts.admin')
@section('title','Blog')

@section('content')
<section>
    <div class="row">
        <div class="col-11 mx-auto">
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}"
                    required autocomplete="title" autofocus style="width: 700px;">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label class="control-label" for="tag">Tags</label>

                    <input type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{old('tag')}}"
                           required autocomplete="tag" autofocus style="width: 700px;">
                    <small>Enter tags and separate each by a comma for instance: smartphones,coolers,earphones</small>
                    @error('tag')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label class="control-label" for="summary">Summary</label>
                    <textarea class="form-control normal-text" name="summary" required style="height:120px">
                        {{old('summary')}}</textarea>
                    @error('summary')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <label for="policy" class="control-label">Post:</label><br>
                        <textarea name="body" class="form-control policy" id="policy">
                                    {{old('body')}}
                                </textarea>

                        <small class="text-danger">
                            @error('body')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="form-group mt-3">

                    <div class="image-upload text-center p-3">
                        <img id="frame" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                        <div class="mb-3">
                            <input class="form-control d-none" type="file" id="formFile" onchange="preview()" name="post-file">
                        </div>
                        <label for="formFile" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                            Select Image</label><br>
                    </div>
                    <small>Attach post image 1280px by 700px</small>
                    <small class="text-danger">
                        @error('logo')
                        {{ $message }}
                        @enderror
                    </small>

                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>


        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'policy', );
    </script>
    <script>
        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("frame").style.display = "block";
        }
    </script>
@endsection

