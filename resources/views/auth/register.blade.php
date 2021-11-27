@extends('layouts.minimal')

@section('content')
<div class="container mt-5 mb-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8">
            <div class="card">
                <div class="card-body p-5">
                    <h6 class="fs-4 m-3 text-center mb-5">REGISTER</h6>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="name" class="control-label">First Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="last_name" class="control-label">Last Name:</label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                           <div class="col-12 col-md-6 col-lg-6">
                               <label for="email" class="control-label">Email:</label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>

                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="cellphone" class="control-label">Cellphone:</label>
                                <input id="cellphone" type="text" class="form-control @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" required autocomplete="cellphone">

                                @error('cellphone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="password" class="control-label">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 text-start mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>

                                    <label class="form-check-label" for="terms">
                                        Accept <a href="#">Terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mt-4  text-center">
                            <div class="col-md-6 mx-auto">
                                <button type="submit" class="btn btn-primary ps-5 pe-5">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group text-center m-4">
                            <a class="btn btn-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
