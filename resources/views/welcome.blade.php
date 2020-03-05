@extends('layouts.app')
@section('title', 'Список автомобилей')
@section('content')  
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Список автомобилей {{$brand->name ?? ''}} </h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    @if (isset($brand->cars))
    @foreach($brand->cars as $car)
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
      <a href="/detail/{{$car->id}}"><img src="/uploads/{{$car->pic ?? nopic.png}}" class="card-img-top" style="height: 190px;" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><a href="/detail/{{$car->id}}">{{$car->name}}</a></h5>          
        </div>
      </div>
    </div>
    @endforeach
   
    @endif
    
  </div>
  <!-- /.row -->

</div>
@endsection
