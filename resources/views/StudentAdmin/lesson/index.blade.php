@extends('StudentAdmin.Dashbored')


@section('header')

 
@endsection
@section('main')

<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <h2><i class="fa fa-key"></i> {{__($header)
            }}</h2>
                
          </div>

        </div>
          <hr>
          <div class="row">
          @foreach ($data as $row)
          <a href="{{$row->route}}">
          <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ URL::to('/') }}/images/{{ $row->image }}"  alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $row->name}}</h5>
              </a>
                <p class="card-text">
                  {!! $row->description!!}</p>
              </div>
              <div class="card-body">
                <a href="{{$row->book}}" class="card-link">@lang("Book")</a>
                <br>
                <a href="{{$row->route}}" class="card-link">@lang("lessons")</a>
            
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</div>

@endsection