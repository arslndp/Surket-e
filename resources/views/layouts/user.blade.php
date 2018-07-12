<?php $basedir = "http://127.0.0.1:8000"; ?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 1.0
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Sekre-E</title>

  <!-- Favicons-->
  <link rel="icon" href="{{ $basedir }}/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ $basedir }}/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="{{ $basedir }}/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


     <link href="{{ $basedir }}/style.css" rel="stylesheet">
    <link href="{{ $basedir }}/js/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
      <link href="{{ $basedir }}/css/bootstrap.css" rel="stylesheet">
  <link href="{{ $basedir }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ $basedir }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{ $basedir }}/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ $basedir }}/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ $basedir }}/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<style>
.white{
    background: white;
    color:black;
}
.color-white
{
    color:black;
}
footer{
    flex: 1;
    position: fixed;
    z-index: 111;
    bottom: 0;
    width: 100%;
  }
.btn-foot
{
    color: black;
}
</style>
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan white">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1" style='color:black;'> Sekre-E </a> <span class="logo-text">PakRT</h1>
                    <ul class="right">

                        <!-- Dropdown Trigger -->                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
              @if(Auth::check())
              <li class="user-details cyan darken-2">
                  <div class="row">
                      <div class="col col s4 m4 l4">
                          <img src="https://images.cdn2.stockunlimited.net/clipart/user-icon_1598864.jpg" alt="" class="circle responsive-img valign profile-image">
                      </div>
                      <div class="col col s8 m8 l8">
                          <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="/admin/logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                              </li>
                          </ul>
                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                          <p class="user-roal">Admin</p>
                      </div>
                  </div>
              </li>
              <li class="bold"><a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
              </li>
              <li class="bold"><a href="/persetujuan" class="waves-effect waves-cyan"><i class="mdi-action-description"></i> Persetujuan</a>
               <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-announcement"></i>Info</a>
                          <div class="collapsible-body">
                             <ul>                                        
                                  <li><a href="/admin/info/buat"><ion-icon name="ios-create"></ion-icon> Buat Info</a></li>
                                  <li><a href="/admin/info/list"><ion-icon name="md-eye"></ion-icon> Lihat Info</a></li>

          </ul>
                @endif
              @if(!(Session::get('nik') == "" ))
                <li class="user-details cyan darken-2">
                  <div class="row">
                      <div class="col col s8 m8 l8">
                          <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                              </li>
                      </div>
                  </div>
                </li>
                <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
              </li>
                <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Surat keterangan</a>
                          <div class="collapsible-body">
                                 <ul>                                        
                                  <li><a href="/suket/ktp"><ion-icon name="md-card"></ion-icon> KTP</a></li>
                                  <li><a href="suratkematian.html"><ion-icon name="md-finger-print"></ion-icon> Kematian</a></li>
                                  <li><a href="suratusaha.html"><ion-icon name="md-appstore"></ion-icon> Izin Buka Usaha</a></li>
                                  <li><a href="suratkeramaiaan.html"><ion-icon name="md-microphone"></ion-icon> Izin Keramaiaan</a></li>
                                  <li><a href="suratkk.html"><ion-icon name="md-body"></ion-icon> Kartu Keluarga</a></li>
                                  <li><a href="surattidakmampu.html"><ion-icon name="md-pie"></ion-icon> Ket Tidak Mampu</a></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                </li>
                <li>
                  <a href="/logOutKtp"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                </li>
              @else

              @endif
             
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2" style="background: white;"><i class="mdi-navigation-menu" style="color:black"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
  
        <!--breadcrumbs end-->
        

        <!--start container-->
        @yield('content')
           
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
    
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  @if(Session::get('nik') == '')
  <!-- START FOOTER -->
  <footer class="page-footer" style='background:#fff'>
    <div class="footer-copyright">
      <div class="container">
      <div class="col s12 m8 l9">
            <div class="row">
            
      </div>
    </div>
    </div>
  </footer>
  <!-- END FOOTER -->
  @else
  <!-- START FOOTER -->
   <footer class="page-footer" style='background:#fff'>
    <div class="footer-copyright">
      <div class="container">
      <div class="col s12 m8 l9">
            <div class="row">
              <div style="margin-left: 50px;">
                  <div class="col s3"><a href="/" class='waves-effect waves-cyan btn-foot'><ion-icon name="home"></ion-icon></a></div>
          <div class="col s3"><a href="/suket/waitinglist" class="waves-effect waves-cyan btn-foot"><ion-icon name="list"></ion-icon></a></div>
          <div class="col s3"><a href="/suket/accept" class="waves-effect waves-cyan btn-foot"><ion-icon name="checkmark-circle-outline"></ion-icon></a></div>
          <div class="col s3"><a href="/info/list" class="waves-effect waves-cyan btn-foot"><ion-icon name="ios-megaphone"></ion-icon></a></div>
      </div>
    </div>
    </div>
  </footer>
  <!-- END FOOTER -->
  @endif



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ $basedir }}/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ $basedir }}/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="{{ $basedir }}/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ $basedir }}/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ $basedir }}/js/plugins/chartist-js/chartist.min.js"></script>   
    <script src="{{ $basedir }}/js/pages/forms/basic-form-elements.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ $basedir }}/js/plugins.js"></script>
    <!-- ionicons - icon for ios style bro -->
    <script src="https://unpkg.com/ionicons@4.2.1/dist/ionicons.js"></script>

</body>

</html>