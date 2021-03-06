@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class=""><a href="/competitors"><i class="fas fa-iphone"></i> Моделы</a></li>
  <li class="ml-0 active"><span><i class="fas fa-car"></i> {{$brand->name ?? ''}}</span></li>
</ol>  
<header class="bg-primary text-center py-2 mb-1">
  <div class="container">
    <h1 class="font-weight-light text-white">Моделы авто {{$brand->name ?? ''}}</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
  @if (isset($brand))
  <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">Модель</th>
      <th scope="col">Название</th>
      <th scope="col">Сборка</th>
      <th scope="col">Комментарии</th>
      <th scope="col">Внешние источники</th>
    </tr>
  </thead>
  <tbody>
    @foreach($brand->models as $model)<tr>
      <th scope="row"><a href="{{$model->url}}" class="img-hover-zoom" target="_blank"><img src="/uploads/{{$model->pic}}" style="width: 135px;"/></a></th>
      <td><h5><a href="{{$model->official_site}}" class="model" target="_blank">{{$model->name}}</a></h5></td>
      <td>{{$model->assembly}}</td>
      <td>{{$model->comments}}</td>
      <td><a href="{{$model->external_link}}" target="_blank">Посетить</a></td>
    </tr>@endforeach
  </tbody>
</table>
  

@endif
</div>
</div>
@endsection
