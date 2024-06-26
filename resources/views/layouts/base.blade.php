<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Title -->
    <title>Admin | Finflex</title>
    <link rel="stylesheet" href="assets\fonts\fonts\font-awesome.min.css">

    <!-- Sidemenu Css -->
    <link href="{{ asset('assets\plugins\fullside-menu\css\style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\fullside-menu\waves.min.css') }}" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="{{ asset('assets\css\dashboard.css') }}" rel="stylesheet">

    <!-- Morris.js Charts Plugin -->
    <link href="{{ asset('assets\plugins\morris\morris.css') }}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.css') }}" rel="stylesheet">

    <!---Font icons-->
    <link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            <div class="app-header1 header py-1 d-flex">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a class="header-brand" href="index-1.html">
                            <img src="assets\images\brand\logo.png" class="header-brand-img" alt="adminor logo">
                        </a>
                        <div class="menu-toggle-button">
                            <a class="nav-link wave-effect" href="#" id="sidebarCollapse">
                                <span class="fa fa-bars"></span>
                            </a>
                        </div>
                        <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                            <div class="p-2">
                                <form class="input-icon ">
                                    <div class="input-icon-addon">
                                        <i class="fe fe-search"></i>
                                    </div>
                                    <input type="search" class="form-control header-search" placeholder="Search&hellip;"
                                        tabindex="1">
                                </form>
                            </div>

                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fa fa-expand" id="fullscreen-button"></i>
                                </a>
                            </div>

                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="nav-unread bg-warning"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div>
                                            <strong>Someone likes our posts.</strong>
                                            <div class="small text-muted">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div>
                                            <strong> 3 New Comments</strong>
                                            <div class="small text-muted">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div>
                                            <strong> Server Rebooted.</strong>
                                            <div class="small text-muted">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                                </div>
                            </div>
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon text-center" data-toggle="dropdown">
                                    <i class="icon icon-speech"></i>
                                    <span class=" nav-unread badge badge-info badge-pill">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item text-center">2 New Messages</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround mr-3 align-self-center cover-image"
                                            data-image-src="assets/images/faces/male/41.jpg"></span>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround mr-3 align-self-center cover-image"
                                            data-image-src="assets/images/faces/female/1.jpg"></span>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround mr-3 align-self-center cover-image"
                                            data-image-src="assets/images/faces/female/18.jpg"></span>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">See all Messages</a>
                                </div>
                            </div>
                            <div class="dropdown d-none d-md-flex ">
                                <a class="nav-link icon " data-toggle="dropdown">
                                    <i class="fe fe-grid floating"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="drop-icon-wrap p-1">
                                        <li>
                                            <a href="email.html" class="drop-icon-item">
                                                <i class="fe fe-mail text-dark"></i>
                                                <span class="block"> E-mail</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calendar2.html" class="drop-icon-item">
                                                <i class="fe fe-calendar text-dark"></i>
                                                <span class="block">calendar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps.html" class="drop-icon-item">
                                                <i class="fe fe-map-pin text-dark"></i>
                                                <span class="block">map</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" class="drop-icon-item">
                                                <i class="fe fe-shopping-cart text-dark"></i>
                                                <span class="block">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="drop-icon-item">
                                                <i class="fe fe-message-square text-dark"></i>
                                                <span class="block">chat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.html" class="drop-icon-item">
                                                <i class="fe fe-phone-outgoing text-dark"></i>
                                                <span class="block">contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all</a>
                                </div>
                            </div>
                            <div class="dropdown text-center selector">
                                <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                                    <span class="avatar avatar-sm brround cover-image"
                                        data-image-src="assets/images/faces/female/25.jpg"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                    <div class="text-center">
                                        <a href="#" class="dropdown-item text-center font-weight-sembold user"
                                            data-toggle="dropdown">Joyce Stewart</a>
                                        <span class="text-center user-semi-title text-dark">web designer</span>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-right"><span class="badge badge-primary">6</span></span>
                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                    </a>
                                    <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <!-- Sidebar Holder -->
                <nav id="sidebar" class="nav-sidebar">
                    <ul class="list-unstyled components" id="accordion">
                        <div class="user-profile">
                            <div class="dropdown user-pro-body">
                                <div><img src="assets\images\faces\female\25.jpeg" alt="user-img"
                                        class="img-circle"></div>
                                <div class="mb-2"><a href="#" class="" data-toggle=""
                                        aria-haspopup="true" aria-expanded="false"> <span
                                            class="font-weight-semibold">Joyce Stewart</span> </a>
                                    <br><span class="text-gray">Web Designer</span>
                                </div>
                            </div>
                        </div>

                        <li class="">
                            <a href="#homeSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-desktop mr-2"></i> Dashboard
                            </a>
                            <ul class="collapse list-unstyled" id="homeSubmenu" data-parent="#accordion">
                                <li><a href="index-1.html">Dashboard 1</a></li>
                                <li><a href="index2.html">Dashboard 2</a></li>
                                <li><a href="index3.html">Dashboard 3</a></li>
                                <li><a href="index4.html">Dashboard 4</a></li>
                                <li><a href="index5.html">Dashboard 5</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Apps" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-snowflake-o mr-2"></i> Apps
                            </a>
                            <ul class="collapse list-unstyled" id="Apps" data-parent="#accordion">
                                <li>
                                    <a href="cards.html">Cards design</a>
                                </li>
                                <li>
                                    <a href="chat.html">Default Chat</a>
                                </li>
                                <li>
                                    <a href="notify.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="sweetalert.html">Sweet alerts</a>
                                </li>
                                <li>
                                    <a href="rangeslider.html">Range slider</a>
                                </li>
                                <li>
                                    <a href="scroll.html">Content Scroll bar</a>
                                </li>
                                <li>
                                    <a href="counters.html">Counters</a>
                                </li>
                                <li>
                                    <a href="rating.html">Rating </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false"><i class="fa fa-area-chart mr-2"></i> Charts</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu" data-parent="#accordion">
                                <li>
                                    <a href="chart-chartist.html">Chartjs Charts </a>
                                </li>
                                <li>
                                    <a href="chart-dygraph.html">Dygraph Charts</a>
                                </li>
                                <li>
                                    <a href="chart-echart.html">Echart Charts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="chart-high.html">High Charts</a>
                                </li>
                                <li>
                                    <a href="chart-nvd3.html">Nvd3 Charts</a>
                                </li>
                                <li>
                                    <a href="chart-morris.html">Morris Charts</a>
                                </li>
                                <li class="secondlevel">
                                    <a href="#Submenu4" class="accordion-toggle wave-effect" data-toggle="collapse"
                                        aria-expanded="false">C3 charts</a>
                                    <ul class="collapse list-unstyled" id="Submenu4">
                                        <li>
                                            <a href="charts.html">C3 Bar Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-line.html">C3 Line Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-donut.html">C3 Donut Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-pie.html">C3 Pie charts</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Uielements" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="mdi mdi-buffer mr-2"></i>UI Elements
                            </a>
                            <ul class="collapse list-unstyled" id="Uielements" data-parent="#accordion">
                                <li>
                                    <a href="alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="colors.html">Colors</a>
                                </li>
                                <li>
                                    <a href="avatarsquare.html">Avatar-Square</a>
                                </li>
                                <li>
                                    <a href="avatar-round.html">Avatar-Rounded</a>
                                </li>
                                <li>
                                    <a href="avatar-radius.html">Avatar-Radius</a>
                                </li>
                                <li>
                                    <a href="dropdown.html">Drop downs</a>
                                </li>
                                <li>
                                    <a href="list.html">List</a>
                                </li>
                                <li>
                                    <a href="tags.html">Tags</a>
                                </li>
                                <li>
                                    <a href="pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="navigation.html">Navigation</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="breadcrumbs.html">Breadcrumbs</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="thumbnails.html">Thumbnails</a>
                                </li>
                                <li>
                                    <a href="jumbotron.html">Jumbotron</a>
                                </li>
                                <li>
                                    <a href="panels.html">Panels</a>
                                </li>
                                <li>
                                    <a href="mediaobject.html">Media Object</a>
                                </li>
                                <li>
                                    <a href="loaders.html">Loaders</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Uidesign" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-tachometer mr-2"></i> UI Design
                            </a>
                            <ul class="collapse list-unstyled" id="Uidesign" data-parent="#accordion">
                                <li>
                                    <a href="accordion.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="chart.html">Charts</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modal</a>
                                </li>
                                <li>
                                    <a href="tooltipandpopover.html">Tooltip and popover</a>
                                </li>
                                <li>
                                    <a href="progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="carousel.html">Carousels</a>
                                </li>
                                <li>
                                    <a href="headers.html">Headers</a>
                                </li>
                                <li>
                                    <a href="footers.html">Footers</a>
                                </li>
                                <li>
                                    <a href="crypto-currencies.html">Crypto-currencies</a>
                                </li>
                                <li>
                                    <a href="users-list.html">User List</a>
                                </li>
                                <li>
                                    <a href="search.html">Search page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html" class=" wave-effect"><i class="fa fa-cubes mr-2"></i> Widgets</a>
                        </li>
                        <li class="">
                            <a href="#pages" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="mdi mdi-file mr-2"></i> Pages
                            </a>
                            <ul class="collapse list-unstyled" id="pages" data-parent="#accordion">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="editprofile.html">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="email.html">Email</a>
                                </li>
                                <li>
                                    <a href="emailservices.html">Email Inbox</a>
                                </li>
                                <li>
                                    <a href="gallery.html" class=" wave-effect"> Gallery</a>
                                </li>
                                <li>
                                    <a href="about.html">About Company</a>
                                </li>
                                <li>
                                    <a href="company-history.html">Company History</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQS</a>
                                </li>
                                <li>
                                    <a href="terms.html">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="empty.html">Empty Page</a>
                                </li>
                                <li>
                                    <a href="construction.html">Under Construction</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Forms" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-send-backward mr-2"></i> Forms
                            </a>
                            <ul class="collapse list-unstyled" id="Forms" data-parent="#accordion">
                                <li>
                                    <a href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form-wizard Elements</a>
                                </li>
                                <li>
                                    <a href="wysiwyag.html">Text Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Submenu1" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-calendar mr-2"></i> Calendar
                            </a>
                            <ul class="collapse list-unstyled" id="Submenu1" data-parent="#accordion">
                                <li>
                                    <a href="calendar.html">Default calendar</a>
                                </li>
                                <li>
                                    <a href="calendar2.html">Full calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Icons" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-bandcamp mr-2"></i> Icons
                            </a>
                            <ul class="collapse list-unstyled" id="Icons" data-parent="#accordion">
                                <li>
                                    <a href="icons.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="icons2.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons3.html">Simple Line Iocns</a>
                                </li>
                                <li>
                                    <a href="icons4.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons5.html">Ionic Icons</a>
                                </li>
                                <li>
                                    <a href="icons6.html">Flag Icons</a>
                                </li>
                                <li>
                                    <a href="icons7.html">pe7 Icons</a>
                                </li>
                                <li>
                                    <a href="icons8.html">Themify Icons</a>
                                </li>
                                <li>
                                    <a href="icons9.html">Typicons Icons</a>
                                </li>
                                <li>
                                    <a href="icons10.html">Weather Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="maps.html" class=" wave-effect"><i class="fa fa-map-marker mr-2"></i> Maps</a>
                        </li>
                        <li class="">
                            <a href="#Submenu2" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-crosshairs mr-2"></i> User Pages
                            </a>
                            <ul class="collapse list-unstyled" id="Submenu2" data-parent="#accordion">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html">Forgot password</a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">Lock screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Submenu3" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-table mr-2"></i> Tables
                            </a>
                            <ul class="collapse list-unstyled" id="Submenu3" data-parent="#accordion">
                                <li>
                                    <a href="tables.html">Default table</a>
                                </li>
                                <li>
                                    <a href="datatable.html">Data Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-shopping-cart mr-2"></i> E-commerce
                            </a>
                            <ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
                                <li>
                                    <a href="shop.html">Products</a>
                                </li>
                                <li>
                                    <a href="shop-description.html">Product Details</a>
                                </li>
                                <li>
                                    <a href="cart.html">Shopping Cart</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#Submenu5" class="accordion-toggle wave-effect" data-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa fa-exclamation-triangle mr-2"></i> Error pages
                            </a>
                            <ul class="collapse list-unstyled" id="Submenu5" data-parent="#accordion">
                                <li>
                                    <a href="400.html">400 Error</a>
                                </li>
                                <li>
                                    <a href="401.html">401 Error</a>
                                </li>
                                <li>
                                    <a href="403.html">403 Error</a>
                                </li>
                                <li>
                                    <a href="404.html">404 Error</a>
                                </li>
                                <li>
                                    <a href="500.html">500 Error</a>
                                </li>
                                <li>
                                    <a href="503.html">503 Error</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                {{ $slot }}


            </div>
        </div>


    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href="#">adminor</a>. Designed by <a href="#">Spruko</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->

    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

    <!-- Dashboard Core -->
    <script src="{{ asset('assets\js\vendors\jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets\js\vendors\bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets\js\vendors\jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets\js\vendors\selectize.min.js') }}"></script>
    <script src="{{ asset('assets\js\vendors\jquery.tablesorter.min.js') }}"></script>
    <script src="{{ asset('assets\js\vendors\circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\rating\jquery.rating-stars.js') }}"></script>

    <!-- Fullside-menu Js-->
    <script src="{{ asset('assets\plugins\fullside-menu\jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\fullside-menu\waves.min.js') }}"></script>

    <!-- Dashboard Core -->
    <script src="{{ asset('assets\js\index1.js') }}"></script>

    <!--Morris.js Charts Plugin -->
    <script src="{{ asset('assets\plugins\morris\raphael-min.js') }}"></script>
    <script src="{{ asset('assets\plugins\morris\morris.js') }}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('assets\js\custom.js') }}"></script>
    @livewireScripts
</body>

</html>
