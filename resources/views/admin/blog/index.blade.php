@extends('layouts.admin')
@section('title','Blog')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    @endsection
@section('content')
    <section>
        <div class="row p-3">
            <div class="col-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header p-3">
                        <h5 style="font-size: 18px">Managers<span class="float-end fw-bold">Total:
                                            {{$posts->count()}}</span></h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id5" class="display">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created on</th>
                                <th>Created by</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts->count()>0)
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="fs-6">{{$post->id}}</td>
                                        <td class="fs-6">{{$post->title}}</td>
                                        <td >
                                            <img src="{{url($post->getFirstMediaUrl('post')? $post->getFirstMedia('post')->getUrl('post-card'):'/images/no-image.png' )}}"
                                                 class="img-fluid" style="width:50px">
                                        </td>
                                        <td class="fs-6">{{$post->created_at->diffForHumans()}}</td>
                                        <td class="fs-6">{{$post->user->name}}</td>

                                        <td>
                                            <!---remember to use auth for super admin-->
                                            <div class="dropdown">
                                                <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                        id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    See action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="message1">
                                                    <li><a class="dropdown-item" href="{{route('blog.show',
                                                        $post->slug)}}">View <i
                                                                class="fas fa-external-link-square-alt
                                                                    ms-2"></i></a></li>
                                                    @can('edit-users')
                                                        <li><a class="dropdown-item" href="{{route('blog.edit',
                                                      $post->id)}}">Edit <i
                                                                    class="fas fa-bookmark ms-2"></i></a></li>

                                                        <li>
                                                            <form method="POST" action="{{route('blog.destroy',
                                                            $post->id)}}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="user_id"
                                                                       value="{{$post->id}}">
                                                                <button type="submit" class="btn text-danger">Delete <i
                                                                        class="far fa-trash-alt ms-2"></i></button>
                                                            </form>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </div>

                                        </td>



                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Created on</th>
                            <th>Created by</th>
                            <th>Action </th>
                            </tfoot>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {

            $('#table_id5').DataTable();
        } );
    </script>
    @endsection
