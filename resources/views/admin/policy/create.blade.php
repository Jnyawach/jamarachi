@extends('layouts.admin')
@section('title','Create Policy')
@section('content')


            <div class="container">

                <h5>Create Policy and terms</h5>
                <hr class="dropdown-divider">
                <form method="POST" action="{{route('policy.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-11 col-md-5 col-lg-5 ">
                            <label for="category" class="control-label">Category:</label>
                            <select class="form-select" aria-label="category" id="category" name="category" required>
                                <option selected value="">Click to select</option>
                                @if(old('category'))
                                    <option selected value="{{old('category')}}">{{old('category')}}</option>
                                @endif
                                <option value="Policy">Policy</option>
                                <option value="Terms">Terms</option>

                            </select>
                            <small class="text-danger">
                                @error('category')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="col-sm-11 col-md-5 col-lg-5 ">
                            <label for="status" class="control-label">Status:</label>
                            <select class="form-select" aria-label="status" id="status" name="status" required>
                                <option selected value="">Click to select</option>
                                @if(old('status'))
                                    <option selected value="{{old('status')}}">{{old('status')}}</option>
                                @endif
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>

                            </select>
                            <small class="text-danger">
                                @error('status')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="policy" class="control-label">Policy Document:</label><br>
                            <textarea name="text" class="form-control policy" id="policy">
                                    {{old('text')}}
                                </textarea>

                            <small class="text-danger">
                                @error('text')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>



            </div>

@endsection
@section('scripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'policy', );
    </script>
@endsection
