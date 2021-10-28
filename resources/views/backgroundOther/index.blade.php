@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Background Other")</h1>
<hr>

<a href="{{ URL::to('/backgroundOther/create') }}" class="btn btn-success">@lang("Add Background Other")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("type")</th>
	<th>@lang("title")</th>
	<th>@lang("body")</th>
		<th>@lang("vidio")</th>

		<th>@lang("subtitle")</th>
		<th>@lang("subbody")</th>
			<th>@lang("image")</th>
			<th>@lang("image1")</th>
        		<th>@lang("image2")</th>
        		<th>@lang("image3")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>@lang( $row->type)</td>
			<td>{{ $row->title }}</td>
			<td>{{ $row->body }}</td>
			<td>{{ $row->vidio }}</td>
			<td>{{ $row->subtitle }}</td>
			<td>{{ $row->subbody }}</td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image1 }}" class="img-thumbnail" width="150" /></td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image2 }}" class="img-thumbnail" width="150" /></td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image3 }}" class="img-thumbnail" width="150" /></td>

			<td>

				<form action="{{ route('backgroundOther.destroy', $row->id) }}" method="post">
					<a href="{{ route('backgroundOther.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

