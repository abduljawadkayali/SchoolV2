@extends('layout.Admin')

@section('header')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
@endsection
@section('content')

    <div class="jumbotron text-center">
        <h3>@lang('Category')  :  {!! $data->title !!}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

        <br>


    </div>

@endsection

