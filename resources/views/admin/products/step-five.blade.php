@extends('layouts.admin')
@section('title','Color Variation')
@section('content')

    <section>
        <div class="row">
            <div class="col-11 mx-auto">

                    <div class="step-five">
                        <h5>Step Five: Color Variation</h5>
                        <hr>

                        <div class="row">
                            @php
                            $product=\App\Models\Product::findOrFail(session()->get('product.id'));
                            @endphp
                                @if($product->colors->count()>0)
                                   @foreach($product->colors as $color)
                                    <div class="col-sm-6 col-dm-4 col-lg-3 text-center">
                                        <img src="{{url($color->getFirstMediaUrl('colorFile')? $color->getFirstMedia('colorFile')->getUrl('colorFile'):'/images/no-image.png' )}}"
                                             class="img-fluid" style="width:150px">
                                        <h6 class="mt-2">{{$color->name}}</h6>
                                        <form action="{{route('removeColor', $color->id)}}" method="POST" id="removeForm{{$color->id}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class=" btn-danger fs-6" form="removeForm{{$color->id}}">
                                                <i class="far fa-trash-alt"></i> Remove
                                            </button>
                                        </form>

                                    </div>

                                    @endforeach
                                @endif
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <!-- Button trigger modal -->
                                <div class="btn-color text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h5 class="fs-6 my-auto">+ Add color Variation</h5>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add color Variation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                               <h6>{{session()->get('product.name')}}</h6>
                                                <form action="{{route('stepFiveStore')}}" method="POST" enctype="multipart/form-data" id="colorForm">
                                                    @csrf
                                                    @method('POST')

                                                    <div class="form-group required">
                                                        <label class="control-label" for="color">Color Name:</label>
                                                        <input type="text" name="color" required autofocus value="{{old('color')}}"
                                                        class="form-control @error('color') @enderror">
                                                        <small class="text-danger">
                                                            @error('color')
                                                            {{ $message }}
                                                            @enderror
                                                        </small>
                                                    </div>
                                                    <div class="form-group required mt-3">
                                                        <label for="formFile" class="form-label control-label">Color Image:</label>
                                                        <input class="form-control" type="file" id="formFile" name="colorFile" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-5 dotted">
                        <div>
                            <form action="{{route('createFinish',$product->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group mt-5 float-end">
                                    <a href="{{route('productStepFour')}}" class="btn btn-outline-primary">Previous</a>
                                    <button type="submit" class="btn btn-primary">Finish</button>
                                </div>
                            </form>
                        </div>
                    </div>


            </div>
        </div>
    </section>

@endsection
