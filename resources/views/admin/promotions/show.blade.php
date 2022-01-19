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


                <hr>
               @if($promotion->status==1)
                    <h5>Status: <span class="text-success">Active</span></h5>
                   <p class="fw-bold">Start Date: <span>{{\Carbon\Carbon::parse($promotion->start)->isoFormat('MMM Do Y')}}</span></p>
                   <p class="fw-bold">End Start: <span>{{\Carbon\Carbon::parse($promotion->end)->isoFormat('MMM Do Y')}}</span></p>
                @elseif($promotion->status==0)
                    <h5>Status: <span class="text-danger">Inactive</span></h5>
                @endif
            <!----added Products -->
                <ul class="nav mt-5 bg-light mb-4">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('promotions.show', $promotion->slug)}}">Promoted Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('productAdd', $promotion->slug)}}">Add Products</a>
                    </li>

                </ul>

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
                               <th>Created</th>
                               <th>Name</th>
                               <th>Available</th>
                               <th>Action </th>
                           </tr>
                           </thead>
                           <tbody>

                               @foreach($promotion->products as $product)
                                   <tr>
                                       <td>{{$product->created_at->isoFormat('MMM Do Y')}}</td>
                                       <td>{{$product->name}}</td>

                                       <td>{{$product->stock}}</td>
                                       <td>
                                           <form action="{{route('unPromoteProduct', $promotion->id)}}" method="POST">
                                               @method('PATCH')
                                               @csrf

                                               <input type="hidden" name="product_id" value="{{$product->id}}">

                                               <button type="submit" class="btn-sm btn-danger">
                                                  Un-promote Product
                                               </button>
                                           </form>
                                       </td>



                                   </tr>

                               @endforeach

                           </tbody>
                           <tfoot>
                           <tr>
                               <th>Created</th>
                               <th>Name</th>
                               <th>Available</th>
                               <th>Action </th>
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

