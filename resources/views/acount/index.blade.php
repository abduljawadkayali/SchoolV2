@extends('layout.Muhasib')

@section('header')

@endsection
@section('content')

<div class="container-fluid">
 <h1><i class="fas fa-newspaper"> </i>@lang("Acount")</h1>
<hr>

<a href="{{ URL::to('/acount/create') }}" class="btn btn-success">@lang("Add Payment")</a>
<br>

<br>
<table class="table table-bordered table-striped">
	<tr>
	<th>@lang("Student")</th>
	<th>@lang("Student Number")</th>
	<th>@lang("payment")</th>
		<th>@lang("Operations")</th>
	</tr>


	@foreach($data as $row)

		<tr>
			<td>{{ $row->student->name }}--{{ $row->student->id }}</td>
			<td>{{ $row->student->number }}</td>
			<td>{{ $row->payment }}</td>

			<td>

				<form action="{{ route('acount.destroy', $row->id) }}" method="post">


					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach

</table>

@endsection

