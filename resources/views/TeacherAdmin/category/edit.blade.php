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
            <h2><i class="fa fa-plus"></i> @lang("Edit Subject")</h2>
            <a href="{{ URL::previous()}}" class="btn btn-default">@lang("Back")</a>
        </div>
      
        
        </div>
       
      {{ Form::model($category , array('action' => array('Teacher\CategoryController@update', $category->id), 'method' => 'PUT', 'files' => true)) }}	
    

      <div class="row ">
         <div class="col">
   
      
     <div class="form-group">
         @lang("Subject Name")
        {{ Form::text('name', $category->name , array('class' => 'form-control')) }}
        <input type="hidden"  name="subject_id" value="{{ $category->subject_id }}">
        <input type="hidden"  name="class_id" value="{{ $category->class_id }}">
  
    </div>
     <div class="form-group">
        @lang("Subject Descrition")
        {{ Form::textarea('description', $category->description, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor11')) }}
       </div>
        <div class="form-group">
        @lang("Book Link")
        {{ Form::text('book', $category->book, array('class' => 'form-control')) }}
    </div> 
    <img src="{{ URL::to('/') }}/images/{{ $category->image }}" class="img-thumbnail" />
   </br>
    <div class="custom-file">
     
     <input name="image"  type="file" class="custom-file-input" id="customFile">
     <input type="hidden" name="hidden_image" value="{{ $category->image }}" />
     
     <label class="custom-file-label" for="customFile">@lang("Select Photograph")</label>
   </div>

 </br>
 </br>
 
  
        
        {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
       
       
     {{ Form::close() }}
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