@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')  
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="sites">Список сайтов</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  
  <div class="row">
    <!-- Team Member 1 -->
    @if (isset($sites))
    @foreach($sites as $site)
    <div class="col-xl-2 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="{{$site->url}}" target="_blank"><img src="/uploads/brands/{{($site->pic !== Null ? $site->pic : 'no-image.png')}}" class="card-img-top" style="height: 100px;" alt="..."></a>
        <div class="card-body text-center">
          <h6 class="card-title mb-0" ><a href="{{$site->url}}" target="_blank">{{$site->title}}</a></h6>          
              
        </div>
      </div>
    </div>
    @endforeach
   
    @endif
    
  </div>
  <!-- /.row -->

</div>

<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="cars">Список марок</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
<div class="row">
    <!-- Team Member 1 -->
    
    @if (isset($brands))
    <?php $numOfCols = 8;?>
    
      
    @foreach($brands as $brand)
    <div class="col-xl-2 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="/brand/{{$brand->id}}"><img src="/uploads/brands/{{$brand->pic ?? 'nopic.png'}}" class="card-img-top" style="height: 100px;" alt="..."></a>
        <div class="card-body text-center">
          <p class="card-title mb-0"><a href="/brand/{{$brand->id}}">Комплектации</a></p>          
          <p class="card-title mb-0"><a href="/model/{{$brand->id}}">Моделы</a></p>          
          <p class="card-title mb-0"><a href="https://pilot-auto77.ru/auto/{{$brand->slug}}" target="_blank">Новый</a></p>      
          <p class="card-title mb-0"><a href="https://used.pilot-auto77.ru/cars?f%5Bbrand%5D={{$brand->name}}" target="_blank">Подержанный</a></p>      
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>
  <!-- /.row -->
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="competitors">Список конкурентов</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
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
  <!-- /.row -->

</div>
@endsection
