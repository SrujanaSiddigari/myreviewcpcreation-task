<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="bootstrap material admin template">
      <meta name="author" content="">
      <title>Customer | Invoygo Template</title>
      <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/site.min599c.css?v4.0.2') }}">
      <!-- Skin tools (demo site only) -->
      <link rel="stylesheet" href="{{ asset('global/css/skintools.min599c.css?v4.0.2') }}">
         <script src="{{ asset('assets/js/Plugin/skintools.min599c.js?v4.0.2') }}"></script>
      <!-- Plugins -->
      <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/vendor/waves/waves.min599c.css?v4.0.2') }}">
      <!-- <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' >
      <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css' > -->
      <!-- Plugins For This Page -->
      @yield('page-plugin-styles')
      <!-- Fonts -->
      <link rel="stylesheet" href="{{ asset('global/fonts/material-design/material-design.min599c.css?v4.0.2') }}">
      <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2') }}">
      <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' >
      <!-- <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' >
      <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css' > -->
      <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/login-v3.min599c.css') }}">
      <!--[if lt IE 9]>
      <script src="{{ asset('global/vendor/html5shiv/html5shiv.min.js?v4.0.2') }}"></script>
      <![endif]-->
      <!--[if lt IE 10]>
      <script src="{{ asset('global/vendor/media-match/media.match.min.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/respond/respond.min.js?v4.0.2') }}"></script>
      <![endif]-->
      <!-- Scripts -->
      <script src="{{ asset('global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2') }}"></script>
      <script>
         Breakpoints();
      </script>
   </head>
     @yield('page-content')

      <!-- Core  -->
      <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/waves/waves.min599c.js?v4.0.2') }}"></script>
      <!-- Plugins -->
      <script src="{{ asset('global/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/intro-js/intro.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/screenfull/screenfull.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>
      <!-- Plugins For This Page -->
      @yield('page-plugin-scripts')
      <!-- Scripts -->
      <script src="{{ asset('global/js/State.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Component.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Base.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Config.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/Menubar.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/Sidebar.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Section/PageAside.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/Plugin/menu.min599c.js?v4.0.2') }}"></script>
      <!-- Config -->
      <script src="{{ asset('global/js/config/colors.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('assets/js/config/tour.min599c.js?v4.0.2') }}"></script>
      <!-- Page -->
      <script src="{{ asset('assets/js/Site.min599c.js?v4.0.') }}"></script>
      <script src="{{ asset('global/js/Plugin/material.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin/asscrollable.min599c.js?v4.0.') }}"></script>
      <script src="{{ asset('global/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <script src="{{ asset('js/common-function.js') }}"></script>
      <script>
         $(document).ready(function () {
             Site.run();
         });
      </script>
      @yield('page-scripts')
   </body>
</html>