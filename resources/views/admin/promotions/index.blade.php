@extends('layouts.admin')
@section('title','All Promotions')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-11 mx-auto">
            <h5>Available Promotions</h5>
            @include('includes.status')

            <div class="card shadow-sm mt-5">
                <div class="card-header p-3">
                    <h5 style="font-size: 18px">Managers<span class="float-end fw-bold">Total:
                                            {{$promotions->count()}}</span></h5>
                </div>
                <div class="card-body">
                    <table id="table_id5" class="display">
                        <thead>
                        <tr>
                            <th>Created</th>
                            <th>Name</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Total Products</th>
                            <th>Status</th>
                            <th>Discount</th>
                            <th>Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($promotions->count()>0)
                            @foreach($promotions as $promotion)
                                <tr>
                                    <td>{{$promotion->created_at->isoFormat('MMM Do Y')}}</td>
                                    <td>{{$promotion->name}}</td>
                                    <td>{{\Carbon\Carbon::parse($promotion->start)->isoFormat('MMM Do Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($promotion->end)->isoFormat('MMM Do Y')}}</td>
                                    <td>10</td>
                                    <td>
                                        @if($promotion->status==0)
                                            <span class="text-danger">Inactive</span>
                                            @elseif($promotion->status==1)
                                            <span class="text-success">Active</span>
                                            @endif
                                    </td>
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
                        @endif
                        </tbody>
                        <tfoot>
                       <tr>
                           <th>Created</th>
                           <th>Name</th>
                           <th>Start</th>
                           <th>End</th>
                           <th>Total Products</th>
                           <th>Status</th>
                           <th>Discount</th>
                           <th>Action </th>
                       </tr>
                        </tfoot>

                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('promotions.create')}}" class="btn btn-link" title="Create Promotion">Create Promotion</a>
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
