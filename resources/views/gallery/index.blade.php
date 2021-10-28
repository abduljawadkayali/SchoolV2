@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-images"> </i>@lang("Gallery")</h1>
<hr>

<a href="{{ URL::to('/gallery/create') }}" class="btn btn-success">@lang("Add Image")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("Category")</th>
		<th>@lang("Image")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->title }}</td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>

			<td>

				<form action="{{ route('gallery.destroy', $row->id) }}" method="post">
					<a href="{{ route('gallery.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

