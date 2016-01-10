<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Opik sutisna">

    <title>Aplikasi Rawat Inap</title>
        
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset("assets/font-awesome/css/font-awesome.css")}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/style-resposive.css")}}" rel="stylesheet">

  <style>
   .margin0{
    margin: 0;
    padding: 0;
   }
  </style>
  </head>
<body>
 <section id="container" >
  <header class="header black-bg">
   <!-- BURGER -->
   <div class="sidebar-toggle-box">
       <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
   </div>
   <!-- LOGO -->
   <a href="index.html" class="logo">Rawat Inap</a>
   <!-- LOGOUT -->
   <div class="top-menu">
    <ul class="nav pull-right top-menu">
    	@if (Auth::guest())
    	<li><a class="logout" href="{{ url('/auth/register') }}">Register</a></li>
    	<li><a class="logout" href="{{ url('/auth/login') }}">Logout</a></li>
		@else
     	<li><a class="logout" href="{{ url('/auth/logout') }}">Logout</a></li>
    </ul>
    @endif
   </div>
   </header>
  

  
  <section id="main-content">
   <section class="wrapper site-min-height">
    @yield('content')
   </section>
  </section>
 </section>
</body>
</html>