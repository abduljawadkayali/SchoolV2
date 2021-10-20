@extends('layout.Admin')

@section('header')

@endsection
@section('content')
    <h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
    <hr>

    <form method="post" action="{{ route('icon.update', $data->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label class="col-md-4">@lang("title")</label>
            <div class="col-md-8">
                <input type="text" name="title" value="{{ $data->title }}" class="form-control input-lg"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">@lang("icon")</label>
            <div class="col-md-8">
                <i class="{{ $data->icon }}"></i>
                <input type="text" name="icon" value="{{ $data->icon }}" class="form-control input-lg"  />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4">@lang("link")</label>
            <div class="col-md-8">
                <input type="text" name="link" value="{{ $data->link }}" class="form-control input-lg"  />
            </div>
        </div>

        <br />
        <div class="form-group">
            <input type="submit" name="edit" class="btn btn-primary input-lg"/>
        </div>
    </form>



@endsection

