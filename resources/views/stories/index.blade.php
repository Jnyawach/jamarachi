@extends('layouts.main')
@section('title','Stories')
@section('content')
<section>
    <div class="row pt-5 p-2">
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
                        <div class="story-card p-2">
                        <img src="{{asset($post->getFirstMediaUrl('post')? $post->getFirstMediaUrl('post','post-card'):'/images/no-image.png' )}}"
                             class="img-fluid mb-2">
                            <p class="fw-bold ms-1">By: <span>{{$post->user->name}} {{$post->user->last_name}}</span> on {{$post->created_at->isoFormat('Y-m-d')}}</p>
                            <p class="fw-bold pt-0 pb-0 mb-0 mt-0">
                                @foreach($post->tag as $tag)
                                    <mark>{{$tag->name}}</mark>
                                @endforeach
                            </p>
                           <a href="{{route('stories.show', $post->slug)}}" title="Read More" class="text-decoration-none">
                               <h6 class="ps-1 pe-1">{{$post->title}} [.. ]</h6>
                           </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
            </div>
            <div class="text-center mt-5">
                {{$posts->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
</section>
@endsection
