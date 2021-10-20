@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-icons"></i>@lang("Add Icon")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'icon', 'method' => 'POST', 'files' => true))}}


                <div class="form-group">
                    @lang("Title")
                    <br>

                    {{ Form::text('title', null, array('class' => 'form-control')) }}

                </div>

                <div class="form-group">
                    @lang("icon")
                    <br>

                    {{ Form::text('icon', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("link")
                    <br>

                    {{ Form::text('link', null, array('class' => 'form-control')) }}

                </div>
                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


