@extends('layouts.admin')
@section('title', 'Coupon')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                @include('includes.status')
                <div class="card shadow-sm mt-5">
                    <div class="card-header p-3">
                        <h5 style="font-size: 18px">Coupons<span class="float-end fw-bold"> <a href="{{route('coupon.create')}}">Create New Coupon</a></span></h5>
                    </div>
                    <div class="card-body">
                        <table id="coupon" class="display">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Expiry</th>
                                <th>Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($coupons->count()>0)
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td>{{$coupon->id}}</td>
                                        <td>{{$coupon->name}}</td>
                                        <td>{{$coupon->created_at->isoFormat('MMM Do Y')}}</td>
                                        <td>{{\Carbon\Carbon::parse($coupon->expire)->isoFormat('MMM Do Y')}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->amount}}</td>
                                        <td>
                                            @if($coupon->status==0)
                                                <span class="text-danger">Inactive</span>
                                            @elseif($coupon->status==1)
                                                <span class="text-success">Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!---remember to use auth for super admin-->
                                            <div class="dropdown">
                                                <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                        id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    See action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="message1">

                                                    @can('change-model')
                                                        <li><a class="dropdown-item" href="{{route('coupon.edit',
                                                      $coupon->id)}}">Edit <i
                                                                    class="fas fa-bookmark ms-2"></i></a></li>

                                                        <li>
                                                            <form method="POST" action="{{route('coupon.destroy',
                                                            $coupon->id)}}">
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
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Expiry</th>
                            <th>Code</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action </th>
                            </tfoot>

                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('coupon.create')}}">Create New Coupon</a>
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
            $('#coupon').DataTable();

        } );
    </script>
@endsection
