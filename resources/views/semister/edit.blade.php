@extends('layouts.editorDash')


@section('title', '| Edit Semister')



@section('main')


<div align="right">
	<a href="{{ route('semister.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit Semister")</h1>





<form method="post" action="{{ route('semister.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Semister")</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
		</div>
	</div>


		
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>






@endsection