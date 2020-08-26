@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')  
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="#" ><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><span>Меню</span></li>
</ol>
<header class="bg-primary text-center py-2 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="sites">Главная</h1>
  </div>
</header>
<!-- Page Content -->
<div class="container">
  <div class="row">
  <div class="col-md-6">
  <ul class="list-group">
    <li class="list-group-item list-group-item-action active mb-2"">Dapibus ac facilisis in</li>
    <li class="list-group-item list-group-item-primary mb-3">A simple primary list group item</li>
    <li class="list-group-item list-group-item-secondary mb-3">A simple secondary list group item</li>
    <li class="list-group-item list-group-item-success mb-3">A simple success list group item</li>
    <li class="list-group-item list-group-item-danger mb-3">A simple danger list group item</li>
  </ul>
  </div>
  <div class="col-md-6">
  <ul class="list-group">
    <li class="list-group-item list-group-item-action active mb-2">Dapibus ac facilisis in</li>
    <li class="list-group-item list-group-item-primary mb-3">A simple primary list group item</li>
    <li class="list-group-item list-group-item-secondary mb-3">A simple secondary list group item</li>
    <li class="list-group-item list-group-item-success mb-3">A simple success list group item</li>
    <li class="list-group-item list-group-item-danger mb-3">A simple danger list group item</li>
  </ul>
  </div>
</div>
</div>
@endsection
