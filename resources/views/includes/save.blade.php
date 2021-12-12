


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
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="cpu" class="control-label">CPU:</label>
            <input type="text" class="form-control @error('cpu') is-invalid @enderror" name="cpu"
                   value="{{old('cpu')}}">
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
                   value="{{old('processor_brand')}}">
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
                   value="{{old('weight')}}">
            <small>For Example: 0.8</small>
            <small class="text-danger">
                @error('weight')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="rear-camera" class="control-label">Rear Camera:</label>
            <input type="text" class="form-control @error('rear-camera') is-invalid @enderror" name="rear-camera"
                   value="{{old('rear-camera')}}">
            <small>For Example: 15: Do not include MP</small>
            <small class="text-danger">
                @error('rear-camera')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="front-camera" class="control-label">Front Camera:</label>
            <input type="text" class="form-control @error('front-camera') is-invalid @enderror" name="front-camera"
                   value="{{old('front-camera')}}">
            <small>For Example: 15: Do not include MP</small>
            <small class="text-danger">
                @error('front-camera')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="cellular" class="control-label">Cellular:</label>
            <input type="text" class="form-control @error('cellular') is-invalid @enderror" name="cellular"
                   value="{{old('cellular')}}">
            <small>For Example: CDMA</small>
            <small class="text-danger">
                @error('cellular')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="operating_system" class="control-label">Operating System:</label>
            <input type="text" class="form-control @error('weight') is-invalid @enderror" name="operating_system"
                   value="{{old('operating_system')}}">
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
                   value="{{old('sim_card')}}">
            <small>For Example: Dual Standby</small>
            <small class="text-danger">
                @error('sim_card')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="battery_capacity" class="control-label">Battery Capacity:</label>
            <input type="text" class="form-control @error('battery_capacity') is-invalid @enderror" name="battery_capacity"
                   value="{{old('battery_capacity')}}">
            <small>For Example: 6800 Don't include: MaH</small>
            <small class="text-danger">
                @error('battery_capacity')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <label for="screen_size" class="control-label">Screen Size:</label>
            <input type="text" class="form-control @error('screen_size') is-invalid @enderror" name="screen_size"
                   value="{{old('screen_size')}}">
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
                   value="{{old('language')}}">
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
                   value="{{old('display_type')}}">
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
                   value="{{old('country')}}">
            <small>For Example: Kenya</small>
            <small class="text-danger">
                @error('country')
                {{ $message }}
                @enderror
            </small>
        </div>
    </div>
</div>



<div class="step-four">
    <h5>Step Four: Search Engine Optimization</h5>

    <div class="form-group required">
        <label for="keywords" class="control-label">Meta Keywords</label>
        <textarea class="form-control @error('keywords')@enderror" name="keywords" id="keywords">
                  {{old('keywords')}}
              </textarea>
        <br>
        <small>Please enter Comma separated words For example: Phones, Smart Phones,Gadgets;</small>
        <small class="text-danger">
            @error('keywords')
            {{ $message }}
            @enderror
        </small>
    </div>
    <div class="form-group required">
        <label for="meta_description" class="control-label">Meta Description</label>
        <textarea class="form-control @error('meta_description')@enderror" name="meta_description" id="meta_description">
                 {{old('meta_description')}}
              </textarea>
        <br>
        <small>Should not exceed 150 words</small>
        <small class="text-danger">
            @error('keywords')
            {{ $message }}
            @enderror
        </small>
    </div>
</div>



<div class="step-five">
    <h5>Step Five: Product Image</h5>
    <div class="form-group mt-3 row">
        <div class="col-6 col-md-4 col-lg-3 p-2">
            <div class="image-upload text-center p-3">
                <img id="firstImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                <div class="mb-3">
                    <input class="form-control d-none" type="file" id="mainImage" onchange="preview()" name="mainImage">
                </div>
                <label for="mainImage" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                    Main Image</label><br>
            </div>
            <small class="text-danger">
                @error('mainImage')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-6 col-md-4 col-lg-3 p-2">
            <div class="image-upload text-center p-3">
                <img id="secondImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                <div class="mb-3">
                    <input class="form-control d-none" type="file" id="imageTwo" onchange="previewTwo()" name="imageTwo">
                </div>
                <label for="imageTwo" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                    Second Image</label><br>
            </div>
            <small class="text-danger">
                @error('imageTwo')
                {{ $message }}
                @enderror
            </small>
        </div>

        <div class="col-6 col-md-4 col-lg-3 p-2">
            <div class="image-upload text-center p-3">
                <img id="thirdImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                <div class="mb-3">
                    <input class="form-control d-none" type="file" id="imageThree" onchange="previewThree()" name="imageThree">
                </div>
                <label for="imageThree" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                    Third Image</label><br>
            </div>
            <small class="text-danger">
                @error('imageThree')
                {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-6 col-md-4 col-lg-3 p-2">
            <div class="image-upload text-center p-3">
                <img id="fourthImage" src="" width="100px" height="auto" alt="Upload Logo" class="text-center"/>
                <div class="mb-3">
                    <input class="form-control d-none" type="file" id="imageFour" onchange="previewFour()" name="imageFour">
                </div>
                <label for="imageFour" class="control-label fs-6"><i class="fas fa-camera"></i><br>
                    Fourth Image</label><br>
            </div>
            <small class="text-danger">
                @error('imageFour')
                {{ $message }}
                @enderror
            </small>
        </div>

    </div>
</div>
