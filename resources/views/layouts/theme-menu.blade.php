<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="bootstrap admin template">
      <meta name="author" content="">
      <title>Blank | Remark Admin Template</title>
      <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png')}}">
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/site.min599c.css?v4.0.2')}}">
      <!-- Plugins -->
      <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2')}}">
      <!-- Fonts -->
      <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min599c.css?v4.0.2')}}">
      <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2')}}">
      <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

      <!-- Scripts -->
      <script src="{{ asset('global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2')}}"></script>
      <script>
         Breakpoints();
      </script>
   </head>
   <body class="animsition site-navbar-small dashboard">
   
     @include('layouts.theme-topnav')
     @yield('page-content')

      <!-- Core  -->
      <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/jquery/jquery.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/popper-js/umd/popper.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/animsition/animsition.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/waves/waves.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/datatables.net/jquery.dataTablesfd53.js') }}"></script>
      <!-- Plugins -->
      <script src="{{ asset('global/vendor/switchery/switchery.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/intro-js/intro.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/screenfull/screenfull.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.2') }}"></script>
      <!-- Plugins For This Page -->
      @yield('page-plugin-scripts')
      <!-- Scripts -->
      <script src="{{ asset('global/js/State.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Component.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Base.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Config.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/Menubar.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/Sidebar.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/PageAside.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Plugin/menu.minfd53.js?v4.0.2') }}"></script>
      <!-- Config -->
      <script src="{{ asset('global/js/config/colors.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/config/tour.minfd53.js?v4.0.2') }}"></script>
      <!-- Page -->
      <script src="{{ asset('assets/js/Site.minfd53.js?v4.0.') }}"></script>
      <script src="{{ asset('global/js/Plugin/asscrollable.minfd53.js?v4.0.') }}"></script>
      <script src="{{ asset('global/js/Plugin/slidepanel.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin/switchery.minfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin/switchery.minfd53.js?v4.0.2') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <script src="{{ asset('js/common-functions.js') }}"></script>
      <script>
         
         $(document).ready(function () {
            Site.run();
         });
      </script>
      @yield('page-scripts')
   </body>
</html>