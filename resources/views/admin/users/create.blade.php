@extends('layouts.admin')
@section('title','Create Users')
@section('content')
    <section>
        <div class="row">
            <div class="col-10 mx-auto">
                <h2>Create User</h2>
                <form method="POST" action="{{route('users.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <label for="name" class="control-label">First Name:</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
