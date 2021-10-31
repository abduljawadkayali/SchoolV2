@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Discount")</h1>
<hr>

<a href="{{ URL::to('/disacount/create') }}" class="btn btn-success">@lang("Add Disacount")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("name")</th>
	<th>@lang("disacount")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->disacount }}</td>

			<td>

				<form action="{{ route('disacount.destroy', $row->id) }}" method="post">

					<a href="{{ route('disacount.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

