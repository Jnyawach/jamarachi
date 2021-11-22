@extends('layouts.admin')
@section('title','Edit User')
@section('content')
    <section>
        <div class="row">
            <div class="col-10 mx-auto">
                <h2>Edit User</h2>
                <h5>{{$user->name}} {{$user->last_name}}</h5>
                <p><span>Role Name:</span> {{$user->email}}</p>
                <form method="POST" action="{{route('users.update',$user->id)}}">
                    @method('PATCH')
                    @csrf

                    <div class="form-group row">
                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="name" class="control-label">First Name:</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}"
                                   required>
                            <small class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="last_name" class="control-label">Last Name:</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{$user->last_name}}"
                                   required>
                            <small class="text-danger">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mt-3">


                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="cellphone" class="control-label">Cellphone:</label>
                            <input type="text" name="cellphone" class="form-control" id="cellphone" value="{{$user->cellphone}}"
                                   required>
                            <small class="text-danger">
                                @error('cellphone')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>

                    <h5 class="mt-5">Address Details</h5>
                    <hr class="dropdown-divider">
                    <div class="form-group row mt-5">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <label for="street" class="control-label">Street/Road:</label>
                            <input type="text" name="street" class="form-control" id="street" value="{{$user->address->street}}"
                                   required>
                            <small class="text-danger">
                                @error('street')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <label for="town" class="control-label">Town/City:</label>
                            <input type="text" name="town" class="form-control" id="town" value="{{$user->address->town}}"
                                   required>
                            <small class="text-danger">
                                @error('town')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <label for="county" class="control-label">County:</label>
                            <input type="text" name="county" class="form-control" id="county" value="{{$user->address->county}}"
                                   required >
                            <small class="text-danger">
                                @error('county')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

