@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-newspaper"></i>@lang("Add CourseCategory")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'courseCategory', 'method' => 'POST', 'files' => true))}}


                <div class="form-group">
                    @lang("Name")
                    <br>

                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                </div>
                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


