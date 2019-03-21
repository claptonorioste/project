<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/icon/favicon.ico');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css'); ?> ">
    <!-- amchart css -->
    <link rel="stylesheet" href="<?= base_url('https://www.amcharts.com/lib/3/plugins/export/export.css');?>" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/typography.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/default-css.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?> ">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?= base_url('public/contents-css/user.css'); ?>" >
=======
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?> ">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<<<<<<< HEAD
    <div class="contents">
        <div id="header-black">
            <div id="logo-container"></div>
            <div class="app-title">Coop Loan Management System</div>
        </div>
=======
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
<<<<<<< HEAD
          
=======
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?= base_url(); ?> "><img src="public/contents-css/logo/sample-logo.png" alt="logo"></a>
                </div>
            </div>
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="<?= base_url('admin'); ?> ">Admin dashboard</a></li>
<<<<<<< HEAD
                                    <li><a href="<?= base_url('manager/index2'); ?> ">Manager dashboard</a></li>
=======
                                    <li><a href="<?= base_url('manager'); ?> ">Manager dashboard</a></li>
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
                                    <li><a href="<?= base_url('index3.php'); ?> ">LoanClerk dashboard</a></li>
                                    <li><a href="<?= base_url('index3.php'); ?> ">PostingClerk dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Sidebar
                                        Types
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('index.php'); ?> ">Left Sidebar</a></li>
                                    <li><a href="<?= base_url('index3-horizontalmenu.php'); ?> ">Horizontal Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('barchart.php'); ?> ">bar chart</a></li>
                                    <li><a href="<?= base_url('linechart.php'); ?> ">line Chart</a></li>
                                    <li><a href="<?= base_url('piechart.php'); ?> ">pie chart</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('accordion.php'); ?> ">Accordion</a></li>
                                    <li><a href="<?= base_url('alert.php'); ?> ">Alert</a></li>
                                    <li><a href="<?= base_url('badge.php'); ?> ">Badge</a></li>
                                    <li><a href="<?= base_url('button.php'); ?> ">Button</a></li>
                                    <li><a href="<?= base_url('button-group.php'); ?> ">Button Group</a></li>
                                    <li><a href="<?= base_url('cards.php'); ?> ">Cards</a></li>
                                    <li><a href="<?= base_url('dropdown.php'); ?> ">Dropdown</a></li>
                                    <li><a href="<?= base_url('list-group.php'); ?> ">List Group</a></li>
                                    <li><a href="<?= base_url('media-object.php'); ?> ">Media Object</a></li>
                                    <li><a href="<?= base_url('modal.php'); ?> ">Modal</a></li>
                                    <li><a href="<?= base_url('pagination.php'); ?> ">Pagination</a></li>
                                    <li><a href="<?= base_url('popovers.php'); ?> ">Popover</a></li>
                                    <li><a href="<?= base_url('progressbar.php'); ?> ">Progressbar</a></li>
                                    <li><a href="<?= base_url('tab.php'); ?> ">Tab</a></li>
                                    <li><a href="<?= base_url('typography.html'); ?> ">Typography</a></li>
                                    <li><a href="<?= base_url('form.php'); ?> ">Form</a></li>
                                    <li><a href="<?= base_url('grid.php'); ?> ">grid system</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('fontawesome.php'); ?> ">fontawesome icons</a></li>
                                    <li><a href="<?= base_url('themify.php'); ?> ">themify icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Tables</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('table-basic.php'); ?> ">basic table</a></li>
                                    <li><a href="<?= base_url('table-layout.php'); ?> ">table layout</a></li>
                                    <li><a href="<?= base_url('datatable.php'); ?> ">datatable</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('maps.php'); ?> "><i class="ti-map-alt"></i> <span>maps</span></a></li>
                            <li><a href="<?= base_url('invoice.php'); ?> "><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('login.php'); ?> ">Login</a></li>
                                    <li><a href="<?= base_url('login2.php'); ?> ">Login 2</a></li>
                                    <li><a href="<?= base_url('login3.php'); ?> ">Login 3</a></li>
                                    <li><a href="<?= base_url('register.php'); ?> ">Register</a></li>
                                    <li><a href="<?= base_url('register2.php'); ?> ">Register 2</a></li>
                                    <li><a href="<?= base_url('register3.php'); ?> ">Register 3</a></li>
                                    <li><a href="<?= base_url('register4.php'); ?> ">Register 4</a></li>
                                    <li><a href="<?= base_url('screenlock.php'); ?> ">Lock Screen</a></li>
                                    <li><a href="<?= base_url('screenlock2.php'); ?> ">Lock Screen 2</a></li>
                                    <li><a href="<?= base_url('reset-pass.php'); ?> ">reset password</a></li>
                                    <li><a href="<?= base_url('pricing.php'); ?> ">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                                    <span>Error</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('404.php'); ?> ">Error 404</a></li>
                                    <li><a href="<?= base_url('403.php'); ?> ">Error 403</a></li>
                                    <li><a href="<?= base_url('500.php'); ?> ">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                    <li><a href="<?= base_url();?>"> aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="<?= base_url(); ?>">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="<?= base_url(); ?> ">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="<?= base_url(); ?> ">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?= base_url('index.php'); ?> ">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="public/contents-css/logo/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> Admin <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url(); ?> ">Message</a>
                                <a class="dropdown-item" href="<?= base_url(); ?> ">Settings</a>
                                <a class="dropdown-item" href="<?= base_url('admin/logout'); ?> ">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
<<<<<<< HEAD
                <!-- sales report area start --
                <!-- sales report area end -->
                <!-- overview area start -->
                
                <!-- overview area end -->
                <!-- market value area start -->
                
=======
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-eur"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Update Reports</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>$ 4567809,987</h2>
                                        <span>- 45.87</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Coin Distribution</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Market Value And Trends</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td class="mv-icon">Logo</td>
                                                <td class="coin-name">Coin Name</td>
                                                <td class="buy">Buy</td>
                                                <td class="sell">Sells</td>
                                                <td class="trends">Trends</td>
                                                <td class="attachments">Attachments</td>
                                                <td class="stats-chart">Stats</td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon/market-value/icon1.png" alt="icon">
                                                </td>
                                                <td class="coin-name">Dashcoin</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon2.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">LiteCoin</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-down-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart2"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon3.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">Euthorium</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart3"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon4.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">Bitcoindash</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart4"></canvas>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area end -->
                <!-- row area start -->
                <div class="row">
                    <!-- Live Crypto Price area start -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Live Crypto Price</h4>
                                <div class="cripto-live mt-5">
                                    <ul>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$876909.00</span></li>
                                        <li>
                                            <div class="icon l">l</div> Litecoin<span><i class="fa fa-long-arrow-up"></i>$29780.00</span></li>
                                        <li>
                                            <div class="icon d">d</div> Dashcoin<span><i class="fa fa-long-arrow-up"></i>$13276.00</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoindash<span><i class="fa fa-long-arrow-down"></i>$5684.890</span></li>
                                        <li>
                                            <div class="icon e">e</div> Euthorium<span><i class="fa fa-long-arrow-down"></i>$3890.98</span></li>
                                        <li>
                                            <div class="icon t">b</div> Tcoin<span><i class="fa fa-long-arrow-up"></i>$750.789</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$325.037</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Live Crypto Price area end -->
                    <!-- trading history area start -->
                    <div class="col-lg-8 mt-sm-30 mt-xs-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Trading History</h4>
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="buy_order" role="tab">Buy Order</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="sell_order" role="tab">Sell Order</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="trad-history mt-4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78211</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$758.90</td>
                                                        <td>$05245.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>782782</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$77878.90</td>
                                                        <td>$7778.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$0945.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8964978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$445.90</td>
                                                        <td>$094545.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$78.90</td>
                                                        <td>$074852945.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78527878</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$65465.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- trading history area end -->
                </div>
                <!-- row area end -->
                <div class="row mt-5">
                    <!-- latest news area start -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Latest News</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="<?= base_url('blog.php'); ?> ">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="<?= base_url('blog.php'); ?> ">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest news area end -->
                    <!-- exchange area start -->
                    <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Exchange</h4>
                                <div class="exhcange-rate mt-5">
                                    <form action="">
                                        <div class="input-form">
                                            <input type="text" value="0.76834">
                                            <span>BTC</span>
                                        </div>
                                        <div class="exchange-devider">To</div>
                                        <div class="input-form">
                                            <input type="text" value="5689.846">
                                            <span>USD</span>
                                        </div>
                                        <div class="exchange-btn">
                                            <button type="submit">Exchange Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- exchange area end -->
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="activity">Activity</a></li>
            <li><a data-toggle="tab" href="settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
