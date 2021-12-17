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

                                       <td>{{$promotion->discount}}%</td>
                                       <td>
                                           <!---remember to use auth for super admin-->
                                           <div class="dropdown">
                                               <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                       id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                   See action
                                               </button>
                                               <ul class="dropdown-menu" aria-labelledby="message1">
                                                   <li>
                                                       <a class="dropdown-item" href="{{route('promotions.show',$promotion->slug)}}">
                                                           View <i class="fas fa-external-link-square-alt ms-2"></i>
                                                       </a>

                                                   </li>
                                                   @can('edit-users')
                                                       <li><a class="dropdown-item" href="{{route('promotions.edit',
                                                      $promotion->id)}}">Edit<i  class="fas fa-bookmark ms-2"></i></a>
                                                       </li>

                                                       <li>
                                                           <form method="POST" action="{{route('promotions.destroy',
                                                            $promotion->id)}}">
                                                               @method('DELETE')
                                                               @csrf
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

