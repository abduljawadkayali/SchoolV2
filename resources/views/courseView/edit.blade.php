@extends('layout.Admin')

@section('header')

@endsection
@section('content')
    <h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
    <hr>

    <form method="post" action="{{ route('courseView.update', $data->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="form-group">
            @lang("title")
            <br>

            {{ Form::text('title', $data->title, array('class' => 'form-control')) }}

        </div>
        <div class="form-group">
            @lang("teacher")
            <br>

            {{ Form::text('teacher', $data->teacher, array('class' => 'form-control')) }}

        </div>
        <div class="form-group">
            @lang("price")
            <br>

            {{ Form::text('price', $data->price, array('class' => 'form-control')) }}

        </div>
        <div class="form-group">
            @lang("level")
            <br>

            {{ Form::text('type', $data->type, array('class' => 'form-control')) }}

        </div>
        <div class="form-group " >
            <select name="course_category_id" class="form-control custom-select">
                <option value="{{ $data->courseCategory->id}}" >{{ $data->courseCategory->name }}</option>
                @foreach($category as $item)
                    <option value="{{ $item->id }}" >{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            @lang("body")
            <br>

            {{ Form::textarea('body', $data->body, array('class' => 'form-control')) }}

        </div>




        <div class="form-group">
            <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

        </div>

        <div class="col-md-8">

            <div class="form-group">
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                </div>
            </div>




            <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
        </div>

        <br />
        <div class="form-group">
            <input type="submit" name="edit" class="btn btn-primary input-lg"/>
        </div>
    </form>



@endsection

