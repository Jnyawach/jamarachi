@extends('layouts.admin')
@section('title','Edit Faqs')
@section('content')

            <div class="container ">

                <h5>Create Frequently asked Question</h5>
                <hr class="dropdown-divider">

                <form class="mt-5 " method="POST" action="{{route('faqs.update',$faq->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="category" class="control-label">Category:</label>
                        <select class="form-select complete" name="faq_category_id" required id="category">
                            <option selected
                                    value="{{$faq->faq_category->id}}">{{$faq->faq_category->name}}</option>
                            @foreach($category as $id=>$categories)
                                <option value="{{$id}}">{{$categories}}</option>
                            @endforeach

                        </select>
                        <small class="text-danger">
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group required row">
                        <div class="col-12">
                            <label for="question" class="control-label">Quiz:</label><br>
                            <textarea id="question" name="quiz" class="form-control">
                                    {{$faq->quiz}}
                                </textarea>

                            <small class="text-danger">
                                @error('quiz')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-12">
                            <label for="question" class="control-label">Answer:</label><br>
                            <textarea name="answer" class="form-control answer">
                                    {{$faq->answer}}
                                </textarea>

                            <small class="text-danger">
                                @error('answer')
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
        CKEDITOR.replace( 'answer', );
    </script>
@endsection
