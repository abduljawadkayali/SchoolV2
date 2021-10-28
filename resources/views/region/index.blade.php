@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Region")</h1>
<hr>

<a href="{{ URL::to('/region/create') }}" class="btn btn-success">@lang("Add Region")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("name")</th>
	<th>@lang("price")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->price }}</td>

			<td>

				<form action="{{ route('region.destroy', $row->id) }}" method="post">

					<a href="{{ route('region.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

