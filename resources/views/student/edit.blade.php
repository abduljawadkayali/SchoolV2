@extends('layouts.editorDash')


@section('title', '| Add Student')



@section('main')

<div align="right">
	<a href="{{ route('student.index') }}" class="btn btn-default">@lang("Back")</a>
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
				@lang("Edit Student") {{$student->name}}
				</h1>
			<hr>

             {{ Form::model($student, array('route' => array('student.update', $student->id), 'method' => 'PUT')) }}

             <div class="form-group">
                @lang("Student Number")
                <br>


               {{ Form::number('number', $student->number, array('class' => 'form-control')) }}

           </div>


			 <div class="form-group">
				@lang("Student Name")
				<br>

			   {{ Form::text('name', $student->name, array('class' => 'form-control')) }}

           </div>
            <div class="form-group">
                <label for="region">@lang("Select region:")</label>
                <select name="region" class="form-control">
                    <option value="{{$student->region_id}}">{{$student->region->name}}</option>

                    @foreach($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group">
                <label for="discount">@lang("Select discount:")</label>
                <select name="discount" class="form-control">
                    <option value="{{$student->discount_id}}">{{$student->discount->name}}</option>

                    @foreach($discounts as $discount)
                        <option value="{{$discount->id}}">{{$discount->name}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group">
                <label for="school_id">@lang("Select School:")</label>
                <select name="school_id" class="form-control">
                    <option value="{{$student->school_id}}">{{$student->school->name}}</option>

                    @foreach($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach


                </select>
            </div>

           <div class="form-group">
            @lang("Student email")
            <br>

           {{ Form::text('email', $student->email, array('class' => 'form-control')) }}

       </div>

       <div class="form-group">
        <!-- {{ Form::label('password', 'Password') }}-->
        @lang("Student password")
        <br>
      {{ Form::password('password', array('class' => 'form-control')) }}

  </div>

  <div class="form-group">
       <!--  {{ Form::label('password', 'Confirm Password') }}-->
       @lang("Confirm Password")
       <br>
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

  </div>






           <div class="form-group">
            @lang("Phone")
            <br>

           {{ Form::number('phone', $student->phone, array('class' => 'form-control')) }}

       </div>

       <div class="form-group">
        <label for="group">@lang("Select group:")</label>
        <select name="group" class="form-control">
            <option value="{{$student->group_id}}">{{$student->group->name}}</option>

            @foreach($group as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach




        </select>
    </div>


    <div class="form-group">
        <label for="branch">@lang("Select branch:")</label>
         <option value="{{$student->branch->id}}">{{$student->branch->name}}</option>
        <select name="branch" class="form-control">
                  <option value="{{$student->branch->id}}">{{$student->branch->name}}</option>
        <option>@lang("--branch--")</option>
        </select>
    </div>









            {{Form::submit('Add', array('class' => 'btn btn-primary')) }}
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
