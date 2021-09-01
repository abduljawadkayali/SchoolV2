@extends('layouts.editorDash')


@section('title', '| Add Photo')



@section('main')


<div align="right">
	<a href="{{ route('teacher.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />



<h1><i class='fa fa-edit'></i>@lang("Edit Teacher information:")  {{$teacher->name}}</h1>

<div class='col-lg-7 col-lg-offset-7'>
    
   
    <hr>

    {{ Form::model($teacher , array('route' => array('teacher.update', $teacher->id), 'method' => 'PUT')) }}

    <div class="form-group">
 
        @lang("Teacher Name")
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        @lang("Teacher email")
        <br>
   
       {{ Form::text('email', null, array('class' => 'form-control')) }}
       
   </div>

   <div class="form-group">
    <!-- {{ Form::label('password', 'Password') }}-->
    @lang("Password")
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
                <label for="school_id">@lang("Select School:")</label>
                <select name="school_id" class="form-control">
                    <option value="{{$teacher->school_id}}">{{$teacher->school}}</option>

                    @foreach($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach


                </select>
            </div>


       <div class="form-group">
        @lang("Phone")
        <br>
   
       {{ Form::number('phone', null, array('class' => 'form-control')) }}
       
   </div>


 

  
    <br>
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
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






@endsection