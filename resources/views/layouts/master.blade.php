<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="description" content="bootstrap admin template">
   <meta name="author" content="">
   <title>Invoygo Customer Portal</title>
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
   <!-- <link rel="stylesheet" href="{{ asset('global/vendor/dropify/css/dropify-multiple.css') }}"> -->

   <!-- Fonts -->
   <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min599c.css?v4.0.2')}}">
   <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2')}}">
   <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
   <!--[if lt IE 9]>
      <script src="{{ asset('global/vendor/html5shiv/html5shiv.min.js?v4.0.2') }}"></script>
      <![endif]-->
   <!--[if lt IE 10]>
      <script src="{{ asset('global/vendor/media-match/media.match.min.js?v4.0.2') }}"></script>
      <script src="{{ asset('global/vendor/respond/respond.min.js?v4.0.2') }}"></script>
      <![endif]-->

   <!-- Scripts -->
   <script src="{{ asset('global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2')}}"></script>
   <script>
      var APP_URL = "{{config('app.invoygo_sp_url')}}" ;
      console.log("app url: " + APP_URL);        
      Breakpoints();
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
            <img class="navbar-brand-logo navbar-brand-logo-normal" src='{{ url("global/photos/logoinvo.png") }}' style="height:32px;" title="Invoygo">
            <img class="navbar-brand-logo navbar-brand-logo-special" src='{{ url("global/photos/logoinvo.png") }}' title="Invoygo">
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
               <!-- <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                     <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                     <span class="sr-only">Toggle fullscreen</span>
                     </a>
                  </li>
                  <li class="nav-item hidden-float">
                     <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                        role="button">
                     <span class="sr-only">Toggle Search</span>
                     </a>
                  </li>
                   -->
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
               <!-- <li class="nav-item dropdown">
                     <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                        aria-expanded="false" role="button">
                     <span class="flag-icon flag-icon-us"></span>
                     </a>
                     <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                        <span class="flag-icon flag-icon-gb"></span> English</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                        <span class="flag-icon flag-icon-fr"></span> French</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                        <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                        <span class="flag-icon flag-icon-de"></span> German</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                        <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                     </div>
                  </li> -->
               <li class="nav-item" style="margin-top: 20px;"><label>Please choose Tenant Name  &nbsp;</label></li>
               <li class="nav-item" style="margin-top: 13px;">

                  <select class="form-control tenant_selectbox" id="tenants" style="border:1px solid #808080;">
                     <option value="" selected style="background-color:#ffffff;border:none;" disabled>Select Tenant</option>
                  </select>
               </li>
               <li class="nav-item dropdown">
                  <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                     <li class="dropdown-menu-header" role="presentation">
                        <h5>NOTIFICATIONS</h5>
                        <span class="badge badge-round badge-danger"></span>
                     </li>
               
                     <li class="dropdown-menu-footer" role="presentation">
                        <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                           <i class="icon wb-settings" aria-hidden="true"></i>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                           All notifications
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                     <span class="avatar avatar-online">
                        <img src="{{ asset('global/photos/avatar1.png') }}" alt="...">
                        <i></i>
                     </span>
                  </a>
                  <div class="dropdown-menu" role="menu">
                     <a class="dropdown-item" href="javascript:void(0)" id="apiLogout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                  </div>
               </li>
                     <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                        aria-expanded="false" data-animation="scale-up" role="button">
                     <i class="icon wb-envelope" aria-hidden="true"></i>
                     <span class="badge badge-pill badge-info up">3</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                           <h5>MESSAGES</h5>
                           <span class="badge badge-round badge-info">New 3</span>
                        </li>
                        <li class="list-group" role="presentation">
                           <div data-role="container">
                              <div data-role="content">
                                 <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                    <div class="media">
                                       <div class="pr-10">
                                          <span class="avatar avatar-sm avatar-online">
                                          <img src="{{ asset('global/photos/view-1-150x100.jpg') }}" alt="..." />
                                          <i></i>
                                          </span>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="media-heading">Mary Adams</h6>
                                          <div class="media-meta">
                                             <time datetime="2018-06-17T20:22:05+08:00">30 minutes ago</time>
                                          </div>
                                          <div class="media-detail">Anyways, i would like just do it</div>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                    <div class="media">
                                       <div class="pr-10">
                                          <span class="avatar avatar-sm avatar-off">
                                          <img src="{{ asset('global/photos/view-1-150x100.jpg') }}" alt="..." />
                                          <i></i>
                                          </span>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="media-heading">Caleb Richards</h6>
                                          <div class="media-meta">
                                             <time datetime="2018-06-17T12:30:30+08:00">12 hours ago</time>
                                          </div>
                                          <div class="media-detail">I checheck the document. But there seems</div>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                    <div class="media">
                                       <div class="pr-10">
                                          <span class="avatar avatar-sm avatar-busy">
                                          <img src="{{ asset('global/photos/view-1-150x100.jpg') }}" alt="..." />
                                          <i></i>
                                          </span>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="media-heading">June Lane</h6>
                                          <div class="media-meta">
                                             <time datetime="2018-06-16T18:38:40+08:00">2 days ago</time>
                                          </div>
                                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                    <div class="media">
                                       <div class="pr-10">
                                          <span class="avatar avatar-sm avatar-away">
                                          <img src="{{ asset('global/photos/view-1-150x100.jpg') }}" alt="..." />
                                          <i></i>
                                          </span>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="media-heading">Edward Fletcher</h6>
                                          <div class="media-meta">
                                             <time datetime="2018-06-15T20:34:48+08:00">3 days ago</time>
                                          </div>
                                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                           <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                           <i class="icon wb-settings" aria-hidden="true"></i>
                           </a>
                           <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                           See all messages
                           </a>
                        </li>
                     </ul>
                  </li> 
            </ul>
            <!-- End Navbar Toolbar Right -->
         </div>
         <!-- End Navbar Collapse -->
         <!-- Site Navbar Seach -->
         <!-- <div class="collapse navbar-search-overlap" id="site-navbar-search">
         </div> -->
         <!-- End Site Navbar Seach -->
      </div>
   </nav>
   <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
         <div>
            <div>
               <ul class="site-menu" data-plugin="menu">
                  <li class="site-menu-category">General</li>
                  <li class="site-menu-item has-sub">
                  <li class='site-menu-item has-sub {{ Request::is('dash') ? 'active' : '' }}'>
                     <a href="{{url('/dash')}}">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                  </li>
                  <li class='site-menu-item has-sub {{ Request::is('invoicelist') ? 'active' : '' }}'>
                     <a href="{{url('/invoicelist')}}">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Invoices</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                  </li>
                  <li class='site-menu-item has-sub {{ Request::is('payment') ? 'active' : '' }}'>
                  <a href="{{url('/payment')}}">
                        <i class="site-menu-icon fa fa-usd" aria-hidden="true"></i>
                        <span class="site-menu-title">Payments</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                  </li>
                  <li class="site-menu-category">Elements</li>
                  <li class='site-menu-item has-sub {{ Request::is('calendar*') || Request::is('task*') || Request::is('documents*') ? 'active' : '' }}'>
                     <a href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                        <span class="site-menu-title">Tools</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                     <ul class="site-menu-sub">
                        <li class="site-menu-item">
                           <a href="{{url('/calendar')}}">
                              <span class="site-menu-title">Calendar</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{url('/task')}}">
                              <span class="site-menu-title">Tasks</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{url('/documents')}}">
                              <span class="site-menu-title">Documents</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class='site-menu-item has-sub {{ Request::is('contactus*') || Request::is('help*') ? 'active' : '' }}'>
                     <a href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                        <span class="site-menu-title">Support</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                     <ul class="site-menu-sub">
                        <li class="site-menu-item">
                           <a href="{{url('/contactus')}}">
                              <span class="site-menu-title">Contact Us</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{url('/help')}}">
                              <span class="site-menu-title">Help</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class='site-menu-item has-sub {{ Request::is('preference*') || Request::is('legal*') ? 'active' : '' }}'>
                     <a href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                        <span class="site-menu-title">Account</span>
                        <span class="site-menu-arrow"></span>
                     </a>
                     <ul class="site-menu-sub">
                        <li class="site-menu-item">
                           <a href="{{url('/preference')}}">
                              <span class="site-menu-title">Preferences</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{url('/legal')}}">
                              <span class="site-menu-title">Legal</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   @yield('content')
   <!-- Footer -->
   <!-- Footer -->
   <footer class="site-footer">
      <div class="site-footer-legal">©Invoygo</div>
      <div class="site-footer-right">
         Crafted by GKB Labs
      </div>
   </footer>

   <!-- Core  -->
   <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>

   <!-- Plugins -->
   <script type="text/javascript" src="https://zcptest.nectardesk.io/chat/embed"></script>
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
   <script src="{{ asset('global/vendor/datatables.net/jquery.dataTables599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-scroller/dataTables.scroller.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-responsive/dataTables.responsive.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons/dataTables.buttons.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.html5.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.flash.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.print.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.colVis.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/datatables.min599c.js?v4.0.2') }}"></script>


  <script src="{{ asset('assets/examples/js/tables/datatable.min599c.js?v4.0.2') }}"></script>

   <!-- <script src="{{ asset('global/js/Plugin/dropify.min.js?v4.0.2')}}"></script> -->
   <script src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
   <script src="{{ asset('js/plugins/jqueryvalidate.min.js') }}"></script>
   <script src="{{ asset('js/jquery.mask.js') }}"></script>
   <!-- Page -->
   <script src="{{ asset('global\vendor\fullcalendar390\lib\moment.min.js') }}"></script>
   <script src="{{ asset('global\vendor\fullcalendar390\fullcalendar.min.js') }}"></script>
   <script src="{{ asset('assets/js/Site.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
   <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
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
         });
      
   </script>
</body>

</html>