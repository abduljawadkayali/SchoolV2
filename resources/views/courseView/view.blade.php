@extends('layout.Admin')

@section('header')
    <div >
        <a href="{{ URL::previous() }}" class="btn btn-default">@lang("Back")</a>
    </div>
@endsection
@section('content')

    <div class="jumbotron text-center">
        <h3>@lang('title')  :  {!! $data->title !!}</h3>
        <h3>@lang('teacher')  :  {!! $data->teacher   !!}</h3>
        <h3>@lang('price')  :  {!! $data->price !!}</h3>
        <h3>@lang('level')  :  {!! $data->type !!}</h3>
        <h3>@lang('course_category')  :  {!! $data->courseCategory->name !!}</h3>
        <h3>@lang('body')  :  {!! $data->body !!}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

        <br>


    </div>

@endsection

