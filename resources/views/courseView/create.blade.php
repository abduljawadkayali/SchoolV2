@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-newspaper"></i>@lang("Add CourseView")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'courseView', 'method' => 'POST', 'files' => true))}}
                <div class="form-group ">

                    @lang("title")
                    <br>

                    {{ Form::text('title', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("teacher")
                    <br>

                    {{ Form::text('teacher', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("price")
                    <br>

                    {{ Form::text('price', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("level")
                    <br>

                    {{ Form::text('type', null, array('class' => 'form-control')) }}

                </div>


                <div class="form-group " >
                    <select name="course_category_id" class="form-control custom-select">
                        @foreach($data as $item)
                            <option value="{{ $item->id }}" >{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @lang("body")
                    <br>

                    {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>

                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


