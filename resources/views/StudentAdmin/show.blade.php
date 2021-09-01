@extends('StudentAdmin.Dashbored')



@section('main')

 
<div class="col-lg-10 col-lg-offset-1">
    <div class="container" >
        <div class="row">
          <div class="col">
          
        </div>
       
        </div>
          <hr>
      </div>	
      
    
    <div class="table-responsive">
        <table class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Subject Name")</th>
                    <th>@lang("Result")</th>
            

                </tr>
            </thead>

            <tbody>
                @foreach ($data as $result)
                
                <tr>
                    <td>{{ $result->subject->name }}</td>
                    <td>{{ $result->degree }}</td>
                    
                </tr>
                @endforeach
                <tr>
                    <td>المجموع العام</td>
                    <td>{{$data->sum('degree')}}</td>
                    
                </tr>
            </tbody>
            <tfoot>

  </tfoot>
       

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