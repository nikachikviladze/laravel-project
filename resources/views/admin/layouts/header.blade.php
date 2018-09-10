<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('images/static/avatar.png')}}" alt="">{{Auth::user()->name}}
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{url('/')}}" href="javascript:;">საიტზე გადასვლა</a></li>

            <li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="fa fa-sign-out pull-right" style="line-height: 20px; border: 0; background: inherit; padding: 5px 17px 5px 25px;  width: 100%; text-align: left;">გასვლა</button>
                  </form>

            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
