@extends('layout.Admin')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Haber")</h1>
<hr>

<a href="{{ URL::to('/haber/create') }}" class="btn btn-success">@lang("Add Haber")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("body")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->body }}</td>

			<td>

				<form action="{{ route('haber.destroy', $row->id) }}" method="post">
					<a href="{{ route('haber.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('haber.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

