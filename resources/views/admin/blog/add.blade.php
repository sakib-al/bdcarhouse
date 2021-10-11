@extends('admin.layouts.adminapp')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.error{
    color:red;
}
</style>


@section('title')
    BDCarHouse - Add Blog
@endsection

@section('product')
active
@endsection

@section('blog')
    active
@endsection

@section('content')

{{-- TEXT EDITOR  --}}

<link href="{{ asset('assets/text_editor/summernote.min.css')}}" rel="stylesheet" type="text/css" />

{{-- END --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }} <i class="fa fa-plus"></i>

            </h1>
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Blog </a></li>
                <li class="active">Here</li>
            </ul>
        </section>


        <!-- Main content -->
        <section id="product_details" class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        <div class="box-header with-border">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">


                                                {!! Form::open([ 'route' => ['admin.blog.store'], 'method' => 'POST', 'id' => 'quickForm', 'autocomplete' => 'off', 'files' => true , 'novalidate' ]) !!}

                                                @csrf
                                                <!-- see error -->
                                                  @if($errors->any())
                                                  {{ implode('', $errors->all('<div>:message</div>')) }}
                                                   @endif

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="title">@lang('form.title')</label>
                                                        {!! Form::text('title', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter title']) !!}
                                                        {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}

                                                    </div>

                                                    <div class="form-group">
                                                        <textarea id="summernote" name="summernote" class="form-control">

                                                        </textarea>
                                                    </div>
                                                    {{-- <div class="form-group">
                                                      <label for="description">Description</label>
                                                       <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter short description about the product"></textarea>
                                                     {!! $errors->first('description', '<label class="help-block text-danger">:message</label>') !!}
                                                   </div> --}}

                                                        <div class="form-group">
                                                            <div class="input-field">
                                                                <label class="active">Default Product Photos</label>
                                                                <div class="prod_def_photo_upload"  name="image" style="padding-top: .5rem;" title="Click for photo upload">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer col-md-offset-5">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <a href="{{ route('admin.blog.list') }}" class="btn btn-danger">Cancle</a>
                                                </div>
                                            {!! Form::close() !!}

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- /.content -->
                        </div>
                    </div>
                </div>
        </section>
    </div>


    <!-- /.content-wrapper -->


@endsection
@push('custom_js')

<script src="{{ asset('assets/text_editor/summernote.min.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $('#summernote').summernote({
            height: '300px'
        })
    });

</script>
<!--push from page-->
<script src="{{ asset('js/select2.full.min.js')}}"></script>
<script src="{{ asset('js/form-select2.js')}}"></script>
<!--for image upload-->
<script type="text/javascript" src="{{ asset('js/image-uploader.min.js')}}"></script>
<!--script only for product page-->
<script type="text/javascript" src="{{ asset('js/product.js')}}"></script>

<!--for tooltip-->
<script src="{{ asset('js/tooltip.js')}}"></script>

<!--for image gallery-->
<script src="{{ asset('js/lightgallery.min.js')}}"></script>
<script>
   $(function () {

     $('.prod_def_photo_upload').imageUploader();


     });

</script>


    <script type="text/javascript">
        $(document).ready(function () {

            $('#quickForm').validate({
                rules: {
                    title: {
                        required: true,

                    },
                    description: {
                        required: true,

                    },
                },
                messages: {
                    title: {
                        required: "Please enter title",
                    },
                    description: {
                        required: "Please provide a title",

                    },

                },

                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

    {{-- <script type="text/javascript">

        $(document).ready(function(){
            $('#summernote').summernote()
        })

    </script> --}}



@endpush
