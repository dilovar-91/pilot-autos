@extends('layouts.main')
@section('title', 'Список автомобилей')
@section('content')
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569818907/jquery.table2excel.min.js"></script>
<script src="/js/jquery.doubleScroll.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap4.min.js"></script>
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
$(document).ready(function () {
$('#htmltable').DataTable({
"scrollX": true,
"scrollY": '60vh',
"language":{
  "processing": "Подождите...",
  "search": "Поиск:",
  "lengthMenu": "Показать _MENU_ записей",
  "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
  "infoEmpty": "Записи с 0 до 0 из 0 записей",
  "infoFiltered": "(отфильтровано из _MAX_ записей)",
  "infoPostFix": "",
  "loadingRecords": "Загрузка записей...",
  "zeroRecords": "Записи отсутствуют.",
  "emptyTable": "В таблице отсутствуют данные",
  "paginate": {
    "first": "Первая",
    "previous": "Предыдущая",
    "next": "Следующая",
    "last": "Последняя"
  },
  "aria": {
    "sortAscending": ": активировать для сортировки столбца по возрастанию",
    "sortDescending": ": активировать для сортировки столбца по убыванию"
  },
  "select": {
    "rows": {
      "_": "Выбрано записей: %d",
      "0": "Кликните по записи для выбора",
      "1": "Выбрана одна запись"
    }
  }
},
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<ol class="breadcrumb breadcrumb-arrow ml-0 pr-0 mb-0">
  <li class=""><a href="/"><i class="fa fa-fw fa-home"></i></a></li>
  <li class="ml-0 active"><a href="/cars"><i class="text-white fas fa-car"></i> Прайслист автомобилей</a></li>
</ol>  
<header class="bg-primary text-center py-0 mb-0 row">
<div class="container-fluid row">
  <div class="col-md-8">  
    <h1 class="font-weight-light text-white h3 mb-0">Прайслист автомобилей</h1>  
  </div>
  <div class="col-md-4 text-right"><button id="exporttable" class="btn btn-outline-success"><i class="text-white fas fa-2x fa-file-excel"></i></button>  </div>
  </div>
</header>

<!-- Page Content -->
<div class="container-fluid">
  <div class="row">
  @if (isset($cars))
  <div class="table-responsive ml-2 mr-2">
  
  <table class="table table-bordered text-center table-striped " id="htmltable" data-page-length='100'>
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
      <th scope="col">autocentr-khimki.ru</th>      
      <th scope="col">Фейр Авто</th>     
      <th scope="col">vitaauto.ru</th>      
      <th scope="col">center-avto.ru</th>
      <th scope="col">kit-avto.com</th>
      <th scope="col">ctc-motors.com</th>
    </tr>
  </thead>
  <tbody style="height: 10px !important; overflow: scroll;">
  <?php $i=0; ?>
    @foreach($cars as $row)<tr>
      <th scope="row">{{(++$i)}}</th> 
      <td>{{$row->mark ?? ''}}</td>
      <td>{{$row->model ?? ''}}</td>   
      <?php    $min = min(array_filter(array($row->price_pilot ? : PHP_INT_MAX , $row->price_light, $row->price_masmotors, $row->price_centralniy, $row->price_ria, $row->price_altera, $row->price_incom, $row->price_cargiant, $row->price_carso, $row->price_autocentrkhimki, $row->price_fayer, $row->price_vita, $row->price_centravto, $row->price_kitavto, $row->price_ctc)));?>
      <td class="bg-primary text-white font-weight-bold"><?php echo ($min === PHP_INT_MAX ? " " : $min) ?></td>
      <td>{{$row->price_pilot}}</td>
      <td>{{$row->price_light}}</td>
      <td>{{$row->price_masmotors}}</td>
      <td>{{$row->price_centralniy}}</td>
      <td>{{$row->price_ria}}</td>
      <td>{{$row->price_altera}}</td>
      <td>{{$row->price_incom}}</td>
      <td>{{$row->price_cargiant}}</td>
      <td>{{$row->price_carso}}</td>     
      <td>{{$row->price_autocentrkhimki}}</td>     
      <td>{{$row->price_fayer}}</td>      
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

<style>
.htmltablewrapper {
max-width: 600px;
margin: 0 auto;
}
#htmltable th, td {
white-space: nowrap;
}
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style>

@endsection
