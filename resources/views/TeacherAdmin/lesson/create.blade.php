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
            <h2><i class="fa fa-plus"></i> @lang("Add Lesson")</h2>
        </div>
        <form  method="post">
					
            <a href="{{ url('Teacher/action/'
            . $class_id  . '/' 
            
            . $subject_id )}}"
            class="btn btn-warning">@lang("Lessons")</a>
        </form>
        
        </div>
       
      
      {{ Form::open(array('action' => 'Teacher\TeacherLessonController@store', 'files' => true))}}	
        

      <div class="row ">
        <div class="col">
        <nav class="w-100">
          <div class="nav nav-tabs" id="lesson-tab" role="tablist">
            <a class="nav-item nav-link active" id="lesson-info-tab" data-toggle="tab" href="#lesson-info" role="tab" aria-controls="lesson-info" aria-selected="true">@lang("Information")</a>
            <a class="nav-item nav-link" id="lesson-firstText-tab" data-toggle="tab" href="#lesson-firstText" role="tab" aria-controls="lesson-firstText" aria-selected="false">@lang("First Text")</a>
            
            <a class="nav-item nav-link" id="lesson-firstVidio-tab" data-toggle="tab" href="#lesson-firstVidio" role="tab" aria-controls="lesson-firstVidio" aria-selected="false">@lang("First Vidio")</a>
            <a class="nav-item nav-link" id="lesson-secondText-tab" data-toggle="tab" href="#lesson-secondText" role="tab" aria-controls="lesson-secondText" aria-selected="false">@lang("Second Text")</a>

            
            <a class="nav-item nav-link" id="lesson-secondVidio-tab" data-toggle="tab" href="#lesson-secondVidio" role="tab" aria-controls="lesson-secondVidio" aria-selected="false">@lang("Second Vidio")</a>
            <a class="nav-item nav-link" id="lesson-thirdText-tab" data-toggle="tab" href="#lesson-thirdText" role="tab" aria-controls="lesson-thirdText" aria-selected="false">@lang("Third Text")</a>
            
            <a class="nav-item nav-link" id="lesson-thirdVidio-tab" data-toggle="tab" href="#lesson-thirdVidio" role="tab" aria-controls="lesson-thirdVidio" aria-selected="false">@lang("Third Vidio")</a>
         
            
            <a class="nav-item nav-link" id="lesson-link-tab" data-toggle="tab" href="#lesson-link" role="tab" aria-controls="lesson-link" aria-selected="false">@lang("Links")</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="lesson-info" role="tabpanel" aria-labelledby="lesson-info-tab">
           
    <div class="form-group">
        @lang("Lesson Name")
       {{ Form::text('name', '', array('class' => 'form-control')) }}
       <input type="hidden"  name="subject_id" value="{{ $subject_id }}">
       <input type="hidden"  name="class_id" value="{{ $class_id }}">
    </br>
       @lang("Lesson Descrition")
       {{ Form::textarea('body', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor')) }}
 
   </div>
   <div class="custom-file">
    <input name="image"  type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">@lang("Select Photograph")</label>
  </div>
            </div>
          <div class="tab-pane fade" id="lesson-firstText" role="tabpanel" aria-labelledby="lesson-firstText-tab">
            <div class="form-group">
                @lang("First Text Title")
               {{ Form::text('ftitle', '', array('class' => 'form-control')) }}
            </br>
               @lang("First Text Body")
               {{ Form::textarea('ftext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor1')) }}
         
           </div>
           <div class="form-group">
            @lang("Second Text Title")
           {{ Form::text('stitle', '', array('class' => 'form-control')) }}
        </br>
           @lang("Second Text Body")
           {{ Form::textarea('stext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor2')) }}
     
       </div>
      
          </div>
          <div class="tab-pane fade" id="lesson-firstVidio" role="tabpanel" aria-labelledby="lesson-firstVidio-tab"> 
            <div class="form-group">
                @lang("First Vidio Title")
               {{ Form::text('fVtitle', '', array('class' => 'form-control')) }}
            </div>
               <div class="form-group">
               @lang("First Vidio Url")
               {{ Form::text('fVurl', '', array('class' => 'form-control')) }}
            </br>
               @lang("First Vidio Body")
               {{ Form::textarea('fVtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor3')) }}
         
           </div>
          </div>
          <div class="tab-pane fade" id="lesson-secondText" role="tabpanel" aria-labelledby="lesson-secondText-tab">
          
                  
      <div class="form-group ">
        
            @lang("Third Text Title")
           {{ Form::text('thtitle', '', array('class' => 'form-control')) }}
        </div>   
           <div class="form-group">
           @lang("Third Text Body")
           {{ Form::textarea('thtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor4')) }}
     
       </div>

       <div class="form-group">
        @lang("Forth Text Title")
       {{ Form::text('fourthtitle', '', array('class' => 'form-control')) }}
    </br>
       @lang("Forth Text Body")
       {{ Form::textarea('fourthtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor5')) }}
 
   </div>

   <div class="form-group">
    @lang("Fifth Text Title")
   {{ Form::text('fifthtitle', '', array('class' => 'form-control')) }}
</br>
   @lang("Fifth Text Body")
   {{ Form::textarea('fifthtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor6')) }}

</div>
      
    </div>



    <div class="tab-pane fade" id="lesson-secondVidio" role="tabpanel" aria-labelledby="lesson-secondVidio-tab"> 
        <div class="form-group">
            @lang("Second Vidio Title")
           {{ Form::text('sVtitle', '', array('class' => 'form-control')) }}
        </div>
           <div class="form-group">
           @lang("Second Vidio Url")
           {{ Form::text('sVurl', '', array('class' => 'form-control')) }}
        </br>
           @lang("Second Vidio Body")
           {{ Form::textarea('sVtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor7')) }}
     
       </div>
      </div>


      <div class="tab-pane fade" id="lesson-thirdText" role="tabpanel" aria-labelledby="lesson-thirdText-tab">
          
                  
        <div class="form-group ">
          <div class="form-group">
              @lang("Sixth Text Title")
             {{ Form::text('sixthtitle', '', array('class' => 'form-control')) }}
          </br>
             @lang("Sixth Text Body")
             {{ Form::textarea('sixthtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor8')) }}
       
         </div>
  
         <div class="form-group">
          @lang("Seventh Text Title")
         {{ Form::text('seventhtitle', '', array('class' => 'form-control')) }}
      </br>
         @lang("Seventh Text Body")
         {{ Form::textarea('seventhtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor9')) }}
   
     </div>
 
        
      </div>
  </div>

  <div class="tab-pane fade" id="lesson-thirdVidio" role="tabpanel" aria-labelledby="lesson-thirdVidio-tab"> 
    <div class="form-group">
        @lang("Third Vidio Title")
       {{ Form::text('tVtitle', '', array('class' => 'form-control')) }}
    </div>
       <div class="form-group">
       @lang("Third Vidio Url")
       {{ Form::text('tVurl', '', array('class' => 'form-control')) }}
    </br>
       @lang("Third Vidio Body")
       {{ Form::textarea('tVtext', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor10')) }}
 

     
   </div>
  </div>

  
  <div class="tab-pane fade" id="lesson-link" role="tabpanel" aria-labelledby="lesson-link-tab"> 
    <div class="form-group">
        @lang("First Link Title")
       {{ Form::text('fLtitle', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
       @lang("First Link Url")
       {{ Form::text('fLurl', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
    @lang("Second Link Title")
    {{ Form::text('sLtitle', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">
    @lang("Second Link Url")
    {{ Form::text('sLurl', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">

 @lang("Third Link Title")
 {{ Form::text('tLtitle', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">
 @lang("Third Link Url")
 {{ Form::text('tLurl', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">

@lang("Foruth Link Title")
{{ Form::text('fourthLtitle', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">
@lang("Foruth Link Url")
{{ Form::text('fourthLurl', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">

@lang("Fifth Link Title")
{{ Form::text('fifthLtitle', '', array('class' => 'form-control')) }}
</div>
@lang("Fifth Link Url")
<div class="form-group">
{{ Form::text('fifthLurl', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">

       
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