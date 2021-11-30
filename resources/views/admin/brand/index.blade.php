@extends('layouts.admin')
@section('title','Brands')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">


        <section>
            <div class="row">
                <div class="col-12 mx-auto">
                    @include('includes.status')
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <h5 style="font-size: 18px" class="float-start">Brands</h5>

                        </div>
                        <div class="card-body">
                            <table id="role" class="display">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$brand->id}}</td>
                                        <td>{{$brand->name}}</td>

                                        <td>
                                            <img src="{{url($brand->getFirstMediaUrl('logo')? $brand->getFirstMediaUrl('logo'):'/images/no-image.png' )}}"
                                                 class="img-fluid" style="width:60px">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <h5 id="roleButton" class="dropdown-toggle fw-bold fs-6"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false" style="cursor: pointer">Action</h5>
                                                <ul class="dropdown-menu" aria-labelledby="roleButton">
                                                    <li><a class="dropdown-item" href="{{route('brand.edit',$brand->id)}}">Edit</a>

                                                    </li>
                                                    <li>
                                                        <form action="{{route('faqs-category.destroy',$brand->id)}}"
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


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('brand.create')}}" class="btn btn-link">Add Brand</a>
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
