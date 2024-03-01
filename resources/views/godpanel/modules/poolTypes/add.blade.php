@extends('godpanel.layouts.layout', ['title' => 'Business category'])

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{asset('assets/libs/nestable2/nestable2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ __('Business category') }}</h4>
            </div>
        </div>
        <div class="col-sm-12 text-sm-left">
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <span>{!! \Session::get('success') !!}</span>
            </div>
            @endif
            @if (\Session::has('error_delete'))
            <div class="alert alert-danger">
                <span>{!! \Session::get('error_delete') !!}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="row catalog_box al_catalog_box">
        <div class="col-xl-12 col-lg-12 mb-12">
            <div class="card-box h-100">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <h4 class="page-title">{{ __('Business category') }}</h4>
                        <p class="sub-header"></p>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{route('admin.pollType.list')}}" class="btn btn-info waves-effect waves-light text-sm-right " dataid="0">
                            <i class="mdi mdi-plus-circle mr-1"></i> {{ __('View') }}</a>
                    </div>
                </div>
                <form id="myForm" class="row brand-row" enctype="multipart/form-data" method="post" action="{{route('admin.pollType.create')}}">
                    @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 pb-0 mb-0">
                                <div class="row rowYK">
                                    <div class="col-md-6">
                                        <label>{{ __("Name") }}</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __("Upload Banner") }}</label>
                                        <input type="file" id="avatar" name="avatar" accept="image/*" required />
                                        <label class="logo-size d-block text-right mt-1">{{ __("Image Size") }} 200 X 200</label>
                                        <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-right btn_bottom">
                        <button type="submit" class="btn btn-info waves-effect waves-light text-sm-right saveBrandOrder">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
 
<script>
$(document).ready(function() {
    // Add form validation rules
    // Define validation rules
var validationRules = {
    name: {
        presence: {
            allowEmpty: false,
            message: "is required"
        }
    },
    avatar: {
        presence: {
            allowEmpty: false,
            message: "is required"
        },
        file: {
            maxSize: "2MB",
            message: "should be less than 2MB"
        },
        exclusion: {
            within: ["exe", "bat", "com", "cmd"],
            message: "cannot be executable files"
        }
    }
};

// Define validation messages
var validationMessages = {
    name: {
        presence: "Name is required"
    },
    avatar: {
        presence: "Avatar is required",
        file: "Avatar should be less than 2MB and cannot be executable files"
    }
};

    $('#myForm').validate();

    // Preview image
    $('#avatar').change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Submit form via AJAX
    $('#myForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var validationResult = validate(formData, validationRules, { format: "detailed" });
        if (validationResult === undefined) {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        } else {
            // Display validation errors
            validationResult.forEach(function(error) {
                $('#' + error.attribute).addClass('is-invalid').next('.invalid-feedback').html(error.error);
            });
        }
    });
});
</script>
@endsection
