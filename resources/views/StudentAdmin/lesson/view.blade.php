@extends('StudentAdmin.Dashbored')
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
            <h2><i class="fa fa-key"></i>{{ $lesson->name}}</h2>
            <a href="{{ URL::previous()}}" class="btn btn-default">@lang("Back")</a>
        </div>
      
     
        </div>

      <div class="row ">
        <div class="col">
        <nav class="w-100">
          <div class="nav nav-tabs" id="lesson-tab" role="tablist">
              
                    
              <a class="nav-item nav-link active" id="lesson-firstText-tab" data-toggle="tab" href="#lesson-firstText" role="tab" aria-controls="lesson-firstText" aria-selected="true">@lang("Text")</a>

            @if($lesson->stitle)

            <a class="nav-item nav-link" id="lesson-secondText-tab" data-toggle="tab" href="#lesson-secondText" role="tab" aria-controls="lesson-secondText" aria-selected="false">@lang("Text")</a>

            @endif

            @if($lesson->fVurl)
            <a class="nav-item nav-link" id="lesson-firstVidio-tab" data-toggle="tab" href="#lesson-firstVidio" role="tab" aria-controls="lesson-firstVidio" aria-selected="false">@lang("Vidio")</a>
            @endif

            @if($lesson->thtitle)
            
            <a class="nav-item nav-link" id="lesson-thirdText-tab" data-toggle="tab" href="#lesson-thirdText" role="tab" aria-controls="lesson-thirdText" aria-selected="false">@lang("Text")</a>
            @endif

            @if($lesson->fourthtitle)
           
            <a class="nav-item nav-link" id="lesson-fourthText-tab" data-toggle="tab" href="#lesson-fourthText" role="tab" aria-controls="lesson-fourthText" aria-selected="false">@lang("Text")</a>
            @endif
          
            @if($lesson->fifthtitle)

            <a class="nav-item nav-link" id="lesson-fifthText-tab" data-toggle="tab" href="#lesson-fifthText" role="tab" aria-controls="lesson-fifthText" aria-selected="false">@lang("Text")</a>
            @endif

            @if($lesson->sVurl)
            <a class="nav-item nav-link" id="lesson-secondVidio-tab" data-toggle="tab" href="#lesson-secondVidio" role="tab" aria-controls="lesson-secondVidio" aria-selected="false">@lang("Vidio")</a>
            @endif

            @if($lesson->sixthtitle)

            <a class="nav-item nav-link" id="lesson-sixthText-tab" data-toggle="tab" href="#lesson-sixthText" role="tab" aria-controls="lesson-sixthText" aria-selected="false">@lang("Text")</a>
            @endif

            
            @if($lesson->seventhtitle)

            <a class="nav-item nav-link" id="lesson-seventhText-tab" data-toggle="tab" href="#lesson-seventhText" role="tab" aria-controls="lesson-seventhText" aria-selected="false">@lang("Text")</a>
            @endif
            @if($lesson->tVurl)
            <a class="nav-item nav-link" id="lesson-thirdVidio-tab" data-toggle="tab" href="#lesson-thirdVidio" role="tab" aria-controls="lesson-thirdVidio" aria-selected="false">@lang("Vidio")</a>
            @endif
            
            <a class="nav-item nav-link" id="lesson-link-tab" data-toggle="tab" href="#lesson-link" role="tab" aria-controls="lesson-link" aria-selected="false">@lang("Links")</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="lesson-firstText" role="tabpanel" aria-labelledby="lesson-firstText-tab">
                    <h3 class="text-center" style="text-align: right;">{{$lesson->ftitle}}</h3>
      
                <p class="text-right">{!! $lesson->ftext !!}</p>
          </div>

          <div class="tab-pane fade" id="lesson-secondText" role="tabpanel" aria-labelledby="lesson-secondText-tab">
            <h3 class="text-center" style="text-align: right;">{{$lesson->stitle}}</h3>
      
                <p class="text-right">{!! $lesson->stext !!}</p>
        </div>


        <div class="tab-pane fade" id="lesson-firstVidio" role="tabpanel" aria-labelledby="lesson-firstVidio-tab"> 
          
            <h3 class="text-center" style="text-align: right;">{{$lesson->fVtitle}}</h3>
      
            <p class="text-right">{!! $lesson->fVtext !!}</p>

            <?php
    $url = $lesson->fVurl;
 
    if($url != null)
    {
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        $id = $matches[1] ?? '';
        
    }
    $width  = '800px';
    $height = '450px';
    
?>

   
<iframe id="ytplayer" type="text/html" style="width:100%" max-width="<?php echo $width ?>" height="<?php echo $height ?>" 
    src="https://www.youtube.com/embed/<?php echo $id ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
          </div>

          <div class="tab-pane fade" id="lesson-secondText" role="tabpanel" aria-labelledby="lesson-secondText-tab">
            <h3 class="text-center" style="text-align: right;">{{$lesson->stitle}}</h3>
      
                <p class="text-right">{!! $lesson->stext !!}</p>
        </div>


        <div class="tab-pane fade" id="lesson-thirdText" role="tabpanel" aria-labelledby="lesson-thirdText-tab">
            <h3 class="text-center" style="text-align: right;">{{$lesson->thtitle}}</h3>
      
                <p class="text-right">{!! $lesson->thtext !!}</p>
        </div>


        <div class="tab-pane fade" id="lesson-fourthText" role="tabpanel" aria-labelledby="lesson-fourthText-tab">
            <h3 class="text-center" style="text-align: right;">{{$lesson->fourthtitle}}</h3>
      
                <p class="text-right">{!! $lesson->fourthtext !!}</p>
        </div>

        <div class="tab-pane fade" id="lesson-fifthText" role="tabpanel" aria-labelledby="lesson-fifthText-tab">
            <p class="text-center" style="text-align: right;">{{$lesson->fifthtitle}}</p>
      
                <p class="text-right">{!! $lesson->fifthtext !!}</p>
        </div>
        <div class="tab-pane fade" id="lesson-secondVidio" role="tabpanel" aria-labelledby="lesson-secondVidio-tab"> 
          
            <h3 class="text-center" style="text-align: right;">{{$lesson->sVtitle}}</h3>
      
            <p class="text-right">{!! $lesson->sVtext !!}</p>

            <?php
            $url2 = $lesson->sVurl;
         
            if($url2 != null)
            {
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url2, $matches2);
                $id2  = $matches2[1] ?? '';
            
            }
            $width  = '800px';
            $height = '450px';
            
        ?>
        <iframe id="ytplayer" type="text/html" style="width:100%" max-width="<?php echo $width ?>" height="<?php echo $height ?>"
            src="https://www.youtube.com/embed/<?php echo $id2 ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
            frameborder="0" allowfullscreen></iframe>
          </div>


          

          <div class="tab-pane fade" id="lesson-sixthText" role="tabpanel" aria-labelledby="lesson-sixthText-tab">
            <p class="text-center" style="text-align: right;">{{$lesson->sixthtitle}}</p>
      
                <p class="text-right">{!! $lesson->sixthtext !!}</p>
        </div>


        <div class="tab-pane fade" id="lesson-seventhText" role="tabpanel" aria-labelledby="lesson-seventhText-tab">
            <p class="text-center" style="text-align: right;">{{$lesson->seventhtitle}}</p>
      
                <p class="text-right">{!! $lesson->seventhtext !!}</p>
        </div>


        <div class="tab-pane fade" id="lesson-thirdVidio" role="tabpanel" aria-labelledby="lesson-thirdVidio-tab"> 
          
            <h3 class="text-center" style="text-align: right;">{{$lesson->tVtitle}}</h3>
      
            <p class="text-right">{!! $lesson->tVtext !!}</p>

           
    <?php
    $url3 = $lesson->tVurl;
 
    if($url3 != null)
    {
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url3, $matches3);
        $id3  = $matches3[1] ?? '';
    
    }
    $width  = '800px';
    $height = '450px';
    
?>


<iframe id="ytplayer" type="text/html" style="width:100%" max-width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id3 ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
          </div>




   
  
  <div class="tab-pane fade" id="lesson-link" role="tabpanel" aria-labelledby="lesson-link-tab"> 
    <h2 class="text-center" style="text-align: right;"> @lang("lesson end")</h2>
     
  

    
    <div class="form-group">
        @if ($lesson->fLtitle)
        <h3>     @lang("Links")</h3>
    <h3> <a href="{{ $lesson->fLurl }}" >{!! $lesson->fLtitle !!}</a></h3>
</div> 
    @endif   

    
    <div class="form-group">
        @if ($lesson->sLtitle)
    <h3> <a href="{{ $lesson->sLurl }}" >{!! $lesson->sLtitle !!}</a></h3>
</div>
    @endif  
 

       

    <div class="form-group">
        @if ($lesson->tLtitle)
    <h3> <a href="{{ $lesson->tLurl }}" >{!! $lesson->tLtitle !!}</a></h3>
</div>

    @endif  
   
       

    <div class="form-group">
        @if ($lesson->fourthLtitle)
    <h3> <a href="{{ $lesson->fourthLurl }}" >{!! $lesson->fourthLtitle !!}</a></h3>
</div>
    @endif  
    


       
   
    <div class="form-group">
        @if ($lesson->fifthLtitle)
    <h3> <a href="{{ $lesson->fifthLurl }}" >{!! $lesson->fifthLtitle !!}</a></h3>
</div>
    @endif  
    


   

    
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