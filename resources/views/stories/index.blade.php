@extends('layouts.main')
@section('title','Stories')
@section('content')
<section>
    <div class="row p-5">
        <div class="col-12 mx-auto">
            <div class="blog-header" style="background-image: url({{asset($blog->getFirstMediaUrl('post')? $blog->getFirstMediaUrl('post'):'/images/no-image.png' )}});">
              <a href="{{route('stories.show',$blog->slug)}}" title="Read More">
                  <h1 >{{$blog->title}}</h1>
              </a>
            </div>
            <div class="row mt-5">
                @if($posts->count()>0)
                    @foreach($posts as $post)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="story-card">
                        <img src="{{asset($post->getFirstMediaUrl('post')? $post->getFirstMediaUrl('post'):'/images/no-image.png' )}}"
                             class="img-fluid mb-2">
                            <p class="fw-bold ms-3">By: <span>{{$post->user->name}} {{$post->user->last_name}}</span> on {{$post->created_at->isoFormat('Y-m-d')}}</p>
                        <h6>{{$post->title}}</h6>
                        </div>
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
</section>
@endsection
