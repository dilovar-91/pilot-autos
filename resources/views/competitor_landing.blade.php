@extends('layouts.main')
@section('title', 'Список сайтов')
@section('content')  
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="competitors">Список конкурентов</h1>
  </div>
</header>
<!-- Page Content -->
<div class="container">
<div class="row">
    @if (isset($competitors))
    @foreach($competitors as $competitor)
    <div class="col-xl-2 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="{{$competitor->url}}" target="_blank"><img src="/uploads/{{$competitor->pic ?? 'nopic.png'}}" class="card-img-top" style="height: 90px;" alt="..."></a>
        <div class="card-body text-center">
          <p class="card-title mb-0"><a href="{{$competitor->url}}" target="_blank">{{$competitor->title}}</a></p>          
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
@endsection
