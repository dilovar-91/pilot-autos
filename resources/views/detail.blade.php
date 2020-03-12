@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')  
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">{{$carinfo->name ?? ''}}</h1>
  </div>
</header>
<!-- Page Content -->
<div class="container">
  <div class="row">
  @if (isset($carinfo))
  <div class="col-md-3 mr-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/uploads/{{$carinfo->pic ?? 'nopic.png'}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{$carinfo->decription ?? ''}}</p>
  </div>
</div>
  </div>
  <div class="col-md-8">
  <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Комплектация</th>
      <th scope="col">Коробка</th>
      <th scope="col">Цена</th>
      <th scope="col">Цена в кредит</th>
    </tr>
  </thead>
  <tbody>
  @if (isset($carinfo->complectations) )
  @foreach($carinfo->complectations as $str)  
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$str->title}}</td>
      <td>{{$str->type->name ?? ''}}</td>
      <td><span class="badge badge-danger text-lg ">{{number_format($str->price, 0, ',', ' ') ?? ''}} руб.</span></td>
      <td><span class="badge badge-primary">{{number_format($str->price_credit, 0, ',', ' ') ?? ''}} руб.</span></td>
    </tr>  
  @endforeach
  @endif
    
  </tbody>
</table>
</div>
@endif
</div>
</div>
@endsection
