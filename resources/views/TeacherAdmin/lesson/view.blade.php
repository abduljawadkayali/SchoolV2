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
	<div align="right">
        <a href="{{ URL::previous()}}" class="btn btn-default">@lang("Back")</a>
	</div>
    <br />

    <h3>@lang('Lesson Name')- {!! $lesson->name !!}</h3>
    <br />
    <h3>@lang("Lesson Descrition")- {!! $lesson->body !!}</h3>

	<img src="{{ URL::to('/') }}/images/{{ $lesson->image }}" class="img-thumbnail" />
    <br />
    <br />
    <h3>@lang('First Text Title')- {!! $lesson->ftitle !!}</h3>
    <br />
    <h3>@lang('First Text body')- {!! $lesson->ftext !!}</h3>
    <br />
    <h3>@lang('Second Text Title')- {!! $lesson->stitle !!}</h3>
    <br />
    <h3>@lang('Second Text Body')- {!! $lesson->stext !!}</h3>
    <br />
    <h3>@lang('First Vidio Title')- {!! $lesson->fVtitle !!}</h3>
    <br />
    <h3>@lang('First Vidio Body')- {!! $lesson->fVtext !!}</h3>
    <br />
    <h3>@lang('First Vidio')-</h3> 
    
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
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?? '' ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
    <br />
    <br />


    <h3>@lang('Third Text Title')- {!! $lesson->thtitle !!}</h3>
    <br />
    <h3>@lang('Third Text Body')- {!! $lesson->thtext !!}</h3>
    <br />
    <h3>@lang('Forth Text Title')- {!! $lesson->fourthtitle !!}</h3>
    <br />
    <h3>@lang('Forth Text Body')- {!! $lesson->fourthtext !!}</h3>
    <br />
    <h3>@lang('Fifth Text Title')- {!! $lesson->fifthtitle !!}</h3>
    <br />
    <h3>@lang('Fifth Text Body')- {!! $lesson->fifthtext !!}</h3>
    <br />

    <h3>@lang('Second Vidio Title')- {!! $lesson->sVtitle !!}</h3>
    <br />
    <h3>@lang('Second Vidio Body')- {!! $lesson->sVtext !!}</h3>
    <br />
    <h3>@lang('Second Vidio')-</h3> 
    
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
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?? '' ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id2 ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
    <br />
    <br />


    <h3>@lang('Sixth Text Title')- {!! $lesson->sixthtitle !!}</h3>
    <br />
    <h3>@lang('Sixth Text Body')- {!! $lesson->sixthtext !!}</h3>
    <br />
    <h3>@lang('Seventh Text Title')- {!! $lesson->seventhtitle !!}</h3>
    <br />
    <h3>@lang('Third Vidio Title')- {!! $lesson->tVtitle !!}</h3>
    <br />
    <h3>@lang('Third Vidio Body')- {!! $lesson->tVtext !!}</h3>
    <br />

    <h3>@lang('Third Vidio')-</h3> 

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
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?? '' ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id3 ?? '' ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
    <br />
    <br />



    <h3>@lang('First Link Title')- {!! $lesson->fLtitle !!}</h3>
    <br />
    <h3> <a href="{{ $lesson->fLurl }}" >@lang("Here")</a></h3>

    <br />
    <h3>@lang('Second Link Title')- {!! $lesson->sLtitle !!}</h3>
    <br />
    <h3> <a href="{{ $lesson->sLurl }}" >@lang("Here")</a></h3>
    <br />
    <h3>@lang('Third Link Title')- {!! $lesson->tLtitle !!}</h3>
    <br />
    <h3> <a href="{{ $lesson->tLurl }}" >@lang("Here")</a></h3>
    <br />
    <h3>@lang('Foruth Link Title')- {!! $lesson->fourthLtitle !!}</h3>
    <br />
    <h3> <a href="{{ $lesson->fourthLurl }}" >@lang("Here")</a></h3>
    <br />
    <h3>@lang('Fifth Link Title')- {!! $lesson->fifthLtitle !!}</h3>
    <br />
    <h3> <a href="{{ $lesson->fifthLurl }}" >@lang("Here")</a></h3>
    <br />
    <br />
    
</div>
@endsection