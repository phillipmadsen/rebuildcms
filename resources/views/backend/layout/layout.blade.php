<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Clip-One - Responsive Admin Template</title>
        <!-- start: META -->
        <meta charset="utf-8" />
         <meta name="_token" content="{!! csrf_token() !!}" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="The new grace company custom management suite" name="description" />
    <meta content="phillip madsen" name="author" />

        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel ="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/fonts/style.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/css/main.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/css/main-responsive.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/iCheck/skins/all.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
        <link rel="stylesheet" href="{!! asset('/backend/assets/css/theme_light.css') !!}" type="text/css" id="skin_color">
        <link rel="stylesheet" href="{!! asset('/backend/assets/css/print.css') !!}" type="text/css" media="print"/>


        <link rel="stylesheet" type="text/css" href="{!! asset('/backend/assets/plugins/select2/select2.css') !!}" />
        <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/DataTables/media/css/DT_bootstrap.css') !!}" />
        <style>
        .panel-body{padding:15px!important;}
.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px;}
.panel-heading{background-color:#F5F4F9;background-image:linear-gradient(to bottom,#F5F4F9 0%,#ECEAF3 100%);background-repeat:repeat-x;border-bottom:1px solid #CDCDCD;border-radius:6px 6px 0 0;box-shadow:0 1px 0 #FFFFFF inset;height:36px;padding-left:40px!important;position:relative;}
.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd;}
        </style>

        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="{!! asset('/backend/favicon.ico') !!}" />

    @yield('topscripts')

    </head>
<body>
        <!-- start: HEADER -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- start: TOP NAVIGATION CONTAINER -->
            <div class="container">
                <div class="navbar-header">
                    <!-- start: RESPONSIVE MENU TOGGLER -->
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="clip-list-2"></span>
                    </button>
                    <!-- end: RESPONSIVE MENU TOGGLER -->
                    <!-- start: LOGO -->
                    <a class="navbar-brand" href="{{ url(getLang().'/admin/dashboard') }}"> GRACE<i class="clip-clip"></i>ADMIN </a>
                    <!-- end: LOGO -->
                </div>
                <div class="navbar-tools">
                <ul class="nav navbar-right">
                    <!-- start: TO-DO DROPDOWN -->
                    <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" src="img/flags/us.png">
                                <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}"><img alt="" src="img/flags/es.png">{{{ $properties['native'] }}}</a>

                                    </li>
                                @endforeach
                            </ul>
                    </li>

                    <!-- start: MESSAGE DROPDOWN -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">{{ $formPost->count() }}</span>
                        </a>
                        <ul class="dropdown-menu posts">
                            <li class="header">
                            <span class="dropdown-menu-title">You have {{ $formPost->count() }} notifications</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                    @foreach($formPost as $item)
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                              {{--               <div class="thread-image">
                                                                <img alt="" src="./assets/images/avatar-2.jpg">
                                                            </div> --}}
                                                            <div class="thread-content">
                                                                <span class="author"></span>
                                                                <span class="preview">{{ $item->subject }}</span>
                                                                <span class="time"> </span>
                                                            </div>
                                                <p></p>
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- end: MESSAGE DROPDOWN -->

                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="{{ gravatarUrl(Sentinel::getUser()->email) }}" class="circle-img" alt="" style="max-width: 35px;">
                            <span class="username">{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</span>
                            <i class="clip-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url(getLang() . '/admin/user/' . Sentinel::getUser()->id) }}">
                                    <i class="clip-user-2"></i>
                                    &nbsp;My Profile
                                </a>
                            </li>
                            <li>
                                <a href="pages_calendar.html">
                                    <i class="clip-calendar"></i>
                                    &nbsp;My Calendar
                        <li>
                            <a href="javascript:void(0)"><i class="clip-screen"></i>
                                <span class="title"> Layouts </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="layouts_horizontal_menu1.html">
                                        <span class="title"> Horizontal Menu </span>
                                        <span class="badge badge-new">new</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_sidebar_closed.html">
                                        <span class="title"> Sidebar Closed </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_boxed_layout.html">
                                        <span class="title"> Boxed Layout </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layouts_footer_fixed.html">
                                        <span class="title"> Footer Fixed </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../clip-one-rtl/index.html">
                                        <span class="title"> RTL Version </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../frontend/clip-one/index.html" target="_blank"><i class="clip-cursor"></i>
                                <span class="title"> Frontend Theme </span><span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                                <span class="title"> UI Lab </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="ui_elements.html">
                                        <span class="title"> Elements </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_buttons.html">
                                        <span class="title"> Buttons &amp; icons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_animations.html">
                                        <span class="title"> CSS3 Animation </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_modals.html">
                                        <span class="title"> Extended Modals </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_tabs_accordions.html">
                                        <span class="title"> Tabs &amp; Accordions </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_sliders.html">
                                        <span class="title"> Sliders </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_treeview.html">
                                        <span class="title"> Treeview </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_nestable.html">
                                        <span class="title"> Nestable List </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_typography.html">
                                        <span class="title"> Typography </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                                <span class="title"> Tables </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="table_static.html">
                                        <span class="title">Static Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_responsive.html">
                                        <span class="title">Responsive Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_data.html">
                                        <span class="title">Data Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_export.html">
                                        <span class="title">Table Export</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-pencil"></i>
                                <span class="title"> Forms </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_elements.html">
                                        <span class="title">Form Elements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_wizard.html">
                                        <span class="title">Form Wizard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_validation.html">
                                        <span class="title">Form Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_inline.html">
                                        <span class="title">Inline Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_x_editable.html">
                                        <span class="title">Form X-editable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_image_cropping.html">
                                        <span class="title">Image Cropping</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_multiple_upload.html">
                                        <span class="title">Multiple File Upload</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_dropzone.html">
                                        <span class="title">Dropzone File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-user-2"></i>
                                <span class="title">Login</span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="login_example1.html">
                                        <span class="title">Login Form Example 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login_example2.html">
                                        <span class="title">Login Form Example 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-file"></i>
                                <span class="title">Pages</span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="pages_user_profile.html">
                                        <span class="title">User Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_invoice.html">
                                        <span class="title">Invoice</span>
                                        <span class="badge badge-new">new</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_gallery.html">
                                        <span class="title">Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_timeline.html">
                                        <span class="title">Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_calendar.html">
                                        <span class="title">Calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_messages.html">
                                        <span class="title">Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_blank_page.html">
                                        <span class="title">Blank Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="clip-attachment-2"></i>
                                <span class="title">Utility</span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="utility_faq.html">
                                        <span class="title">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_search_result.html">
                                        <span class="title">Search Results </span>
                                        <span class="badge badge-new">new</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_lock_screen.html">
                                        <span class="title">Lock Screen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_404_example1.html">
                                        <span class="title">Error 404 Example 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_404_example2.html">
                                        <span class="title">Error 404 Example 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_404_example3.html">
                                        <span class="title">Error 404 Example 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_500_example1.html">
                                        <span class="title">Error 500 Example 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_500_example2.html">
                                        <span class="title">Error 500 Example 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_pricing_table.html">
                                        <span class="title">Pricing Table</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="utility_coming_soon.html">
                                        <span class="title">Cooming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="active">
                                <i class="clip-folder"></i>
                                <span class="title"> 3 Level Menu </span>
                                <i class="icon-arrow"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:;">
                                        Item 1 <i class="icon-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Item 1 <i class="icon-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Item 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="clip-folder-open"></i>
                                <span class="title"> 4 Level Menu </span><i class="icon-arrow"></i>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:;">
                                        Item 1 <i class="icon-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:;">
                                                Sample Link 1 <i class="icon-arrow"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-times"></i>
                                                        Sample Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-pencil"></i>
                                                        Sample Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-edit"></i>
                                                        Sample Link 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Item 2 <i class="icon-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sample Link 1
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Item 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="maps.html"><i class="clip-location"></i>
                                <span class="title">Maps</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="charts.html"><i class="clip-bars"></i>
                                <span class="title">Charts</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                                </a>
                            <li>

                                <a href="pages_messages.html">
                                    <i class="clip-bubble-4"></i>
                                    &nbsp;My Messages (3)
                                </a>
                            </li>

                            <li class="divider"></li>
                     {{--        <li> <a href="utility_lock_screen.html"><i class="clip-locked"></i> &nbsp;Lock Screen </a> </li> --}}
                            <li>

                                <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat"> <i class="clip-exit"></i>
                                    &nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER DROPDOWN -->
                </ul>
             {{-- @include('admin.layouts.partials.header.header') --}}
                </div>
            </div>
            <!-- end: TOP NAVIGATION CONTAINER -->
        </div>
        <!-- start: TOP NAVIGATION MENU -->

<!-- start: MAIN CONTAINER -->
        <div class="main-container">
            <div class="navbar-content">
             {{-- @include('backend/layout/menu') --}}
             @include('backend/layout/new-menu')
            </div>
            <!-- start: PAGE -->
            <div class="main-content">

                <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                <div class="container">
                @yield('pagetitle')
                <!-- start: PAGE CONTENT -->
                @yield('content')
                <!-- end: PAGE CONTENT-->
                </div>
            </div>
            <!-- end: PAGE -->
        </div>
        <!-- end: MAIN CONTAINER -->




        <!-- start: FOOTER -->
        <div class="footer clearfix">
            <div class="footer-inner">
                2016 &copy; GraceAdmin by Phillip Madsen.
            </div>
            <div class="footer-items">
                <span class="go-top"><i class="clip-chevron-up"></i></span>
            </div>
        </div>
        <!-- end: FOOTER -->
        <!-- start: RIGHT SIDEBAR -->
        <div id="page-sidebar">
            <a class="sidebar-toggler sb-toggle" href="#"><i class="fa fa-indent"></i></a>
            <div class="sidebar-wrapper">
                <ul class="nav nav-tabs nav-justified" id="sidebar-tab">
                    <li class="active">
                        <a href="#users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a>
                    </li>
                    <li>
                        <a href="#favorites" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#settings" role="tab" data-toggle="tab"><i class="fa fa-gear"></i></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="users">
                        <div class="users-list">
                            <h5 class="sidebar-title">On-line</h5>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicole Bell</h4>
                                            <span> Content Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="user-label">
                                            <span class="label label-success">3</span>
                                        </div>
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-3.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Steven Thompson</h4>
                                            <span> Visual Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h5 class="sidebar-title">Off-line</h5>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicole Bell</h4>
                                            <span> Content Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="user-label">
                                            <span class="label label-success">3</span>
                                        </div>
                                        <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Steven Thompson</h4>
                                            <span> Visual Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-8.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-9.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="user-chat">
                            <div class="sidebar-content">
                                <a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
                            </div>
                            <div class="user-chat-form sidebar-content">
                                <div class="input-group">
                                    <input type="text" placeholder="Type a message here..." class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" type="button">
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ol class="discussion sidebar-content">
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 51 min </span>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 37 mins </span>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="tab-pane" id="favorites">
                        <div class="users-list">
                            <h5 class="sidebar-title">Favorites</h5>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicole Bell</h4>
                                            <span> Content Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="user-label">
                                            <span class="label label-success">3</span>
                                        </div>
                                        <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Steven Thompson</h4>
                                            <span> Visual Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="user-chat">
                            <div class="sidebar-content">
                                <a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
                            </div>
                            <ol class="discussion sidebar-content">
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 51 min </span>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 37 mins </span>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings">
                        <h5 class="sidebar-title">General Settings</h5>
                        <ul class="media-list">
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        Enable Notifications
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        Show your E-mail
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green">
                                        Show Offline Users
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        E-mail Alerts
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green">
                                        SMS Alerts
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="sidebar-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: RIGHT SIDEBAR -->
        <div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">Event Management</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                            Close
                        </button>
                        <button type="button" class="btn btn-danger remove-event no-display">
                            <i class='fa fa-trash-o'></i> Delete Event
                        </button>
                        <button type='submit' class='btn btn-success save-event'>
                            <i class='fa fa-check'></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="{!! asset('/backend/assets/plugins/respond.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/excanvas.min.js') !!}"></script>
        <script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{!! asset('/backend/assets/plugins/jQuery-lib/2.0.3/jquery.min.js') !!}"></script>
        <!--<![endif]-->
        <script src="{!! asset('/backend/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/blockUI/jquery.blockUI.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/less/less-1.5.0.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="{!! asset('/backend/assets/js/main.js') !!}"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.pie.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.resize.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/jquery.sparkline/jquery.sparkline.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') !!}"></script>
        <script src="{!! asset('/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.js') !!}"></script>
        <script src="{!! asset('/backend/assets/js/index.js') !!}"></script>
        @yield('bottomscripts')
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Index.init();
                @yield('clipinline')
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>