@extends('layouts.admin')
@section('title','Blog')
@section('content')
<section>
    <div class="row">
        <div class="col-11 mx-auto">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{route('blog.edit',$post->id)}}" class="btn btn-link text-decoration-none">Edit</a>
                </li>
                @can('adjust-post')
                <li class="nav-item">
                    @if($post->published==0)
                        <form action="{{route('publish',$post->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="published" value="1">
                            <button type="submit" class="btn btn-link text-decoration-none">Publish Post</button>
                        </form>
                        @else
                        <form action="{{route('publish',$post->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="published" value="0">
                            <button type="submit" class="btn btn-link text-decoration-none">Un-publish Post</button>
                        </form>
                        @endif
                </li>
                <li class="nav-item">
                    @if($post->status==0)
                        <form action="{{route('disable',$post->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-link text-decoration-none">Enable Post</button>
                        </form>
                    @else
                        <form action="{{route('disable',$post->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="status" value="0">
                            <button type="submit" class="btn btn-link text-decoration-none">Disable Post</button>
                        </form>
                    @endif
                </li>
                <li class="nav-item">
                    <form action="{{route('blog.destroy',$post->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link text-decoration-none text-danger">Delete</button>
                    </form>
                </li>
                    @endcan
            </ul>
            <hr>
            @include('includes.status')
            <h1>{{$post->title}}</h1>
            <div class="hero">
                <img src="{{asset($post->getFirstMediaUrl('post')? $post->getFirstMediaUrl('post'):'/images/no-image.png' )}}"
                     class="img-fluid mb-3">
                <p class="fw-bold">By: <span>{{$post->user->name}} {{$post->user->last_name}}</span> on {{$post->created_at->isoFormat('Y-m-d')}}</p>
                <p class="fw-bold">Tags:
                    @foreach($post->tag as $tag)
                        <mark>{{$tag->name}}</mark>
                        @endforeach
                </p>
                <div class="summary">
                    <p class="p-0 m-0">{{$post->summary}}</p>
                </div>
                <p>{!! $post->body !!}</p>

            </div>
        </div>
    </div>
</section>
@endsection
