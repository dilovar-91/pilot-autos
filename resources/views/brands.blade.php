@extends('layouts.main')
@section('title', 'Список сайтов')
@section('content')  
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><span><i class="fas fa-car-alt"></i> Марки авто</span></li>
</ol>
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="cars">Список марок</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
<div class="row">
   
    @if (isset($brands))
    @foreach($brands as $brand)
    <div class="col-xl-2 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="/brand/{{$brand->id}}"><img src="/uploads/{{$brand->pic ?? 'nopic.png'}}" class="card-img-top" style="height: 100px;" alt="..."></a>
        <div class="card-body text-center">
          <!--<p class="card-title mb-0"><a href="/brand/{{$brand->id}}">Комплектации</a></p> -->        
          <p class="card-title mb-0"><a href="/model/{{$brand->id}}">Модели</a></p>          
          @if($brand->slug == 'vaz')<p class="card-title mb-0"><a href="https://pilot-auto77.ru/auto/lada" target="_blank">Новый</a></p>      
          @else<p class="card-title mb-0"><a href="https://pilot-auto77.ru/auto/{{$brand->slug}}" target="_blank">Новый</a></p>@endif      
          @if($brand->slug == 'vaz')<p class="card-title mb-0"><a href="https://autosalon77.ru/s-probegom/lada-vaz/" target="_blank">Подержанный</a></p>
          @else<p class="card-title mb-0"><a href="https://autosalon77.ru/s-probegom/{{$brand->slug}}/" target="_blank">Подержанный</a></p>@endif
          @if($brand->slug == 'ssangyong')<p class="card-title mb-0"><a href="https://auto.ru/diler-oficialniy/cars/all/pilot_avto_changan_moskva/ssang_yong/?sort=fresh_relevance_1-desc" target="_blank">Авто.ру</a></p>       
          @else<p class="card-title mb-0"><a href="https://auto.ru/diler-oficialniy/cars/all/pilot_avto_changan_moskva/{{$brand->slug}}/?sort=fresh_relevance_1-desc" target="_blank">Авто.ру</a></p> @endif      
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
@endsection
