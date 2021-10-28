@extends('layout.Admin')

@section('header')

@endsection
@section('content')
    <h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
    <hr>

    <form method="post" action="{{ route('gallery.update', $data->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="form-group " >
            <label name="type"  class="col-md-4">{{ $data->title }}</label>
            <div class="col-md-8">
                {{Form::select('title', ['first' => 'الأول',
                                    'second' => 'الثاني',
                                    'third' => 'الثالث',
                                    'forth' => 'الرابع',
                                   ], $data->title ,['class' => 'browser-default custom-select'])}}

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

