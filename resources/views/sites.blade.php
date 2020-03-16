@extends('layouts.main')
@section('title', 'Список сайтов')
@section('content')  
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><span><i class="fas fa-globe"></i> Сайты</span></li>
</ol>
<header class="bg-primary text-center py-2 ">
  <div class="container">
    <h1 class="font-weight-light text-white" id="sites">Список наших сайтов</h1>
  </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-xl-3 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="https://pilot-auto77.ru/" target="_blank"><img src="/uploads/images/pilot.png" class="card-img-top" style="height: 160px;" alt="..."></a>
        <div class="card-body text-center">
          <h6 class="card-title mb-0" ><a href="https://pilot-auto77.ru/" target="_blank">Пилот Авто</a></h6>          
          <p><a href="https://pilot-auto77.ru/" target="_blank">https://pilot-auto77.ru/</a></p>          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 col-6 mb-4 pr-1 pl-1">
      <div class="card border-0 shadow">
      <a href="https://autosalon77.ru/" target="_blank"><img src="/uploads/images/light.png" class="card-img-top" style="height: 160px;" alt="..."></a>
        <div class="card-body text-center">
          <h6 class="card-title mb-0" ><a href="https://autosalon77.ru/" target="_blank">Лайт Авто</a></h6>          
          <p><a href="https://autosalon77.ru/" target="_blank">https://autosalon77.ru/</a></p>          
        </div>
      </div>
    </div>
  </div>
</div>


<header class="bg-primary text-center py-2 mb-4">
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
 @endsection
