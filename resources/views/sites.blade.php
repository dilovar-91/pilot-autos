@extends('layouts.main')
@section('title', 'Список сайтов')
@section('content')  
<header class="bg-primary text-center py-3 mb-4">
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
 @endsection
