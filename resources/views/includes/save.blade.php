<div class="form-group row required">
    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label for="condition" class="control-label">Condition:</label>
        <select class="form-select normal-text" name="condition" required id="condition">
            <option selected disabled>Select Condition</option>
            <option value="new">New</option>
            <option value="used">Used</option>
            <option value="refurbished">Refurbished</option>
        </select>
        <small>Specify the condition of the product</small>
        <small class="text-danger">
            @error('condition')
            {{ $message }}
            @enderror
        </small>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="cpu">CPU:</label>
        <input type="text" name="cpu" class="form-control @error('cpu') is-invalid @enderror" autofocus id="cpu">
        <small>For example:Quadcore</small>
        @error('cpu')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="processor_brand">Processor brand:</label>
        <input type="text" name="processor_brand" class="form-control @error('processor_brand') is-invalid @enderror" autofocus id="processor_brand">
        <small>For example:MTK 67XX</small>
        @error('processor_brand')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
        @enderror
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="rear_camera">Rear Camera:</label>
        <input type="text" name="rear_camera" class="form-control @error('rear_camera') is-invalid @enderror" autofocus id="rear_camera">
        <small>For example:13 Do not add MP/input a figure</small>
        @error('rear_camera')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
        @enderror
    </div>



</div>
<div class="form-group row mt-3">
    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="front_camera">Front Camera:</label>
        <input type="text" name="front_camera" class="form-control @error('front_camera') is-invalid @enderror" autofocus id="front_camera">
        <small>For example:13 Do not add MP/input a figure</small>
        @error('front_camera')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
        @enderror
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="cellular">Cellular:</label>
        <input type="text" name="cellular" class="form-control @error('cellular') is-invalid @enderror" autofocus id="cellular">
        <small>For example:CDMA</small>
        @error('cellular')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
        @enderror
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <label class="control-label" for="operating_system">Operating System:</label>
        <input type="text" name="operating_system" class="form-control @error('operating_system') is-invalid @enderror" autofocus id="operating_system">
        <small>For example:android</small>
        @error('operating_system')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
        @enderror
    </div>

</div>
<h5 class="mt-5">Section Two: Description</h5>
<hr>
<div class="form-group">
    <label for="description" class="control-label">Description:</label><br>
    <small>Create product description. Include the keywords. Do not include
        images and links at this point</small>
    <textarea name="text" class="form-control description" id="description">
                                    {{old('description')}}
                                </textarea>

    <small class="text-danger">
        @error('description')
        {{ $message }}
        @enderror
    </small>
</div>

<div class="form-group mt-3">
    <label for="details" class="control-label">Additional Details:</label><br>
    <small>Create a detailed description of the product. Include all images and links
        ofr additional item description</small>
    <textarea name="text" class="form-control details" id="details">
                                    {{old('details')}}
                                </textarea>

    <small class="text-danger">
        @error('details')
        {{ $message }}
        @enderror
    </small>
</div>

<div class="form-group mt-3">
    <label for="box" class="control-label">What is in the box?:</label><br>
    <small>Give a list of all items in the box</small>
    <textarea name="text" class="form-control box" id="box">
                                    {{old('box')}}
                                </textarea>

    <small class="text-danger">
        @error('box')
        {{ $message }}
        @enderror
    </small>
</div>
<h5 class="mt-5">Section Three: Product Variation (color)</h5>
<hr>
<p>Add color variation to the product. Attach an image to each color variation</p>
