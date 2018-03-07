<nav class="navbar navbar-default navbar-static-top visible-sm visible-xs">
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





              <li><a href="{{url('mascot')}}"><i class="fa fa-smile-o"></i> ชุดมาสคอต</a></li>
                <li><a href="{{url('piggy_totoro')}}"><i class="fa fa-bomb"></i> ออมสิน โทโทโร่</a></li>

                <li><a href="{{url('lamp_totoro')}}"><i class="fa fa-binoculars "></i> โคมไฟ โทโทโร่</a></li>
                  <li><a href="{{url('totoro_dolls')}}"><i class="fa fa-bullseye"></i> ตุ๊กตา ตัวใหญ่</a></li>

                @if (Auth::guest())
                    <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-lock"></i> Register</a></li>
                @else

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          <i class="fa fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
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
<style>
.header {
    margin-left: 0;
    margin-right: 0;
}
.logo-container {
    margin: 0 auto;
    margin-bottom: 10px;
}
@media screen and (min-width:768px){
    .navbar-brand-centered {
        position: absolute;
        left: 50%;
        display: block;
        width: 160px;
        text-align: center;
        background-color: #fff;
    }
    .navbar>.container .navbar-brand-centered,
    .navbar>.container-fluid .navbar-brand-centered {
        margin-left: -80px;
    }
}
</style>
<nav class=" hidden-sm hidden-xs">
    <div class="container">

    <!--  <div class="header header-primary text-center">
                      <div class="logo-container">
                          <img src="{{url('assets/img/logo_website.jpg')}}" alt="">
                      </div>
      </div> -->

      <nav class="navbar navbar-default" role="navigation" style="min-height: 170px; border-color: #ffffff;">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

		      <div class="navbar-brand navbar-brand-centered">
            <div class="logo-container">
              <a href="{{url('/')}}">
                <img src="{{url('assets/img/logo_website.jpg')}}" alt="">
              </a>
            </div>
        </div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">

		        <li><a href="{{url('mascot')}}"><i class="fa fa-smile-o"></i> ชุดมาสคอต <br>
              <img src="{{url('assets/img/Cartoon-1.png')}}" alt="" style="margin-top: 14px; width: 100px;"></a>
            </li>

		        <li><a href="{{url('piggy_totoro')}}"><i class="fa fa-bomb"></i> ออมสิน โทโทโร่ <br>
              <img src="{{url('assets/img/Cartoon-2.png')}}" alt="" style="margin-top: 14px; width: 100px;"></a>
            </li>
		        <li><a href="{{url('lamp_totoro')}}"><i class="fa fa-binoculars "></i> โคมไฟ โทโทโร่ <br>
              <img src="{{url('assets/img/Cartoon-3.png')}}" alt="" style="margin-top: 14px; width: 100px;"></a>
            </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="{{url('totoro_dolls')}}"><i class="fa fa-bullseye"></i> ตุ๊กตา ตัวใหญ่ <br>
              <img src="{{url('assets/img/Cartoon-4.png')}}" alt="" style="margin-top: 14px; width: 100px;">
            </a></li>




            @if (Auth::guest())
                <li><a href="{{url('login')}}"><i class="fa fa-user"></i> Login <br>
                  <img src="{{url('assets/img/Cartoon-5.png')}}" alt="" style="margin-top: 14px; width: 100px;">
                </a></li>
                <li><a href="{{url('register')}}"><i class="fa fa-lock"></i> Register<br>
                  <img src="{{url('assets/img/Cartoon-6.png')}}" alt="" style="margin-top: 14px; width: 100px;">
                </a></li>
            @else

            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <i class="fa fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">

                        <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif



		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

    <hr style="margin-top: 10px; margin-bottom: 10px;">


    </div>
</nav>
