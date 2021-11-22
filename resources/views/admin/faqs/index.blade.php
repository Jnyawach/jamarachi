@extends('layouts.admin')
@section('title','Frequently asked Questions')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <section>
        <div class="container ">
            <!--Delayed projects-->
            <h5>All Frequently asked questions</h5>
            <hr>
            <section>
                <div class="row">
                    <div class="col-12 mx-auto">
                        @include('includes.status')
                        <div class="card shadow-sm">
                            <div class="card-header p-3">
                                <h5 style="font-size: 18px" class="float-start">Faqs Category</h5>
                                <!-- Button trigger modal -->
                                <button class="float-end btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Create Category
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('faqs-category.store')}}" method="POST" id="roleForm">
                                                    @csrf
                                                    <div class="form-group required">
                                                        <label class="control-label" for="permission">
                                                            Category Name:
                                                        </label>
                                                        <input type="text" class="form-control complete" name="name"
                                                               required>

                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" form="roleForm" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="role" class="display">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>CREATED ON</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>

                                            <td>{{$category->created_at->diffForHumans()}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <h5 id="roleButton" class="dropdown-toggle fw-bold fs-6"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false" style="cursor: pointer">Action</h5>
                                                    <ul class="dropdown-menu" aria-labelledby="roleButton">
                                                        <li>
                                                            <a href="{{route('faqs.show',$category->slug)}}"class="dropdown-item">
                                                                View Faqs
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                               data-bs-target="#editModal{{$category->id}}">Edit</a>

                                                        </li>
                                                        <li>
                                                            <form action="{{route('faqs-category.destroy',$category->id)}}"
                                                                  method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                    delete
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editModal{{$category->id}}" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                    Category</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{route('faqs-category.update',$category->id)}}"
                                                                    method="POST" id="roleEdit{{$category->id}}">
                                                                    @method('PATCH')
                                                                    @csrf
                                                                    <div class="form-group required">
                                                                        <label class="control-label" for="role">
                                                                            Category Name:
                                                                        </label>
                                                                        <input type="text" class="form-control complete"
                                                                               name="name"
                                                                               required value="{{$category->name}}">

                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary"
                                                                        form="roleEdit{{$category->id}}">Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>CREATED ON</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>

    </section>
    @endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#role').DataTable();
        } );
    </script>
@endsection

