@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-newspaper"></i>@lang("Add Payment")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'acount', 'method' => 'POST', 'files' => true))}}


                <div class="form-group">
                    @lang("Student Number")
                    <br>

                    {{ Form::text('student_number', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("payment")
                    <br>

                    {{ Form::text('payment', null, array('class' => 'form-control')) }}


                </div>
                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


