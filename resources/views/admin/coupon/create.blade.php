@extends('layouts.admin')
@section('title','Create Coupon')
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                <form action="{{route('coupon.store')}}" method="POST">
                    @csrf
                    <div class="form-group required">
                        <label for="status" class="control-label">Status</label>
                        <select class="pe-3 form-select" required style="width: 200px" name="status" id="status">
                            <option selected>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>


                        </select>
                        <small class="text-danger">
                            @error('status')
                            {{ $message }}
                            @enderror
                        </small>

                    </div>
                    <div class="form-group row required mt-3">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}"
                                   required>
                            <small class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="amount">Coupon Amount:</label>
                            <input type="text" name="amount" class="form-control" id="amount" value="{{old('amount')}}"
                                   required>
                            <small class="text-danger">
                                @error('amount')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="form-group required mt-3">
                        <label class="control-label" for="expire">Expiration Date:</label>
                        <input type="date" name="expire"  id="expire" value="{{old('expire')}}"
                               required>
                        <small class="text-danger">
                            @error('expire')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary">Create Coupon</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
