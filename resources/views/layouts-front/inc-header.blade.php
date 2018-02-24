<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('assets/img/logo_website.jpg')}}" class="hidden-sm hidden-xs" height="145" title="logo">
                <img src="{{url('assets/img/logo_1.png')}}" class="visible-sm visible-xs" height="45" title="logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">



            <ul class="nav navbar-nav navbar-right">





              <li><a href="{{url('mascot')}}"><i class="fa fa-paper-plane "></i> ชุดมาสคอต</a></li>
                <li><a href="{{url('piggy_totoro')}}"><i class="fa fa-bullseye"></i> ออมสิน โทโทโร่</a></li>

                <li><a href="{{url('lamp_totoro')}}"><i class="fa fa-paper-plane "></i> โคมไฟ โทโทโร่</a></li>
                  <li><a href="{{url('totoro_dolls')}}"><i class="fa fa-bullseye"></i> ตุ๊กตา ตัวใหญ่</a></li>

                @if (Auth::guest())
                    <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-lock"></i> Register</a></li>
                @else

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
