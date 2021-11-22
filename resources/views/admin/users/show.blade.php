@extends('layouts.admin')
@section('title',$user->name)
@section('content')
    <section>
        <div class="row p-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header ">
                        <h5>User Details
                            <a href="{{route('users.edit',$user->id)}}" class="float-end text-decoration-none">Edit <i class="fas fa-pen-square ms-2"></i></a>
                        </h5>


                    </div>
                    <div class="body p-4">
                        <h3 class="card-title">{{$user->name}} {{$user->last_name}}</h3>
                        <p>Member Since: <span>{{$user->created_at->diffForHumans()}}</span></p>
                        <p>Email: <span>{{$user->email}}</span></p>
                        <p>Cellphone: <span>{{$user->cellphone}}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header ">
                        <h5>Shipping Address
                            <a href="{{route('users.edit',$user->id)}}" class="float-end text-decoration-none">Change <i class="fas fa-pen-square ms-2"></i></a>
                        </h5>


                    </div>
                    <div class="body p-4">

                        <p>Street: <span>{{$user->address->street}}</span></p>
                        <p>Town: <span>{{$user->address->town}}</span></p>
                        <p>County: <span>{{$user->address->county}}</span></p>
                        <p>Postal address: <span>N/A</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
