@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-images"></i>@lang("Add Image")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'gallery', 'method' => 'POST', 'files' => true))}}

                <div class="form-group " >
                @lang("Category")

                    {{Form::select('title', ['first' => 'الأول',
                     'second' => 'الثاني',
                     'third' => 'الثالث',
                     'forth' => 'الرابع',
                    ],null ,['class' => 'browser-default custom-select'])}}
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>


                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


