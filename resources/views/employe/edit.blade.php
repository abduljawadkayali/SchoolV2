@extends('layout.Admin')

@section('header')

@endsection
@section('content')
    <h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
    <hr>

    <form method="post" action="{{ route('employe.update', $data->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="row">
            <div class='col-lg-6 col-lg-offset-6' >
                <hr>
                <div class="form-group">
                    @lang("name")
                    <br>

                    {{ Form::text('name', $data->name, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("title")
                    <br>

                    {{ Form::text('title', $data->title, array('class' => 'form-control')) }}

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
                     'OnlineMangement' => 'المرسة الافتراضية',
                    ],$data->page ,['class' => 'browser-default custom-select'])}}
                </div>
                <div class="form-group">
                    @lang("years")
                    <br>

                    {{ Form::text('years', $data->years, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("date")
                    <br>

                    {{ Form::text('date', $data->date, array('class' => 'form-control')) }}

                </div>

                <div class="form-group">
                    @lang("description")
                    <br>

                    {{ Form::textarea('description',  $data->description, array('class' => 'form-control')) }}

                </div>


            </div>

            <div class='col-lg-6 col-lg-offset-6' >
                <hr>

                <div class="form-group">
                    @lang("mail")
                    <br>

                    {{ Form::text('mail', $data->mail, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("whatsup")
                    <br>

                    {{ Form::text('whatsup', $data->whatsup, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("facebook")
                    <br>

                    {{ Form::text('facebook', $data->facebook, array('class' => 'form-control')) }}

                </div>
                <div class="form-group">
                    @lang("about")
                    <br>

                    {{ Form::textarea('about', $data->about, array('class' => 'form-control')) }}

                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
                    </div>
                </div>
                <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div></form>



@endsection

