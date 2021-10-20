@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-icons"></i>@lang("Background")</h1>
<hr>

<a href="{{ URL::to('/icon/create') }}" class="btn btn-success">@lang("Add Icon")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("title")</th>
	<th>@lang("icon")</th>
	<th>@lang("link")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->title }}</td>
			<td><i class="{{ $row->icon }}">{{ $row->icon }}</i></td>
			<td>{{ $row->link }}</td>

			<td>

				<form action="{{ route('icon.destroy', $row->id) }}" method="post">
					<a href="{{ route('icon.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('icon.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

