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
    <link rel="stylesheet" href="<?= base_url('public/contents-css/user.css'); ?>" >
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?> ">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="contents">
        <div id="header-black">
            <div id="logo-container"></div>
            <div class="app-title">Coop Loan Management System</div>
        </div>
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
          
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="<?= base_url('admin'); ?> ">Admin dashboard</a></li>
                                    <li><a href="<?= base_url('manager/index2'); ?> ">Manager dashboard</a></li>
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
                <!-- sales report area start --
                <!-- sales report area end -->
                <!-- overview area start -->
                
                <!-- overview area end -->
                <!-- market value area start -->
                
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
