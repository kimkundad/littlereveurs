<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Linchak.com</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />



    <!-- Bootstrap Core CSS -->
    @include('layouts.inc-stylesheet')
	@yield('stylesheet')

</head>

<body>

<div class="wrapper">
@include('layouts.inc-left-slidebar')

<div class="main-panel">

@include('layouts.inc-header')
                @yield('content')

@include('layouts.inc-footer')

</div>

                <!-- /.row -->
   </div>


    <!-- /#section -->

    <!-- jQuery -->
	@include('layouts.inc-scripts')


    @yield('scripts')








</body>

</html>
