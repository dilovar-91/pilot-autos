<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Pilot Auto </div>
  <div class="list-group list-group-flush">
    <a href="/" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Главная</a>
    <a href="/sites" class="list-group-item list-group-item-action bg-light"><i class="fas fa-globe"></i> Сайты</a>
    <a href="/brands" class="list-group-item list-group-item-action bg-light"><i class="fas fa-car-alt"></i> Марки авто</a>
    <a href="/competitors" class="list-group-item list-group-item-action bg-light"><i class="fas fa-compress-alt"></i> Конкуренты</a>
    <a href="/landings" class="list-group-item list-group-item-action bg-light"><i class="fas fa-globe-asia"></i> Посадочные сайты</a>
    <a href="https://auto.ru/diler-oficialniy/cars/all/pilot_avto_changan_moskva/?from=dealer-listing-list" target="_blank" class="list-group-item list-group-item-action bg-light"><i class="fas fa-car-side"></i> Авто.ру</a>
    <a href="https://fssprus.ru/iss/IP" target="_blank" class="list-group-item list-group-item-action bg-light"><i class="fas fa-gavel"></i>Приставы онлайн</a>
    @if (!Auth::guest())<a class="list-group-item list-group-item-action bg-light" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Выйти</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endif
  </div>
</div>