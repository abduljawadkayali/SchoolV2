@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-user-friends"></i>@lang("Employe")</h1>
<hr>

<a href="{{ URL::to('/employe/create') }}" class="btn btn-success">@lang("Add Employe")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("name")</th>
	<th>@lang("date")</th>
	<th>@lang("titleDes")</th>
	<th>@lang("page")</th>
	<th>@lang("descriptionEmploye")</th>
	<th>@lang("aboutEmploye")</th>
	<th>@lang("years")</th>
	<th>@lang("mail")</th>
	<th>@lang("whatsup")</th>
	<th>@lang("facebook")</th>
	<th>@lang("image")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->date }}</td>
			<td>{{ $row->title }}</td>
			<td>{{ __($row->page) }}</td>
			<td>{{ $row->description }}</td>
			<td>{{ $row->about }}</td>
			<td>{{ $row->years }}</td>
			<td>{{ $row->mail }}</td>
			<td>{{ $row->whatsup }}</td>
			<td>{{ $row->facebook }}</td>
				<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>


			<td>

				<form action="{{ route('employe.destroy', $row->id) }}" method="post">
					<a href="{{ route('employe.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('employe.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

