@extends('layouts.admin')
@section('title',$category->name)
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <h1>Category: {{$category->name}}</h1>
        <hr>

        @include('includes.status')
        <section>
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <h5 style="font-size: 18px" class="float-start">SubCategories</h5>
                            <!-- Button trigger modal -->
                            <button class="float-end btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Create Subcategory
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Create Subcategory</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('subcategory.store')}}" method="POST" id="roleForm">
                                                @csrf
                                                <div class="form-group required">
                                                    <label class="control-label" for="name">
                                                        Category</label>
                                                    <input type="text" class="form-control complete" name="name"
                                                           required>

                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="control-label" for="category_id">
                                                        Category</label>
                                                    <select class="form-select" name="category_id"
                                                            id="category_id">
                                                        <option selected >Select Category</option>
                                                        @foreach($mains as $main)
                                                            <option value="{{$main->id}}">{{$main->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="control-label" for="status">
                                                        Status</label>
                                                    <select class="form-select" name="status"
                                                            id="status">
                                                        <option selected
                                                                value="1">Active</option>
                                                        <option value="0">Inactive</option>

                                                    </select>
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
                                    <th>CATEGORY</th>
                                    <th>CREATED ON</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category->subcategories as $subcategory)
                                    <tr>
                                        <td>{{$subcategory->id}}</td>
                                        <td>{{$subcategory->name}}</td>
                                        <td>{{$subcategory->category->name}}</td>
                                        <td>{{$subcategory->created_at->diffForHumans()}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <h5 id="roleButton" class="dropdown-toggle fw-bold fs-6"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false" style="cursor: pointer">Action</h5>
                                                <ul class="dropdown-menu" aria-labelledby="roleButton">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                           data-bs-target="#editModal{{$subcategory->id}}">Edit</a>

                                                    </li>
                                                    <li>
                                                        <form action="{{route('subcategory.destroy',$subcategory->id)}}"
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
                                            <div class="modal fade" id="editModal{{$subcategory->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                Subcategory</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{route('subcategory.update',$subcategory->id)}}"
                                                                method="POST" id="roleEdit{{$subcategory->id}}">
                                                                @method('PATCH')
                                                                @csrf
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="name">
                                                                        Subcategory Name:
                                                                    </label>
                                                                    <input type="text" class="form-control complete"
                                                                           name="name"
                                                                           required value="{{$subcategory->name}}">

                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <label class="control-label" for="category_id">
                                                                        Category</label>
                                                                    <select class="form-select" name="category_id"
                                                                            id="category_id">
                                                                        <option selected value="{{$subcategory->category->id}}">{{$subcategory->category->name}}</option>
                                                                        @foreach($mains as $main)
                                                                            <option value="{{$main->id}}">{{$main->name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <label class="control-label" for="status">
                                                                        Status</label>
                                                                    <select class="form-select" name="status"
                                                                            id="status">
                                                                        <option selected
                                                                                value="1">Active</option>
                                                                        <option value="0">Inactive</option>

                                                                    </select>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                    form="roleEdit{{$subcategory->id}}">Save changes
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
                                    <th>CATEGORY</th>
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
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#role').DataTable();
        } );
    </script>
@endsection


