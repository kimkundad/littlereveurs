<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="">


    <title> @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="googlebot" content="ALL">

    @section('ogtags')
      @include('layouts-front.og_tags')
    @show



    <link rel="shortcut icon" type="image/png" href="{{url('assets/font-end/image/SiriSpace-icon-x.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('assets/font-end/image/SiriSpace-icon-x.png')}}">

    @include('layouts-front.inc-style')
    @yield('stylesheet')

</head>
<body id="app-layout">



     @include('layouts-front.inc-header')






@yield('content')










 @include('layouts-front.inc-footer')

    <!-- JavaScripts -->
    @include('layouts-front.inc-script')
    @yield('scripts')


        </body>
</html>
