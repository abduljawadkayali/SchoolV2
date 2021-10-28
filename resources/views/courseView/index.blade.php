@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("CourseView")</h1>
<hr>

<a href="{{ URL::to('/courseView/create') }}" class="btn btn-success">@lang("Add CourseView")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("title")</th>
	<th>@lang("teacher")</th>
	<th>@lang("price")</th>
	<th>@lang("level")</th>
	<th>@lang("body")</th>
	<th>@lang("course_category")</th>
		<th>@lang("Image")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->title }}</td>
			<td>{{ $row->teacher }}</td>
			<td>{{ $row->price }}</td>
			<td>{{ $row->type }}</td>
			<td>{{ $row->body }}</td>
			<td>{{ $row->courseCategory->name }}</td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>

			<td>

				<form action="{{ route('courseView.destroy', $row->id) }}" method="post">
					<a href="{{ route('courseView.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('courseView.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

