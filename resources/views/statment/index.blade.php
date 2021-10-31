@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("statment")</h1>
    <hr>


     <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                {{ Form::open(array('url' => 'statment', 'method' => 'POST', 'files' => true))}}


                <div class="form-group">
                    @lang("Student Number")
                    <br>

                    {{ Form::text('student_number', null, array('class' => 'form-control')) }}

                </div>

                {{Form::submit(__('Search'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection

