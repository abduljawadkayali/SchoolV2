@extends('layout.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="fas fa-newspaper"></i>@lang("Add Background Other")</h1>

        <div class="row">

            <div class='col-lg-6 col-lg-offset-6' >

                <hr>
                {{ Form::open(array('url' => 'backgroundOther', 'method' => 'POST', 'files' => true))}}
                <div class="form-group " >
                    @lang("apartment")
                    {{Form::select('type', [
                     'Babe' => 'الحضانة',
                     'kg' => 'الروضة',
                     'firstschool' => 'الابتدائية',
                     'secschool' => 'الاعدادية',
                     'highschool' => 'الثانوية',
                     'club' => 'النادي الصيفي',
                     'blog' => 'المدونة',
                     'hr' => 'الموارد البشرية',
                     'finans' => 'المكتب المالي',
                     'interviewofice' => 'المكتب الاعلامي',
                     'service' => 'المكتب الخدمي',
                     'bus' => 'المواصلات',
                     'work' => 'اعمل معنا',
                    ],null ,['class' => 'browser-default custom-select'])}}
                </div>

                <div class="form-group">
                    @lang("title")
                    <br>

                    {{ Form::text('title', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("body")
                    <br>

                    {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("vidio")
                    <br>

                    {{ Form::text('vidio', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("الصورة الخلفية")
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>
                <div class="form-group">
                    @lang("image1")
                    <div class="custom-file">
                        <input name="image1" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>
                <div class="form-group">
                    @lang("image2")
                    <div class="custom-file">
                        <input name="image2" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>
                <div class="form-group">
                    @lang("image3")
                    <div class="custom-file">
                        <input name="image3" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>

                <div class="form-group">
                    @lang("subtitle")
                    <br>

                    {{ Form::text('subtitle', null, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("subbody")
                    <br>

                    {{ Form::textarea('subbody', null, array('class' => 'form-control')) }}

                </div>

                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>


@endsection


