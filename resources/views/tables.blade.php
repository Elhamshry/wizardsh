<!DOCTYPE html>
<html>
    <head>
        <title>Sing App Dashboard - Tables Basic</title>
        <link href="css/application.min.css" rel="stylesheet">
        <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
        <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Sing App - Bootstrap 4 Admin Dashboard Template">
        <meta name="keywords" content="bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
        <meta name="author" content="Flatlogic LLC">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script>
            /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
            chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
            https://code.google.com/p/chromium/issues/detail?id=332189
            */
        </script>
    </head>
    <body class="">
        <!--
          Main sidebar seen on the left. may be static or collapsing depending on selected state.

            * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
            * Static - stays always open.
        -->
        <nav id="sidebar" class="sidebar" role="navigation">
            <!-- need this .js class to initiate slimscroll -->
            <div class="js-sidebar-content">
                <header class="logo d-none d-md-block">
                    <a href="https://demo.flatlogic.com/sing-app/"><span>sing</span> app</a>
                </header>
                <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
                     looks good, so adding it and enhancing with notifications -->
                <div class="sidebar-status d-md-none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar float-right">
                            <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                        <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                             should be used with bg-* and text-* classes for colors -->
                        <span class="circle bg-warning fw-bold text-gray-dark">
                            13
                        </span>
                        &nbsp;
                        Philip <strong>Smith</strong>
                        <b class="caret"></b>
                    </a>
                    <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
                </div>
                <!-- main notification links are placed inside of .sidebar-nav -->
                <ul class="sidebar-nav">
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="/index">
                            <span class="icon">
                                <i class="fi flaticon-home"></i>
                            </span>
                            Dashboard
                        </a>
                    </li>
                </ul>
                <!-- every .sidebar-nav may have a title -->
                <h5 class="sidebar-nav-title">Template <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
                <ul class="sidebar-nav">
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="/courses">
                            <span class="icon">
                                <i class="fi flaticon-controls"></i>
                            </span>
                            Typography
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="/tables">
                            <span class="icon">
                                <i class="fi flaticon-equal-1"></i>
                            </span>
                            Tables
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="/notifications">
                            <span class="icon">
                                <i class="fi flaticon-alarm"></i>
                            </span>
                            Notifications
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">
                            <span class="icon">
                                <i class="fi flaticon-layers"></i>
                            </span>
                            UI Elements
                            <i class="toggle fa fa-angle-down"></i>
                        </a>
                        <ul id="sidebar-ui" class="collapse ">
                            <li class=""><a href="icons.html">Icons</a></li>
                            <li class=""><a href="charts.html">Charts</a></li>
                            <li class=""><a href="maps_google.html">Google Maps</a></li>
                        </ul>
                    </li>
                </ul>
                <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
                <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
                <ul class="sidebar-labels">
                    <li>
                        <a href="#">
                            <!-- yep, .circle again -->
                            <i class="fa fa-circle text-danger mr-xs"></i>
                            <span class="label-name">My Recent</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle text-primary mr-xs"></i>
                            <span class="label-name">Starred</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle mr-xs"></i>
                            <span class="label-name">Background</span>
                        </a>
                    </li>
                </ul>
                <h5 class="sidebar-nav-title">Projects</h5>
                <!-- A place for sidebar notifications & alerts -->
                <div class="sidebar-alerts">
                    <div class="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                        <span class="fw-normal">Sales Report</span> <br>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Calculating x-axis bias... 65%</small>
                    </div>
                    <div class="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                        <span class="fw-normal">Personal Responsibility</span> <br>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Provide required notes</small>
                    </div>
                </div>
            </div>
        </nav>            <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
            <nav class="page-controls navbar navbar-dashboard">

                <div class="container-fluid">
                    <!-- .navbar-header contains links seen on xs & sm screens -->
                    <div class="navbar-header mr-md-3">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                                <a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
                                    <i class="la la-bars"></i>
                                </a>
                                <!-- shown on xs & sm screen. collapses and expands navigation -->

                                <a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#">
                                    <span class="square square-lg d-md-none"><i class="la la-bars"></i></span>
                                    <i class="la la-bars d-none d-md-block"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-refresh"></i></a></li>
                            <li class="nav-item ml-n-xs d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-times"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right d-md-none">
                            <li class="nav-item">
                                <!-- toggles chat -->
                                <a class="nav-link" href="#" data-toggle="chat-sidebar">
                                    <span class="square square-lg"><i class="la la-globe"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- xs & sm screen logo -->
                        <a class="navbar-brand d-md-none" href="../dashboard/index.html">
                            <i class="fa fa-circle text-gray mr-n-sm"></i>
                            <i class="fa fa-circle text-warning"></i>
                            &nbsp;
                            sing
                            &nbsp;
                            <i class="fa fa-circle text-warning mr-n-sm"></i>
                            <i class="fa fa-circle text-gray"></i>
                        </a>
                    </div>

                    <!-- this part is hidden for xs screens -->
                    <div class="navbar-header mobile-hidden">
                        <!-- search form! link it to your search server -->
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <div class="input-group input-group-no-border ml-4">
                                    <input class="form-control" id="main-search" type="text" placeholder="Search Dashboard">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown nav-item">
                                <a
                                        href="#"
                                        role="button"
                                        class="dropdown-toggle dropdown-toggle-notifications nav-link"
                                        id="notifications-dropdown-toggle"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-position="bottom-middle-aligned"
                                        data-disable-interaction="false"
                                >
                                    <span class="thumb-sm avatar float-left">
                                        <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="..." >
                                    </span>
                                    &nbsp;
                                    Philip <strong>Smith</strong>&nbsp;
                                    <span class="circle bg-primary fw-bold text-white">
                                        15
                                    </span>
                                </a>
                                <div
                                        class="dropdown-menu dropdown-menu-right animated fadeInUp py-0"
                                        aria-labelledby="notifications-dropdown-toggle"
                                        id="notifications-dropdown-menu"
                                >
                                    <section class="card notifications">
                                        <header class="card-header">
                                            <div class="text-center mb-sm">
                                                <strong>You have 13 notifications</strong>
                                            </div>
                                            <div class="btn-group btn-group-sm btn-group-toggle" id="notifications-toggle" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
                                                         only requirement for async reloading -->
                                                    <input type="radio" checked
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/notifications.html"
                                                           data-ajax-target="#notifications-list"> Notifications
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio"
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/messages.html"
                                                           data-ajax-target="#notifications-list"> Messages
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio"
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/progress.html"
                                                           data-ajax-target="#notifications-list"> Progress
                                                </label>
                                            </div>
                                        </header>
                                        <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
                                        <div id="notifications-list" class="list-group thin-scroll">
                                            <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a3.jpg" alt="...">
                                            </span>
                                                <p class="no-margin overflow-hidden">
                                                    1 new user just signed up! Check out
                                                    <a href="#">Monica Smith</a>'s account.
                                                    <time class="help-block no-margin">
                                                        2 mins ago
                                                    </time>
                                                </p>
                                            </div>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="glyphicon glyphicon-upload fa-lg"></i>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    2.1.0-pre-alpha just released. </p>
                                                <time class="help-block no-margin">
                                                    5h ago
                                                </time>
                                            </a>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="fa fa-bolt fa-lg"></i>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    Server load limited. </p>
                                                <time class="help-block no-margin">
                                                    7h ago
                                                </time>
                                            </a>
                                            <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                                            </span>
                                                <p class="no-margin overflow-hidden">
                                                    User <a href="#">Jeff</a> registered
                                                    &nbsp;&nbsp;
                                                    <button class="btn btn-xs btn-success">Allow</button>
                                                    <button class="btn btn-xs btn-danger">Deny</button>
                                                    <time class="help-block no-margin">
                                                        12:18 AM
                                                    </time>
                                                </p>
                                            </div>
                                            <div class="list-group-item">
                                                <span class="thumb-sm float-left mr">
                                                    <i class="fa fa-shield fa-lg"></i>
                                                </span>
                                                <p class="no-margin overflow-hidden">
                                                    Instructions for changing your Envato Account password. Please
                                                    check your account <a href="#">security page</a>.
                                                    <time class="help-block no-margin">
                                                        12:18 AM
                                                    </time>
                                                </p>
                                            </div>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="square bg-primary square-lg">
                                                    <i class="fa fa-facebook text-white"></i>
                                                </span>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    New <strong>76</strong> facebook likes received.</p>
                                                <time class="help-block no-margin">
                                                    15 Apr 2014
                                                </time>
                                            </a>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="circle circle-lg bg-gray-dark">
                                                    <i class="fa fa-circle-o text-white"></i>
                                                </span>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    Dark matter detected.</p>
                                                <time class="help-block no-margin">
                                                    15 Apr 2014
                                                </time>
                                            </a>
                                        </div>
                                        <footer class="card-footer text-sm">
                                            <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                                                 when clicked -->
                                            <button class="btn-label btn-link float-right"
                                                    id="load-notifications-btn"
                                                    data-ajax-load="demo/ajax/notifications.php"
                                                    data-ajax-target="#notifications-list"
                                                    data-loading-text="<i class='la la-refresh fa-spin mr-xs'></i> Loading...">
                                                <i class="la la-refresh"></i>
                                            </button>
                                            <span class="card-footer-text">Synced at: 21 Apr 2014 18:36</span>
                                        </footer>
                                    </section>
                                </div>
                            </li>
                            <li class="dropdown nav-item" >
                                <a href="#" class="dropdown-toggle no-caret nav-link" data-toggle="dropdown">
                                    <i class="la la-cog"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Calendar</a></li>
                                    <li><a class="dropdown-item" href="#">Inbox &nbsp;&nbsp;<span class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><i class="la la-sign-out"></i> &nbsp; Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>            <div class="theme-helper">
                <section class="widget theme-helper-content">
                    <header class="theme-helper-header d-flex p-0">
                        <div class="theme-helper-toggler">
                            <div class="theme-helper-spinner bg-primary text-white">
                                <i class="la la-cog"></i>
                                <i class="la la-cog fs-smaller"></i>
                            </div>
                        </div>
                        <h6>Configuration</h6>
                    </header>
                    <div class="widget-body mt-3">
                        <div class="mt-4">
                            <a href="https://flatlogic.com/dashboards/sing-app-html5"
                               target="_blank"
                               role="button"
                               class="btn btn-warning btn-rounded-f btn-block fs-mini text-white">
                                Purchase
                            </a>
                            <a href="https://flatlogic.com/templates/sing-app-html5"
                               target="_blank"
                               role="button"
                               class="btn btn-danger btn-rounded-f btn-block fs-mini">
                                Go FULL Version
                            </a>
                            <a href="http://demo.flatlogic.com/sing-app/documentation/"
                               target="_blank"
                               role="button"
                               class="btn btn-secondary btn-rounded-f btn-block fs-mini">
                                Documentation
                            </a>
                        </div>
                        <div class="d-flex justify-content-between mt-lg">
                            <a role="button"
                               target="_blank"
                               href="https://flatlogic.com/contact"
                               class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                                <i class="glyphicon glyphicon-headphones mr-xs"></i>
                                Support
                            </a>
                            <a role="button"
                               target="_blank"
                               href="https://github.com/flatlogic/sing-app"
                               class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                                <i class="fa fa-github mr-xs"></i>
                                Github
                            </a>
                        </div>
                        <div class="mt-lg d-flex flex-column align-items-center theme-sharing">
                            <span class="fs-sm">
                                Thank you for sharing!
                            </span>
                            <div class="d-flex justify-content-center text-light mt-2">
                                <a target="_blank"
                                   href="https://twitter.com/intent/tweet?text=Admin%20dashboard%20template%20built%20with%20NodeJS,%20React%20and%20Bootstrap%204!&url=https://demo.flatlogic.com/sing-app/html-bs4/&via=flatlogic">
                                    <i class="fa fa-twitter pr-1"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.flatlogic.com/sing-app/html-bs4/"
                                   target="_blank">
                                    <i class="fa fa-facebook pl-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        <div class="content-wrap">
            <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
            <main id="content" class="content" role="main">
                <!-- Page content -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item active">Tables Basic</li>
        </ol>
        <h2 class="page-title">Centers - <span class="fw-semi-bold"> ..</span></h2>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Centers <span class="fw-semi-bold">info</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="la la-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">#</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th class="d-none d-md-table-cell">Info</th>
                                <th class="d-none d-md-table-cell">Location</th>
                                <th class="d-none d-md-table-cell">Number of courses</th>
                                <th>Rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="d-none d-md-table-cell">1</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/1.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Palo Alto
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    September 14, 2012
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    45.6 KB
                                </td>
                                <td class="width-150">
                                    <div class="stars">
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell">2</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/2.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Sky
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; PSD</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 2400x1455</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    November 14, 2012
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    15.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="stars">
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell">3</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/3.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Down the road
                                    <br>
                                    <span class="badge bg-danger">INFO!</span>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    September 14, 2012
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    49.0 KB
                                </td>
                                <td class="width-150">
                                    <div class="stars">
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell">4</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/4.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Edge
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; PNG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 210x160</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    September 15, 2012
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    69.1 KB
                                </td>
                                <td class="width-150">
                                    <div class="stars">
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell">5</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/11.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Fortress
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 1452x1320</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    October 1, 2012
                                </td>
                                <td class="d-none d-md-table-cell text-semi-muted">
                                    2.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="stars">
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: gold;padding: 0 2px;" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <div class="clearfix">
                            <div class="float-right">
                                <button class="btn btn-default btn-sm">
                                    Send to ...
                                </button>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                        &nbsp; Clear &nbsp;
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Clear</a></li>
                                        <li><a class="dropdown-item" href="#">Move ...</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Basic table with styled content</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="la la-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Stripped <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. Just <code>.table-striped</code> it.</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox1" type="checkbox" data-check-all>
                                        <label for="checkbox1"></label>
                                    </div>
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td>Jacob <span class="badge bg-warning text-gray-dark">ALERT!</span></td>
                                <td>Thornton</td>
                                <td><span class="badge bg-gray-light text-gray">Away</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td><span class="badge bg-danger">Construct</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <h3>Hover <span class="fw-semi-bold">Table</span></h3>
                        <p>Trace only what's really important. <code>.table-hover</code> is made for it.</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><a href="#">ottoto@example.com</a></td>
                                    <td><span class="badge badge-pill bg-gray-lighter text-gray">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td><a href="#">fat.thor@example.com</a></td>
                                    <td><span class="badge badge-pill bg-gray-lighter text-gray-light">Unconfirmed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><a href="#">larry@example.com</a></td>
                                    <td><span class="badge badge-pill bg-gray-lighter text-gray">New</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Peter</td>
                                    <td>Horadnia</td>
                                    <td><a href="#">peter@example.com</a></td>
                                    <td><span class="badge badge-pill bg-gray-lighter text-gray-light">Active</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="la la-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Bordered <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. That's how
                            all of us learned in school the table should look like. Just add
                            <code>.table-bordered</code> to it.</p>
                        <table class="table table-bordered table-lg mt-lg mb-0">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox10" type="checkbox" data-check-all>
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th >Price</th>
                                <th class="text-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox11" type="checkbox" data-check-all>
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td>$25 224.2</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#3abf94">13,14,16,15,4,14,20
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox12" type="checkbox" data-check-all>
                                        <label for="checkbox12"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td>$87 346.1</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#1a86d0">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox13" type="checkbox" data-check-all>
                                        <label for="checkbox13"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td>$57 944.6</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#3abf94">11,17,19,16,14,12,16
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox14" type="checkbox" data-check-all>
                                        <label for="checkbox14"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td>$118 533.1</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#005792">13,14,20,16,15,4,14
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox15" type="checkbox" data-check-all>
                                        <label for="checkbox15"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td>$72 854.5</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#005792">16,15,4,14,13,14,20
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="la la-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Overflow <span class="fw-semi-bold">Table</span></h3>
                        <p>
                            Add any non-bordered .table within a widget for a seamless design.
                            Awesome look for no cost.
                            Just wrap the table with simple css class <code>.widget-table-overlay</code> inside
                            of widget
                        </p>
                    </div>
                    <div class="widget-table-overlay">
                        <table class="table table-striped table-lg mt-lg mb-0">
                            <thead class="no-bd">
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox210" type="checkbox" data-check-all>
                                        <label for="checkbox210"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th>Price</th>
                                <th class="text-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox211" type="checkbox" data-check-all>
                                        <label for="checkbox211"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td>$25 224.2</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#005792">13,14,16,15,4,14,20
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox212" type="checkbox" data-check-all>
                                        <label for="checkbox212"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td>$87 346.1</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#005792">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox213" type="checkbox" data-check-all>
                                        <label for="checkbox213"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td>$57 944.6</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#fd5e00">11,17,19,16,14,12,16
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox214" type="checkbox" data-check-all>
                                        <label for="checkbox214"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td>$118 533.1</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#005792">13,14,20,16,15,4,14
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox215" type="checkbox" data-check-all>
                                        <label for="checkbox215"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td>$72 854.5</td>
                                <td class="text-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#1a86d0">16,15,4,14,13,14,20
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
                    <footer class="content-footer">
                        Sing HTML5 Version - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
                    </footer>
            </main>
        </div>
        <!-- The Loader. Is shown when pjax happens -->
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin-fast"></i>
        </div>

        <!-- common libraries. required for every page-->
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../node_modules/bootstrap/js/dist/util.js"></script>
        <script src="../node_modules/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../node_modules/widgster/widgster.js"></script>
        <script src="../node_modules/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
        <script src="../node_modules/hammerjs/hammer.js"></script>
        <script src="../node_modules/jquery-hammerjs/jquery.hammer.js"></script>


        <!-- common app js -->
        <script src="js/settings.js"></script>
        <script src="js/app.js"></script>

        <!-- Page scripts -->
        <script src="../node_modules/jquery-sparkline/jquery.sparkline.js"></script>
        <!-- page specific js -->
        <script src="js/tables.js"></script>
    </body>
</html>
