@extends('layout.Admin')

@section('header')

@endsection
@section('content')
    <h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
    <hr>

    <form method="post" action="{{ route('courseCategory.update', $data->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label class="col-md-4">@lang("name")</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
            </div>
        </div>

        <br />
        <div class="form-group">
            <input type="submit" name="edit" class="btn btn-primary input-lg"/>
        </div>
    </form>



@endsection

