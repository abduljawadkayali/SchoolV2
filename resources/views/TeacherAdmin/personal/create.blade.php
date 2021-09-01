@extends('TeacherAdmin.Dashbored')



@section('main')


@section('header')


 
@endsection

@section('main')

<div class="row">

    <div class="col-sm">
<div class='col-lg-12 col-lg-offset-12'>
  <h1> 
  <i class='fa fa-edit'></i>
  @lang("Edit") : {{$teacher->name}} </h1>
  <hr>
  {{ Form::model($teacher , array('route' => array('personal.update', $teacher->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

  <div class="form-group">
         
          @lang("Name")
      {{ Form::label('name', $teacher->name, array('class' => 'form-control')) }}
      
      {{ Form::hidden('name', $teacher->name, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
          <!-- {{ Form::label('email', 'Email') }}-->
          @lang("Email")
      {{ Form::label('email', $teacher->email, array('class' => 'form-control')) }}
      {{ Form::hidden('email', $teacher->email, array('class' => 'form-control')) }}

      {{ Form::hidden('phone', $teacher->phone, array('class' => 'form-control')) }}
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


  {{ Form::submit(__('Save'), array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}

@endsection