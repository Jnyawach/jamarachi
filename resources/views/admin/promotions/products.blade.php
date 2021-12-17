@extends('layouts.admin')
@section('title', $promotion->name)
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                <h1>{{$promotion->name}}</h1>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <hr>
                @if($promotion->status==1)
                    <h5>Status: <span class="text-success">Active</span></h5>
                    <p class="fw-bold">Start Date: <span>{{\Carbon\Carbon::parse($promotion->start)->isoFormat('MMM Do Y')}}</span></p>
                    <p class="fw-bold">End Start: <span>{{\Carbon\Carbon::parse($promotion->end)->isoFormat('MMM Do Y')}}</span></p>
                @elseif($promotion->status==0)
                    <h5>Status: <span class="text-danger">Inactive</span></h5>
            @endif
            <!----added Products -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Promoted Products</h5>

                            </div>

                        </div>

                    </div>
                    <div class="card-body">
                        <table id="table_id5" class="display">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Created</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Available </th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($products->count()>0)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->sku}}</td>
                                        <td>{{$product->created_at->isoFormat('MMM Do Y')}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>
                                            @if($product->status==1)
                                                <form action="{{route('productStatus', $product->id)}}" method="POST">
                                                    @method('PATCH')
                                                    @csrf
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="productOn" checked
                                                               onchange="this.form.submit()">
                                                        <input type="hidden" name="status" value="0">
                                                        <label class="form-check-label ms-0 text-success" for="productOn">ON</label>
                                                    </div>
                                                </form>

                                            @elseif($product->status==0)
                                                <form action="{{route('productStatus', $product->id)}}" method="POST">
                                                    @method('PATCH')
                                                    @csrf
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="productOn"
                                                               onchange="this.form.submit()">
                                                        <input type="hidden" name="status" value="1">
                                                        <label class="form-check-label ms-0 text-danger" for="productOn">OFF</label>
                                                    </div>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                        id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    See action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="message1">
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('products.show',$product->slug)}}">
                                                            View Product</a>

                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('products.edit',$product->id)}}">
                                                            Edit Details</a>
                                                    </li>
                                                    <li>
                                                        <form method="POST" action="{{route('products.destroy',
                                                            $product->id)}}">
                                                            @method('DELETE')
                                                            @csrf

                                                            <button type="submit" class="btn text-danger">Delete <i
                                                                    class="far fa-trash-alt ms-2"></i></button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Created</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Available </th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
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


