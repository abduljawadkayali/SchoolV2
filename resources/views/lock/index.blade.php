@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Lock")</h1>
<hr>

<a href="{{ URL::to('/lock/create') }}" class="btn btn-success">@lang("Start year")</a>
<br>

<br>

     <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'lock', 'method' => 'POST', 'files' => true))}}


                <div class="form-group">
                    @lang("Percent")
                    <br>

                    {{ Form::text('percent', null, array('class' => 'form-control')) }}

                </div>

                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection

