@extends('layouts.main')
@section('title', 'Список лендингов')
@section('content')  
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="sites">Список лендингов</h1>
  </div>
</header>
<div class="container">
  <div class="row">
    @if (isset($landings))
    @foreach($landings as $site)
    <div class="col-xl-2 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="{{$site->url}}" target="_blank"><img src="/uploads/brands/{{($site->pic !== Null ? $site->pic : 'no-image.png')}}" class="card-img-top" style="height: 100px;" alt="..."></a>
        <div class="card-body text-center">
          <h6 class="card-title mb-0" ><a href="{{$site->url}}" target="_blank">{{$site->title}}</a></h6>          
          <p><a href="{{$site->url}}" target="_blank">{{$site->url}}</a></p>          
        </div>
      </div>
    </div>
    @endforeach
    @endif
    </div>
</div>
 @endsection
