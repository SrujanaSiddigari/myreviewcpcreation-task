<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="description" content="bootstrap admin template">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
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
   <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
   <!-- <link rel="stylesheet" href="{{ asset('vendor/dropify/dropify.min.css?v4.0.2')}}"> -->
   <!--Datepicker-->
   <link rel="stylesheet" href="{{ asset( 'global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.css?v4.0.2') }}">
   <!--checkbox css-->
   <link rel="stylesheet" href="{{ asset ('global/vendor/icheck/icheck.min599c.css?v4.0.2') }}">
   <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/validation.minfd53.css?v4.0.2')}}">
   <link rel="stylesheet" href="{{ asset('global/vendor/formvalidation/formValidation.minfd53.css?v4.0.2')}}">
      <!--main.css-->
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">

   <!--Datatable-->
   <link rel="stylesheet" href="{{ asset('global/css/jquery-ui.css') }}">
   <link rel="stylesheet" href="{{ asset('global/css/dataTables.jqueryui.min.css') }}">
   
   <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2') }}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/examples/css/tables/datatable.min599c.css?v4.0.2') }}">

   <!-- Plugins For This Page -->
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/basic.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
   <link rel="stylesheet" href="{{ asset( 'assets/css/font-awesome/font-awesome.minfd53.css?v4.0.1' ) }}">
   <link href="{{ asset('global\vendor\fullcalendar390\fullcalendar.min.css' ) }}" rel='stylesheet' />
   <link href="{{ asset('global\vendor\fullcalendar390\fullcalendar.print.min.css' ) }}" rel='stylesheet' media='print' />
   <link rel="stylesheet" href="{{ asset('global/vendor/dropify/css/dropify-multiple.css') }}">

   <!-- Fonts -->
   <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min599c.css?v4.0.2')}}">
   <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2')}}">
   <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
 

   <!-- Scripts -->
   <script src="{{ asset('global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2')}}"></script>
   <script>
   
   </script>
</head>

<body class="animsition site-menubar-fold site-menubar-keep">
   <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
   <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" style="background-color:#ffffff;" role="navigation">
      <div class="navbar-header">
         <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
         </button>
         <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
         </button>
         <a class="navbar-brand navbar-brand-center" href="/dash">
            <img class="navbar-brand-logo navbar-brand-logo-normal" src='{{ url("assets/images/piplogo.png") }}' style="height:42px;">
            <!-- <img class="navbar-brand-logo navbar-brand-logo-special" src='{{ url("global/photos/logoinvo.png") }}' title="Invoygo"> -->
         </a>
         <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
         </button>
      </div>
      <div class="navbar-container container-fluid">
         <!-- Navbar Collapse -->
         <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
               <li class="nav-item hidden-float" id="toggleMenubar">
                  <a class="nav-link" data-toggle="menubar" href="#" role="button">
                     <i class="icon hamburger hamburger-arrow-left">
                        <span class="sr-only">Toggle menubar</span>
                        <span class="hamburger-bar"></span>
                     </i>
                  </a>
               </li>
            </ul>
            <!-- End Navbar Toolbar -->
         
         </div>
         <!-- End Navbar Collapse -->
         <!-- Site Navbar Seach -->
         <!-- <div class="collapse navbar-search-overlap" id="site-navbar-search">
         </div> -->
         <!-- End Site Navbar Seach -->
      </div>
   </nav>

   @yield('content')
   <!-- Footer -->
   <!-- Footer -->
   <footer class="site-footer">
      <div class="site-footer-legal">©Gkblabs</div>
      <div class="site-footer-right">
     CopyrightLimited 2019
      </div>
   </footer>

   <!-- Core  -->
   <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/jquery/jquery.minfd53.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>

   <!-- Plugins -->
   <!-- <script type="text/javascript" src="https://zcptest.nectardesk.io/chat/embed"></script> -->
   <script src="{{ asset('global/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/intro-js/intro.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/screenfull/screenfull599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/formvalidation/formValidation.minfd53.js?v4.0.1') }}"></script>
   <script src="{{ asset('global/vendor/formvalidation/framework/bootstrap4.minfd53.js?v4.0.1') }}"></script>
   <!-- <script src="{{ asset('assets/examples/js/forms/validation.minfd53.js?v4.0.1') }}"></script> -->

   <!-- Scripts -->
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
   <script>
      Config.set('assets', '../assets');
   </script>

   <!--Data table-->
   <!-- <script src="{{ asset('global/js/jquery-3.3.1.js') }}"></script> -->
   <script src="{{ asset('global/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('global/js/dataTables.jqueryui.min.js') }}"></script>


  <script src="{{ asset('assets/examples/js/tables/datatable.min599c.js?v4.0.2') }}"></script> 

   <!-- <script src="{{ asset('global/js/Plugin/dropify.min.js?v4.0.2')}}"></script> -->
   <script src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
   <script src="{{ asset('js/plugins/jqueryvalidate.min.js') }}"></script>
   <script src="{{ asset('js/jquery.mask.js') }}"></script>

  <!-- <script src="{{ asset('assets/examples/js/forms/uploads.min599c.js?v4.0.2') }}"></script> -->

   <!-- Page -->
   <script src="{{ asset('global/vendor/fullcalendar390/lib/moment.min.js') }}"></script>
   <script src="{{ asset('global/vendor/fullcalendar390/fullcalendar.min.js') }}"></script>
   <script src="{{ asset('assets/js/Site.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <script src="{{ asset('js/common-function.js') }}"></script>
   <script src="{{ asset('js/form-validate.js') }}"></script>
   <script src="{{ asset('js/plugins/jquerymask.min.js') }}"></script>
   <script src="{{ asset('js/jquery.mask.js') }}"></script>
   <script src="{{ asset('js/plugins/jqueryblockUI.min.js') }}"></script>

   <!--Datepicker-->
   <script src="{{ asset( 'global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.js?v4.0.2') }}"></script>

   @yield('page-scripts')
   <script>
      $(document).ready(function() {
         // Site.run();
         //    document.addEventListener('DOMContentLoaded', function() {
         //   var calendarEl = document.getElementById('calendar');
         //     var calendar = new FullCalendar.Calendar(calendarEl, {
         //     plugins: [ 'dayGrid' ]
         //   });

         //   calendar.render();
         var Site = window.Site;
         Site.run();
         });
      
</script>
</body>

</html>