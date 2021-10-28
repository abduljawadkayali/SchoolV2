@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-user-friends"></i>@lang("Add Employe")</h1>

                {{ Form::open(array('url' => 'employe', 'method' => 'POST', 'files' => true))}}
        <div class="row">
            <div class='col-lg-6 col-lg-offset-6' >
                <hr>
                <div class="form-group">
                    @lang("name")
                    <br>

                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("titleDes")
                    <br>

                    {{ Form::text('title', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group " >
                    @lang("Department")
                    {{Form::select('page', ['mangement' => 'المجلس الاداري',
                     'Tedmangement' => 'المركز التدريبي',
                     'BabeMangement' => 'الحضانة',
                     'PreMangement' => 'الروضة',
                     'FirstMangement' => 'الابتدائية',
                     'SecondMangement' => 'الاعدادية',
                     'ThirdMangement' => 'الثانوية',
                     'OnlineMangement' => 'المدرسة الافتراضية',
                    ],null ,['class' => 'browser-default custom-select'])}}
                </div>
                <div class="form-group">
                    @lang("years")
                    <br>

                    {{ Form::text('years', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("date")
                    <br>

                    {{ Form::text('date', null, array('class' => 'form-control')) }}

                </div>

                <div class="form-group">
                    @lang("description")
                    <br>

                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}

                </div>


            </div>

            <div class='col-lg-6 col-lg-offset-6' >
                <hr>

                <div class="form-group">
                    @lang("mail")
                    <br>

                    {{ Form::text('mail', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("whatsup")
                    <br>

                    {{ Form::text('whatsup', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("facebook")
                    <br>

                    {{ Form::text('facebook', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("aboutEmploye")
                    <br>

                    {{ Form::textarea('about', null, array('class' => 'form-control')) }}

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


