<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <script src="/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header dashboard menu-pin menu-behind">

@include('layouts.nav')



<div class="page-container ">

    @include('layouts.homeHeader')


    <div class="page-content-wrapper ">

        <div class="content sm-gutter">

            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 col-xlg-2 ">
                        <div class="row">
                            <div class="col-md-12 m-b-10">
                                <div class="widget-8 card no-border bg-warning no-margin widget-loader-bar">
                                    <div class="container-xs-height full-height">
                                        <div class="row-xs-height">
                                            <div class="col-xs-height col-top">
                                                <div class="card-header  top-left top-right">
                                                    <div class="card-title text-black hint-text">
                                                        <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
                                                        </span>
                                                    </div>
                                                    <div class="card-controls">
                                                        <ul>
                                                            <li>
                                                                <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-xs-height ">
                                            <div class="col-xs-height col-top relative">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="p-l-20">
                                                            <h3 class="no-margin p-b-5 text-white">$14,000</h3>
                                                            <p class="small hint-text m-t-5">
                                                                <span class="label  font-montserrat m-r-5">60%</span>Higher
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    </div>
                                                </div>
                                                <div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="warning" data-stroke-width="2">
                                                    <svg></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-10">

                                <div class="widget-9 card no-border bg-success no-margin widget-loader-bar">
                                    <div class="full-height d-flex flex-column">
                                        <div class="card-header ">
                                            <div class="card-title text-black">
                                                <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-l-20">
                                            <h3 class="no-margin p-b-5 text-white">$23,000</h3>
                                            <a href="#" class="btn-circle-arrow text-white"><i class="pg-arrow_minimize"></i>
                                            </a>
                                            <span class="small hint-text text-white">65% lower than last month</span>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="progress progress-small m-b-20">

                                                <div class="progress-bar progress-bar-white" style="width:45%"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 md-m-b-10 sm-m-b-10">

                                <div class="widget-10 card no-border bg-white no-margin widget-loader-bar">
                                    <div class="card-header  top-left top-right ">
                                        <div class="card-title text-black hint-text">
                                            <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </div>
                                        <div class="card-controls">
                                            <ul>
                                                <li><a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-t-40">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="no-margin p-b-5 text-danger semi-bold">APPL 2.032</h4>
                                                <div class="pull-left small">
                                                    <span>WMHC</span>
                                                    <span class=" text-success font-montserrat">
                                                        <i class="fa fa-caret-up m-l-10"></i> 9%
                                                    </span>
                                                </div>
                                                <div class="pull-left m-l-20 small">
                                                    <span>HCRS</span>
                                                    <span class=" text-danger font-montserrat">
                                                        <i class="fa fa-caret-up m-l-10"></i> 21%
                                                    </span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="p-t-10 full-width">
                                            <a href="#" class="btn-circle-arrow b-grey"><i class="pg-arrow_minimize text-danger"></i></a>
                                            <span class="hint-text small">Show more</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 col-xlg-6 m-b-10">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="widget-12 card no-border widget-loader-circle no-margin">
                                    <div class="row">
                                        <div class="col-lg-8 ">
                                            <div class="card-header  pull-up top-right ">
                                                <div class="card-controls">
                                                    <ul>
                                                        <li class="hidden-xlg">
                                                            <div class="dropdown">
                                                                <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                    <i class="card-icon card-icon-settings"></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                    <li><a href="#">AAPL</a>
                                                                    </li>
                                                                    <li><a href="#">YHOO</a>
                                                                    </li>
                                                                    <li><a href="#">GOOG</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="p-l-5">
                                                    <h2 class="pull-left m-t-5 m-b-5">Apple Inc.</h2>
                                                    <h2 class="pull-left m-l-50 m-t-5 m-b-5 text-danger">
                                                        <span class="">448.97</span>
                                                        <span class="text-danger fs-12">-318.24</span>
                                                    </h2>
                                                    <div class="clearfix"></div>
                                                    <div class="full-width">
                                                        <ul class="list-inline">
                                                            <li><a href="#" class="font-montserrat text-master">1D</a>
                                                            </li>
                                                            <li class="active"><a href="#" class="font-montserrat  bg-master-light text-master">5D</a>
                                                            </li>
                                                            <li><a href="#" class="font-montserrat text-master">1M</a>
                                                            </li>
                                                            <li><a href="#" class="font-montserrat text-master">1Y</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nvd3-line line-chart text-center" data-x-grid="false">
                                                        <svg></svg>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="widget-12-search">
                                                    <p class="pull-left">Company
                                                        <span class="bold">List</span>
                                                    </p>
                                                    <button class="btn btn-default btn-xs pull-right">
                                                        <span class="bold">+</span>
                                                    </button>
                                                    <div class="clearfix"></div>
                                                    <input type="text" placeholder="Search list" class="form-control m-t-5">
                                                </div>
                                                <div class="company-stat-boxes">
                                                    <div data-index="0" class="company-stat-box m-t-15 active padding-20 bg-master-lightest">
                                                        <div>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="pg-close fs-12"></i>
                                                            </button>
                                                            <p class="company-name pull-left text-uppercase bold no-margin">
                                                                <span class="fa fa-circle text-success fs-11"></span> AAPL
                                                            </p>
                                                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                                            <div class="pull-right">
                                                                <p class="small hint-text no-margin inline">37.73</p>
                                                                <span class=" label label-important p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div data-index="1" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                                                        <div>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="pg-close fs-12"></i>
                                                            </button>
                                                            <p class="company-name pull-left text-uppercase bold no-margin">
                                                                <span class="fa fa-circle text-primary fs-11"></span> YHOO
                                                            </p>
                                                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                                            <div class="pull-right">
                                                                <p class="small hint-text no-margin inline">37.73</p>
                                                                <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div data-index="2" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                                                        <div>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="pg-close fs-12"></i>
                                                            </button>
                                                            <p class="company-name pull-left text-uppercase bold no-margin">
                                                                <span class="fa fa-circle text-complete fs-11"></span> GOOG
                                                            </p>
                                                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                                            <div class="pull-right">
                                                                <p class="small hint-text no-margin inline">37.73</p>
                                                                <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hidden-lg visible-xlg col-xlg-4 m-b-10">

                        <div class="widget-15 card card-condensed  no-margin no-border widget-loader-circle">
                            <div class="card-header ">
                                <div class="card-controls">
                                    <ul>
                                        <li><a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
                                        </li>
                                        <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <ul class="nav nav-tabs nav-tabs-simple">
                                    <li class="nav-item">
                                        <a href="#" data-toggle="tab" class="p-t-5 active">
                                            APPL<br>
                                            22.23<br>
                                            <span class="text-success">+60.223%</span>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a href="#" data-toggle="tab" class="p-t-5">
                                        FB<br>
                                        45.97<br>
                                        <span class="text-danger">-06.56%</span>
                                    </a>
                                </li>
                                <li class="nav-item"><a href="#" data-toggle="tab" class="p-t-5">
                                    GOOG<br>
                                    22.23<br>
                                    <span class="text-success">+60.223%</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-l-20 p-r-20">
                            <div class="tab-pane no-padding active" id="widget-15-tab-1">
                                <div class="full-width">
                                    <div class="full-width">
                                        <div class="widget-15-chart rickshaw-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane no-padding" id="widget-15-tab-2">
                            </div>
                            <div class="tab-pane" id="widget-15-tab-3">
                            </div>
                        </div>
                        <div class="p-t-20 p-l-20 p-r-20 p-b-30">
                            <div class="row">
                                <div class="col-md-9">
                                    <p class="fs-16 text-black">Apple’s Motivation - Innovation
                                        <br>distinguishes between A leader and a follower.
                                    </p>
                                    <p class="small hint-text p-b-10">VIA Apple Store (Consumer and Education Individuals)
                                        <br>(800) MY-APPLE (800-692-7753)
                                    </p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <p class="font-montserrat bold text-success m-r-20 fs-16">+0.94</p>
                                    <p class="font-montserrat bold text-danger m-r-20 fs-16">-0.63</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>



        <div class="row m-b-10">
            <div class="col-lg-8 sm-p-b-10 md-p-b-10">

                <div class="widget-13 card no-border  no-margin widget-loader-circle">
                    <div class="card-header  pull-up top-right ">
                        <div class="card-controls">
                            <ul>
                                <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container-sm-height no-overflow">
                        <div class="row row-sm-height">
                            <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                                <div class="card-header  ">
                                    <div class="card-title">Menu clipping
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills m-t-5 m-b-15" role="tablist">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                                fb
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                                js
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                                sa
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h3>Facebook</h3>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                                            <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                                        </div>
                                        <div class="tab-pane " id="tab2">
                                            <h3>Google</h3>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                                            <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <h3>Amazon</h3>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                                            <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                                            <br>
                                            <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                                            <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-master-light p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
                                    <p class="no-margin">
                                        <a href="#"><i class="fa fa-arrow-circle-o-down text-success"></i></a>
                                        <span class="hint-text">Super secret options</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                                <div class="bg-master-light widget-13-map">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

                <div class="widget-14 card no-border  no-margin widget-loader-circle">
                    <div class="container-xs-height full-height">
                        <div class="row-xs-height">
                            <div class="col-xs-height">
                                <div class="card-header ">
                                    <div class="card-title">Server load
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-xs-height">
                            <div class="col-xs-height">
                                <div class="p-l-20 p-r-20">
                                    <p>Server: www.revox.io</p>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12">
                                            <h4 class="bold no-margin">5.2GB</h4>
                                            <p class="small no-margin">Total usage</p>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5 class=" no-margin p-t-5">227.34KB</h5>
                                            <p class="small no-margin">Currently</p>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5 class=" no-margin p-t-5">117.65MB</h5>
                                            <p class="small no-margin">Average</p>
                                        </div>
                                        <div class="col-lg-3 visible-xlg">
                                            <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-xs-height">
                            <div class="col-xs-height relative bg-master-lightest">
                                <div class="widget-14-chart_y_axis"></div>
                                <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class=" container-fluid   container-fixed-lg">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Pages detailed view table
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-condensed table-detailed" id="detailedTable">
                                    <thead>
                                        <tr>
                                            <th style="width:25%">Title</th>
                                            <th style="width:25%">Status</th>
                                            <th style="width:25%">Price</th>
                                            <th style="width:25%">Last Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="v-align-middle semi-bold">Revolution Begins</td>
                                            <td class="v-align-middle">Active</td>
                                            <td class="v-align-middle semi-bold">40,000 USD</td>
                                            <td class="v-align-middle">April 13, 2014</td>
                                        </tr>
                                        <tr>
                                            <td class="v-align-middle semi-bold">Revolution Begins</td>
                                            <td class="v-align-middle">Active</td>
                                            <td class="v-align-middle semi-bold">70,000 USD</td>
                                            <td class="v-align-middle">April 13, 2014</td>
                                        </tr>
                                        <tr>
                                            <td class="v-align-middle semi-bold">Revolution Begins</td>
                                            <td class="v-align-middle">Active</td>
                                            <td class="v-align-middle semi-bold">20,000 USD</td>
                                            <td class="v-align-middle">April 13, 2014</td>
                                        </tr>
                                        <tr>
                                            <td class="v-align-middle semi-bold">Revolution Begins</td>
                                            <td class="v-align-middle">Active</td>
                                            <td class="v-align-middle semi-bold">90,000 USD</td>
                                            <td class="v-align-middle">April 13, 2014</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        

    </div>


    </div>


    

           
            <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
            <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
            <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
            <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
            <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
            <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
            <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
            <script src="assets/plugins/mapplic/js/hammer.min.js"></script>
            <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
            <script src="assets/plugins/mapplic/js/mapplic.js"></script>
            <script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
            <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>



            <script src="pages/js/pages.js"></script>


            <script src="assets/js/scripts.js" type="text/javascript"></script>


            <script src="assets/js/dashboard.js" type="text/javascript"></script>
            <script src="assets/js/scripts.js" type="text/javascript"></script>

            <script src="assets/js/demo.js" type="text/javascript"></script>
        </body>
        </html>

