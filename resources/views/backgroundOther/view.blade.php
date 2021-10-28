@extends('layout.Admin')

@section('header')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
@endsection
@section('content')

    <div class="jumbotron text-center">
        <h3>@lang('type')  :  @lang($data->type)</h3>
        <h3>@lang('title')  :  {!! $data->title !!}</h3>
        <h2>@lang('body')- {!! $data->body !!}</h2>
        <h2>@lang('vidio')- {!! $data->vidio !!}</h2>
        <h3>@lang('subtitle')  :  {!! $data->subtitle !!}</h3>
        <h3>@lang('subbody')  :  {!! $data->subbody !!}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /><br>
        <img src="{{ URL::to('/') }}/images/{{ $data->image1 }}" class="img-thumbnail" /><br>
        <img src="{{ URL::to('/') }}/images/{{ $data->image2 }}" class="img-thumbnail" /><br>
        <img src="{{ URL::to('/') }}/images/{{ $data->image3 }}" class="img-thumbnail" /><br>




    </div>

@endsection

