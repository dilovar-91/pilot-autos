@extends('layouts.main')
@section('title', 'Список сайтов')
@section('content') 
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><span><i class="fas fa-compress-alt"></i> Конкуренты</span></li>
</ol>
<header class="bg-primary text-center py-3 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white" id="competitors">Сайти конкурентов</h1>
  </div>
</header>
<!-- Page Content -->
<div class="container">
<div class="row">
  <div class="col-md-6">
  <ul class="list-group pr-0 pl-0">
  <a href="/competitor_site" class="btn btn-primary btn-lg active">
    Основные сайты
  </a>
  </ul>
  </div>
  <div class="col-md-6">
  <ul class="list-group">
  <a href="/competitor_landing" class="btn btn-primary btn-lg active">
    Лендинги
  </a>
  </ul>
  </div>
</div>
</div>
@endsection
