@extends('layout.Admin')

@section('header')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
@endsection
@section('content')

    <div class="jumbotron text-center">
        <h3>@lang('name')  :  {!! $data->name !!}</h3>
        <h2>@lang('date')- {!! $data->date !!}</h2>
        <h3>@lang('title')  :  {!! $data->title !!}</h3>
        <h3>@lang('description')  :  {!! $data->description !!}</h3>
        <h3>@lang('about')  :  {!! $data->about !!}</h3>
        <h3>@lang('years')  :  {!! $data->years !!}</h3>
        <h3>@lang('page')  :  {!! $data->page !!}</h3>
        <h3>@lang('mail')  :  {!! $data->mail !!}</h3>
        <h3>@lang('whatsup')  :  {!! $data->whatsup !!}</h3>
        <h3>@lang('facebook')  :  {!! $data->facebook !!}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

        <br>


    </div>

@endsection

