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

     <script src="{{asset("assets/js/jquery.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>

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
     <li><a class="logout" href="{{ url('/auth/logout') }}">Logout</a></li>
    </ul>
   </div>
   </header>

   

  <aside>
   <div id="sidebar"  class="nav-collapse ">
    <ul class="sidebar-menu" id="nav-accordion">
     <p class="centered">
      <a href="profile.html">
      <img src="{{ asset("assets/img/ui-sam.jpg") }}" class="img-circle" width="60"></a><br><br>
      <span class="mt margin0">
        Suster

      </span>
     </p>

     <li class="mt margin0">
      <a href="{{ url("/pasien") }}"><i class="fa fa-plus-square"></i>
       <span>Daftar Rawat Inap</span>
      </a>
     </li>
     
     <li class="mt margin0">
      <a href="{{url("/ruangan")}}"><i class="fa fa-list-alt"></i>
       <span>Daftar Ruangan</span>
      </a>
     </li>
     <li class="mt margin0"><hr></li>
     <li class="mt margin0">
      <a href="{{url("/pembayaran")}}"><i class="fa fa-credit-card"></i>
       <span>Pembayaran</span>
      </a>
     </li>
     
     <li class="mt margin0">
      <a href="{{url("/obat")}}"><i class="fa fa-columns"></i>
       <span>Rekapitulasi Obat</span>
      </a>
     </li>
     
    </ul>
   
   </div>
  </aside>

  <section id="main-content">
   <section class="wrapper site-min-height">
    @yield('content')
   </section>
  </section>
 </section>
</body>
</html>