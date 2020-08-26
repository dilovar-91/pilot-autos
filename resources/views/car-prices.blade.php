@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569818907/jquery.table2excel.min.js"></script>
<script src="/js/jquery.doubleScroll.js"></script>
<script >
$(function() {
$("#exporttable").click(function(e){
var table = $("#htmltable");
if(table && table.length){
$(table).table2excel({
exclude: ".noExl",
name: "Excel Document Name",
filename: "CarList" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
fileext: ".xls",
exclude_img: true,
exclude_links: true,
exclude_inputs: true,
preserveColors: false
});
}
});

});
$(document).ready(function(){
  $('.table-responsive').doubleScroll();
});
</script>
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><a href="/cars"><i class="text-white fas fa-car"></i> Прайслист автомобилей</a></li>
</ol>  
<header class="bg-primary text-center py-2 mb-1 row">
<div class="container-fluid row">
  <div class="col-md-8">
  
    <h1 class="font-weight-light text-white">Прайслист автомобилей</h1>
  
  </div>
  <div class="col-md-4 text-right"><button id="exporttable" class="btn btn-outline-success"><i class="text-white fas fa-2x fa-file-excel"></i></button>  </div>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
  @if (isset($cars))
  <div class="table-responsive">
  
  <table class="table table-bordered text-center table-striped" id="htmltable">
  <thead>
    <tr>
      <th scope="col">№</th>         
      <th scope="col">Марка</th>
      <th scope="col">Модель</th>     
      <th scope="col" class="bg-primary text-white font-weight-bold">Мин. цена</th>
      <th scope="col">Пилот</th>
      <th scope="col">Лайт Авто</th>
      <th scope="col">Мас Моторс</th>
      <th scope="col">Центральный</th>
      <th scope="col">Ria</th>
      <th scope="col">Altera</th>
      <th scope="col">ИНКОМ</th>
      <th scope="col">cargiant.ru</th>
      <th scope="col">carso.ru</th>
      <th scope="col">auto-official.ru</th>
      <th scope="col">autocentr-khimki.ru</th>
      <th scope="col">a-mm.ru</th>
      <th scope="col">Фейр Авто</th>
      <th scope="col">Ирбис</th>
      <th scope="col">vitaauto.ru</th>      
      <th scope="col">center-avto.ru</th>
      <th scope="col">kit-avto.com</th>
      <th scope="col">ctc-motors.com</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=0; ?>
    @foreach($cars as $row)<tr>
      <th scope="row">{{(++$i)}}</th> 
      <td>{{$row->mark ?? ''}}</td>
      <td>{{$row->model ?? ''}}</td>         
      <td class="bg-primary text-white font-weight-bold">{{ min($row->price_pilot, $row->price_light, $row->price_masmotors, $row->price_centralniy, $row->price_ria, $row->price_altera, $row->price_incom, $row->price_cargiant, $row->price_carso, $row->price_autoofficial, $row->price_autocentrkhimki, $row->price_amm, $row->price_fayer, $row->price_irbis, $row->price_vita, $row->price_centravto, $row->price_kitavto, $row->price_ctc)}}</td>
      <td>{{$row->price_pilot}}</td>
      <td>{{$row->price_light}}</td>
      <td>{{$row->price_masmotors}}</td>
      <td>{{$row->price_centralniy}}</td>
      <td>{{$row->price_ria}}</td>
      <td>{{$row->price_altera}}</td>
      <td>{{$row->price_incom}}</td>
      <td>{{$row->price_cargiant}}</td>
      <td>{{$row->price_carso}}</td>
      <td>{{$row->price_autoofficial}}</td>
      <td>{{$row->price_autocentrkhimki}}</td>
      <td>{{$row->price_amm}}</td>
      <td>{{$row->price_fayer}}</td>
      <td>{{$row->price_irbis}}</td>
      <td>{{$row->price_vita}}</td>
      <td>{{$row->price_centravto}}</td>
      <td>{{$row->price_kitavto}}</td>
      <td>{{$row->price_ctc}}</td>      
    </tr>@endforeach
  </tbody>
</table>
</div>
@endif

</div>
</div>

@endsection
