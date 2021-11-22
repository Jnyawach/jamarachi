@extends('layouts.admin')
@section('title','Create Users')
@section('content')
    <section>
        <div class="row">
            <div class="col-10 mx-auto">
                <h2>Create User</h2>
                <form method="POST" action="{{route('users.store')}}">
                    @csrf
                    @can('assign-role')
                        <div class="form-group mt-5">
                            <label for="role" class="control-label">Role:</label>
                            <select class="pe-3" required style="width: 200px" name="role" id="role">
                                <option selected>Select Role</option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach

                            </select>
                            <small class="text-danger">
                                @error('role')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        @endcan
                    <div class="form-group row">
                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="name" class="control-label">First Name:</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}"
                            required>
                            <small class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="last_name" class="control-label">Last Name:</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{old('last_name')}}"
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
                            <label for="email" class="control-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}"
                            required>
                            <small class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="cellphone" class="control-label">Cellphone:</label>
                            <input type="text" name="cellphone" class="form-control" id="cellphone" value="{{old('cellphone')}}"
                            required>
                            <small class="text-danger">
                                @error('cellphone')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="password" class="control-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="password"
                            required>
                            <small class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                            <label for="password_confirmation" class="control-label">Confirm Password:</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                            required>
                            <small class="text-danger">
                                @error('password_confirmation')
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
                            <input type="text" name="street" class="form-control" id="street" value="{{old('street')}}"
                            required>
                            <small class="text-danger">
                                @error('street')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <label for="town" class="control-label">Town/City:</label>
                            <input type="text" name="town" class="form-control" id="town" value="{{old('town')}}"
                            required>
                            <small class="text-danger">
                                @error('town')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <label for="county" class="control-label">County:</label>
                            <input type="text" name="county" class="form-control" id="county" value="{{old('county')}}"
                            required >
                            <small class="text-danger">
                                @error('county')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
