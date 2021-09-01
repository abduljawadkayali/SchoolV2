@extends('layouts.editorDash')


@section('title', '| Edit School')



@section('main')

<div align="right">
	<a href="{{ route('school.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />



<div class="container">
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
	  </div>
	</div>
     <div class="row">
      <div class="col-sm">
        <div class='col-lg-12 col-lg-offset-12' >
            <h1>

				<i class="fa fa-edit" aria-hidden="true"></i>
				@lang("Edit School") {{$school->name}}
				</h1>
			<hr>

             {{ Form::model($school, array('route' => array('school.update', $school->id), 'method' => 'PUT')) }}

            <div class="form-group">
                @lang("School Name")
                <br>

                {{ Form::text('name', $school->name, array('class' => 'form-control')) }}

            </div>

            {{Form::submit(__('Update'), array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
         </div>
    </div>
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


<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="group"]').on('change',function(){
               var groupID = jQuery(this).val();

               if(groupID)
               {
                  jQuery.ajax({
                     url : '/AddStudent/getBranches/' +groupID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="branch"]').empty();
                        jQuery.each(data, function(key,value){
                           jQuery.each(value, function(id,name){
                           $('select[name="branch"]').append('<option value="'+ id +'">'+ name +'</option>');
                        });
                        });
                     }
                  });


               }
               else
               {

                  $('select[name="branch"]').empty();
               }
            });
    });
    </script>


@endsection
