@extends('TeacherAdmin.Dashbored')


<style>
    *{
        text-align: right;
    }
</style>
@section('header')

 
@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-plus"></i> @lang("Add Subject")</h2>
        </div>
        <form  method="post">
					
            <a href="{{ url('Teacher/actoin/'
            . $class_id  . '/' 
            
            . $subject_id )}}"
            class="btn btn-warning">@lang("Subject")</a>
        </form>
        
        </div>
       
      
      {{ Form::open(array('action' => 'Teacher\CategoryController@store', 'files' => true))}}	
        

      <div class="row ">
        <div class="col">
  
     
    <div class="form-group">
        @lang("Subject Name")
       {{ Form::text('name', '', array('class' => 'form-control')) }}
       <input type="hidden"  name="subject_id" value="{{ $subject_id }}">
       <input type="hidden"  name="class_id" value="{{ $class_id }}">
 
   </div>
    <div class="form-group">
       @lang("Subject Descrition")
       {{ Form::textarea('description', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor11')) }}
      </div>
       <div class="form-group">
       @lang("Book Link")
       {{ Form::text('book', '', array('class' => 'form-control')) }}
   </div>
   <div class="custom-file">
    <input name="image"  type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">@lang("Select Photograph")</label>
  </div>
</br>
</br>

 
       
       {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
      
      
    {{ Form::close() }}
   </br>
</br>
   </div>
</div>
  </div>
  



    </div>
    
    
            </ul>
             </div>
        </div>
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
@endsection