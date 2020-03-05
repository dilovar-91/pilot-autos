@extends('layouts.app')
@section('title', 'Список автомобилей')
@section('content')  
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Список сайтов</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    @if (isset($sites))
    @foreach($sites as $site)
    <div class="col-xl-2 col-md-3 mb-4">
      <div class="card border-0 shadow">
      <a href="{{$site->url}}" target="_blank"><img src="/uploads/brands/{{$site->pic ?? no-image.png}}" class="card-img-top" style="height: 110px;" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><a href="{{$site->url}}" target="_blank">{{$site->title}}</a></h5>          
          <p><a href="{{$site->url}}" target="_blank">{{$site->url}}</a></p>          
        </div>
      </div>
    </div>
    @endforeach
   
    @endif
    
  </div>
  <!-- /.row -->

</div>

<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Список марок</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    @if (isset($brands))
    @foreach($brands as $brand)
    <div class="col-xl-2 col-md-3 mb-4">
      <div class="card border-0 shadow">
      <a href="/brand/{{$brand->id}}"><img src="/uploads/brands/{{$brand->pic ?? nopic.png}}" class="card-img-top" style="height: 120px;" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><a href="/brand/{{$brand->id}}">{{$brand->name}}</a></h5>          
        </div>
      </div>
    </div>
    @endforeach
   
    @endif
    
  </div>
  <!-- /.row -->

</div>
@endsection
