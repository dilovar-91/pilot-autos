<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Pilot Auto </div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item list-group-item-action bg-light">Главная</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Сайты</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Марки авто</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Конкуренты</a>
    @if (!Auth::guest())<a class="list-group-item list-group-item-action bg-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i>Выйти
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endif
  </div>
</div>