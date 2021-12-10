@extends('layouts.admin')
@section('title','Create Products')
@section('styles')
    @livewireStyles
@endsection
@section('content')
   
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
    @livewireScripts
@endsection
