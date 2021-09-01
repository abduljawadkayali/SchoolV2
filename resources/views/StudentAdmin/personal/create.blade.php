@extends('StudentAdmin.Dashbored')



@section('main')


@section('header')


 
@endsection

@section('main')

<div class="row">

    <div class="col-sm">
<div class='col-lg-12 col-lg-offset-12'>
  <h1> 
  <i class='fa fa-edit'></i>
  @lang("Edit") : {{$student->name}} </h1>
  <hr>
  {{ Form::model($student , array('route' => array('studentPersonal.update', $student->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

  <div class="form-group">
         
          @lang("Name")
      {{ Form::label('name', $student->name, array('class' => 'form-control')) }}
      
      {{ Form::hidden('name', $student->name, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
          <!-- {{ Form::label('email', 'Email') }}-->
          @lang("Student Number")
      {{ Form::label('number', $student->number, array('class' => 'form-control')) }}
      {{ Form::hidden('number', $student->number, array('class' => 'form-control')) }}
      {{ Form::hidden('email', $student->email, array('class' => 'form-control')) }}
      {{ Form::hidden('phone', $student->phone, array('class' => 'form-control')) }}
      {{ Form::hidden('group', $student->group_id, array('class' => 'form-control')) }}
      {{ Form::hidden('branch', $student->branch, array('class' => 'form-control')) }}
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