@extends('layouts.admin')
@section('title','Create Promotions')
@section('content')
<section>
    <div class="row">
        <div class="col-11 mx-auto">
            <h1>Create Promotion</h1>
            <hr>
            <form action="{{route('promotions.store')}}" method="POST">
                @csrf
                <div class="form-group required row">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <label class="control-label" for="name">Promotion Name:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" autofocus value="{{old('name')}}"
                        required>
                        <small class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label for="status" class="control-label">Status:</label>
                        <select class="form-select  normal-text" name="status" required id="status">
                            <option selected disabled>Select status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>


                        </select>
                        <small class="text-danger">
                            @error('status')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>

                </div>

                <div class="form-group required mt-3 row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="control-label" for="start_date">Start Date</label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" required name="start_date" id="start_date" value="{{old('start_date')}}">
                        <small class="text-danger">
                            @error('start_date')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="control-label" for="end_date">End Date</label>
                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" required name="end_date" id="end_date" value="{{old('end_date')}}">
                        <small class="text-danger">
                            @error('end_date')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="control-label" for="discount">Discount Offered:</label>
                        <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" autofocus id="discount" value="{{old('discount')}}">
                        <small class="text-danger">
                            @error('discount')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>

                </div>

                <div class="mt-3 form-group row">
                    <div class="col12">
                        <label class="control-label" for="extra_offers">Additional Offers (optional)</label>
                        <small>Please enter any additional offers that may be attached to the promotion for example: #Free earbuds on us</small>
                        <textarea class="form-control" name="extra_offers" id="extra_offers">{{old('extra_offers')}}</textarea>

                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Create promotion</button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
