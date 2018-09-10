<div class="header-area header-absolute header-transparent">
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <!-- Header Top -->
                <div class="header-top-wrapper fix">
                    <div class="header-top-left text-left col-sm-6">
                        <p><i class="icofont icofont-envelope"></i><span>info@pipidrive.ge</span></p>
                        <p><i class="icofont icofont-ui-call"></i><span>+995 598 88 88 88</span></p>
                    </div>
                    <div class="header-top-right text-right col-sm-6">
                        @guest

                            <a class="btn user" href="{{ route('login') }}">ავტორიზაცია</a>
                            <a class="btn user" href="{{ route('register') }}">რეგისტრაცია</a>
                        @else
                            {{-- <li class="nav-item dropdown"> --}}
                                <a id="navbarDropdown" class="user btn" href="{{ url('home') }}">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            {{-- </li> --}}
                        @endguest
                        {{-- <p><i class="icofont icofont-clock-time"></i><span>ორშ - პარ : 09:00 - 20:00</span></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky">
        <div class="container">
            <div class="row">
                <!-- Header Bottom -->
                <div class="col-xs-12">
                    <div class="navbar-header">
                        <!-- <a href="index.html" class="logo navbar-brand"><img id="logo_img" src="img/logo/color-1.png" alt="logo" /></a> -->
                    </div>
                    <div class="main-menu mean-menu float-right">
                        <nav>
                            <ul>
                                <li class="@if(Request::path() == '/') active @endif"><a href="{{ url('/') }}">მთავარი</a></li>
                                <li><a href="{{ url('exam?group=2') }}">გამოცდა</a></li>
                                <li class="@if(Request::path() == 'study') active @endif"><a href="{{ url('study') }}">სწავლება</a></li>
                                <li><a href="#">ინფორმაცია<i class="icofont icofont-simple-right"></i></a>
                                    <ul>
                                        <li><a href="{{ url('categories') }}">კატეგორიები</a></li>
                                        <li><a href="{{ url('theorea') }}">თეორიული გამოცდა</a></li>
                                        <li><a href="{{ url('practical') }}">პრაქტიკული გამოცდა</a></li>
                                        <li><a href="{{ url('signs') }}">საგზაო ნიშნები</a></li>
                                        <li><a href="{{ url('regulation') }}">მარეგულირებლის სიგნალები</a></li>
                                        <li><a href="{{ url('statistic') }}">სტატისტიკა</a></li>
                                    </ul>
                                </li>
                                <li class="@if(Request::path() == 'gallery') active @endif"><a href="{{ url('gallery') }}">გალერეა</a></li>
                                <li class="@if(Request::path() == 'blog') active @endif"><a href="{{ url('blog') }}">ბლოგი</a></li>
                                <li class="@if(Request::path() == 'contact') active @endif"><a href="{{ url('contact') }}">კონტაქტი</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>