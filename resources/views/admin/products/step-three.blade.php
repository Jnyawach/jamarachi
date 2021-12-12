@extends('layouts.admin')
@section('title', 'Create Product')
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                <h1>Create Product</h1>
                <hr>
                <form action="{{route('stepThreeStore')}}" method="POST">
                    @csrf
                    <div class="step-three">
                        <h5>Section Three: Specifications</h5>
                        <div class="form-group required row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="condition" class="control-label">Condition:</label>
                                <select class="form-select normal-text" name="condition" required id="condition">
                                    <option selected disabled>Select Condition</option>
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                    <option value="Refurbished">Refurbished</option>


                                </select>
                                <small class="text-danger">
                                    @error('condition')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="cpu" class="control-label">CPU:</label>
                                <input type="text" class="form-control @error('cpu') is-invalid @enderror" name="cpu"
                                       value="{{session()->get('product.cpu')?session()->get('product.cpu'):old('cpu')}}">
                                <small>For Example:Quadcore</small>
                                <small class="text-danger">
                                    @error('cpu')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="processor_brand" class="control-label">Processor Brand:</label>
                                <input type="text" class="form-control @error('processor_brand') is-invalid @enderror" name="processor_brand"
                                       value="{{session()->get('product.processor_brand')?session()->get('product.processor_brand'):old('processor_brand')}}">
                                <small>For Example:MTK 67XX series</small>
                                <small class="text-danger">
                                    @error('processor_brand')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="weight" class="control-label">Weight:</label>
                                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                                       value="{{session()->get('product.weight')?session()->get('product.weight'):old('weight')}}">
                                <small>For Example: 0.8</small>
                                <small class="text-danger">
                                    @error('weight')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="rear_camera" class="control-label">Rear Camera:</label>
                                <input type="text" class="form-control @error('rear_camera') is-invalid @enderror" name="rear_camera"
                                       value="{{session()->get('product.rear_camera')?session()->get('product.rear_camera'):old('rear_camera')}}">
                                <small>For Example: 15: Do not include MP</small>
                                <small class="text-danger">
                                    @error('rear_camera')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="front_camera" class="control-label">Front Camera:</label>
                                <input type="text" class="form-control @error('front_camera') is-invalid @enderror" name="front_camera"
                                       value="{{session()->get('product.front_camera')?session()->get('product.front_camera'):old('front_camera')}}">
                                <small>For Example: 15: Do not include MP</small>
                                <small class="text-danger">
                                    @error('front_camera')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="cellular" class="control-label">Cellular:</label>
                                <input type="text" class="form-control @error('cellular') is-invalid @enderror" name="cellular"
                                       value="{{session()->get('product.cellular')?session()->get('product.cellular'):old('cellular')}}">
                                <small>For Example: CDMA</small>
                                <small class="text-danger">
                                    @error('cellular')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="operating_system" class="control-label">Operating System:</label>
                                <input type="text" class="form-control @error('operating_system') is-invalid @enderror" name="operating_system"
                                       value="{{session()->get('product.operating_system')?session()->get('product.operating_system'):old('operating_system')}}">
                                <small>For Example: android</small>
                                <small class="text-danger">
                                    @error('operating_system')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="sim_card" class="control-label">Sim Card:</label>
                                <input type="text" class="form-control @error('sim_card') is-invalid @enderror" name="sim_card"
                                       value="{{session()->get('product.sim_card')?session()->get('product.sim_card'):old('sim_card')}}">
                                <small>For Example: Dual Standby</small>
                                <small class="text-danger">
                                    @error('sim_card')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="battery_capacity" class="control-label">Battery Capacity:</label>
                                <input type="text" class="form-control @error('battery') is-invalid @enderror" name="battery"
                                       value="{{session()->get('product.battery')?session()->get('product.battery'):old('battery')}}">
                                <small>For Example: 6800 Don't include: MaH</small>
                                <small class="text-danger">
                                    @error('battery')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="screen_size" class="control-label">Screen Size:</label>
                                <input type="text" class="form-control @error('screen_size') is-invalid @enderror" name="screen_size"
                                       value="{{session()->get('product.screen_size')?session()->get('product.screen_size'):old('screen_size')}}">
                                <small>For Example: 6.7 Don't include:"</small>
                                <small class="text-danger">
                                    @error('screen_size')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="language" class="control-label">Language:</label>
                                <input type="text" class="form-control @error('language') is-invalid @enderror" name="language"
                                       value="{{session()->get('product.language')?session()->get('product.language'):old('language')}}">
                                <small>For Example: multi-language</small>
                                <small class="text-danger">
                                    @error('language')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="weight" class="control-label">Display Type:</label>
                                <input type="text" class="form-control @error('display_type') is-invalid @enderror" name="display_type"
                                       value="{{session()->get('product.display_type')?session()->get('product.display_type'):old('display_type')}}">
                                <small>For Example: OLED</small>
                                <small class="text-danger">
                                    @error('display_type')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <label for="country" class="control-label">Country of Manufacture:</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country"
                                       value="{{session()->get('product.country')?session()->get('product.country'):old('country')}}">
                                <small>For Example: Kenya</small>
                                <small class="text-danger">
                                    @error('country')
                                    {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5 float-end">
                        <a href="{{route('productStepTwo')}}" class="btn btn-primary">Previous</a>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
