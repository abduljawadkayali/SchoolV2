@extends('layouts.editorDash')



@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

 <script type="text/javascript" charset="utf8" src="public_html/assets/js/jquery.dataTables.js"></script>

@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-key"></i> @lang("Schools")</h2>

          </div>
        </div>
          <hr>
      </div>



    <div class="table-responsive">
        <table class="table datatable table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("School Name")</th>
                    <th>@lang("Action")</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($schools as $school)
                <tr>

                    <td>{{ $school->name }}</td>



					<td>

                    <a href="{{ URL::to('school/'.$school->id.'/edit') }}" class="btn btn-info pull-center">@lang("Edit")</a>


                    {!! Form::open(['method' => 'DELETE', 'route' => ['school.destroy', $school->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('school/create') }}" class="btn btn-success">@lang("Add School")</a>

</div>

@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif




<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
        $('div.dataTables_filter label input').addClass('form-control');
    } );
    </script>


@endsection
