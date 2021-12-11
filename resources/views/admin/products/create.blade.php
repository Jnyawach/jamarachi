@extends('layouts.admin')
@section('title','Create Products')
@section('styles')
    @livewireStyles
@endsection
@section('content')
    <section>
        <div class="row">
            <div class="col-11 mx-auto">
                @livewire('multi-step-form')
            </div>
        </div>
    </section>

@endsection
@section('scripts')

    <script>


        $('#category').change(function() {

            var categoryID = $(this).val();

            if (categoryID) {

                $.ajax({
                    type: "GET",
                    url: "{{ url('subCategory') }}?category_id=" + categoryID,
                    success: function(res) {

                        if (res) {

                            $("#subcategory").empty();
                            $("#subcategory").append('<option>Select Subcategory</option>');
                            $.each(res, function(key, value) {
                                $("#subcategory").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#subcategory").empty();
                        }
                    }
                });
            } else {

                $("#subcategory").empty();

            }
        });
    </script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description');
        CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'box' );
    </script>
    <script>
        function preview() {
            firstImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("firstImage").style.display = "block";

        }
    </script>
    <script>
        function previewTwo() {

            secondImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("secondImage").style.display = "block";
        }
    </script>
    <script>
        function previewThree() {

            thirdImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("thirdImage").style.display = "block";
        }
    </script>
    <script>
        function previewFour() {

            fourthImage.src=URL.createObjectURL(event.target.files[0]);
            document.getElementById("fourthImage").style.display = "block";
        }
    </script>
    @livewireScripts
@endsection
