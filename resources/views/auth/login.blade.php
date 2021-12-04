@extends('layouts.minimal')
@section('title','Login')
@section('content')
<div class="container mt-5 mb-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8">
            <div class="card shadow-sm auth">
                <div class="card-body p-5">
                    <h6 class="fs-4 m-3 text-center mb-5">LOGIN</h6>
                    <form method="POST" action="{{ route('login') }}" class="pt-3 mb-5">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="control-label">
                                Email:</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="control-label">Password:</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 text-start mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary ps-5 pe-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="form-group mt-3 row">
                            <div class="col-12 col-md-6 col-lg-6 mx-auto text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 mx-auto text-center">
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Create Account
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
