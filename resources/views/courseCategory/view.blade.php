@extends('layout.Admin')

@section('header')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
@endsection
@section('content')

    <div class="jumbotron text-center">
        <h3>@lang('title')  :  {!! $data->title !!}</h3>
        <h2>@lang('icon')- {!! $data->description !!} <i class="{{ $data->icon }}">{{ $data->icon }}</i></h2>
        <h3>@lang('link')  :  {!! $data->link !!}</h3>


    </div>

@endsection

