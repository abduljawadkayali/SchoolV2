@extends('TeacherAdmin.Dashbored')



@section('main')


@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

 
@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
          
            <h2><i class="fa fa-plus"></i> @lang("Show all Lessons")</h2>
     
            <a href="{{ URL::previous()}}" class="btn btn-default">@lang("Back")</a>
            
        </div>
       
        </div>
          <hr>
      </div>	
     

    
    <div class="table-responsive">
        <table class="table datatable table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Lesson Name")</th>
                    <th>@lang("Lesson Descrition")</th>
                    
                    <th>@lang("Action")</th>
            

                </tr>
            </thead>

            <tbody>
                @foreach ($data as $result)
                <tr>
                  <td>{{ $result->name }}</td>
                  <td>{!! $result->body !!}</td>
                <td>
                   
                  


                    <form action="{{ route('TeacherLesson.destroy', $result->id) }}" method="post">
					
                      <a href="{{ URL::to('Teacher/TeacherLesson/'.$result->id.'/edit') }}" class="btn btn-info pull-center">@lang("Edit")</a>
                      <a href="{{ route('TeacherLesson.show', $result->id) }}" class="btn btn-primary">@lang("Show")</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">@lang("Delete")</button>
                    </form>

                    </td>

                    
                @endforeach
            </tbody>
       

        </table>
           </div>
     
   

</div>


<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
        $('div.dataTables_filter label input').addClass('form-control');
    } );
    </script>
     

@endsection