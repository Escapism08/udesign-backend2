@extends('layouts.app')

@section('content')
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>    
    <!-- end of global css -->    
    <!--page level css -->
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/jvectormap/jquery-jvectormap.css" />
    <link rel="stylesheet" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" href="css/only_dashboard.css" />
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 text-right">
                                            <span>Views Today</span>
                                            <div class="number" id="myTargetElement1"></div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement1.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement1.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Today's Sales</span>
                                            <div class="number" id="myTargetElement2"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement2.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement2.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Subscribers</span>
                                            <div class="number" id="myTargetElement3"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement3.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement3.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Users</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row ">
                    <div class="col-md-8 col-sm-6">
                        <div class="panel panel-border">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i>
                                    Realtime Server Load
                                    <small>- Load on the Server</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                              <div id="realtimechart" style="height:350px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="panel blue_gradiant_bg">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Server Stats
                                    <small class="white-text">- Monthly Report</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar"></div>
                                            <h3 class="title">Network</h3>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"></div>
                                    <div class="margin-bottom-10 visible-sm"></div>
                                    <div class="col-sm-6">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_line"></div>
                                            <h3 class="title">Load Rate</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN Percentage monitor -->
                        <div class="panel green_gradiante_bg ">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff" data-hc="white"></i>
                                    New Signups today
                                </h3>
                            </div>
                            <div class="panel-body nopadmar">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <h4 class="small-heading">Free Users</h4>
                                        <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45">
                                            <span class="percent">20</span>
                                            <canvas height="110" width="110"></canvas>
                                        </span>
                                    </div>
                                    <!-- /.col-sm-4 -->
                                    <div class="col-sm-6 text-center">
                                        <h4 class="small-heading">Premium Users</h4>
                                        <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                            <span class="percent">80</span>
                                            <canvas height="110" width="110"></canvas>
                                        </span>
                                    </div>
                                    <!-- /.col-sm-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- END BEGIN Percentage monitor-->
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="panel panel-border">
                            <div class="panel-heading border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#333" data-hc="#333"></i>
                                    Calendar
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id='external-events'></div>
                                <div id="calendar"></div>
                                <div class="box-footer pad-5">
                                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Create event</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <i class="fa fa-plus"></i>
                                                    Create Event
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                    <div class="input-group-btn">
                                                        <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            Type
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" id="color-chooser">
                                                            <li>
                                                                <a class="palette-primary" href="#">Primary</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-success" href="#">Success</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-info" href="#">Info</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-warning" href="#">warning</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-danger" href="#">Danger</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-default" href="#">Default</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group --> </div>
                                                <!-- /input-group --> </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger pull-right"  data-dismiss="modal">
                                                    Close
                                                    <i class="fa fa-times"></i>
                                                </button>
                                                <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- To do list -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
<section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white" id="livicon-46" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-46"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#ffffff" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                Users List
                            </h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <div id="table_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="table_length"><label> <select name="table_length" aria-controls="table" class="form-control input-xsmall input-inline"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records </label></div></div><div class="col-md-6 col-sm-12"><div id="table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="table"></label></div></div></div><div class="table-scrollable"><table class="table table-bordered  dataTable no-footer" id="table" role="grid" aria-describedby="table_info">
                                <thead>
                                    <tr class="filters" role="row"><th class="sorting_desc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" aria-sort="descending" style="width: 104px;">First Name</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 174px;">Last Name</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="
                                            User E-mail
                                        : activate to sort column ascending" style="width: 337px;">
                                            User E-mail
                                        </th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80px;">Status</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 105px;">Created At</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 76px;">Actions</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                <tr role="row" class="odd">
                                        <td class="sorting_1">Zita</td>
                                        <td>
                                            Greenfelder
                                        </td>
                                        <td>
                                            emmerich.orion@beier.org
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-139" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-139"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-140" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-140"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Zack</td>
                                        <td>Kuphal</td>
                                        <td>
                                            pmoore@hotmail.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-111" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-111"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-112" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-112"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Wyatt</td>
                                        <td>Koch</td>
                                        <td>
                                            dora.marquardt@hotmail.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-141" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-141"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-142" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-142"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Winifred</td>
                                        <td>Johnston</td>
                                        <td>
                                            kpfannerstill@maggiogreenholt.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-157" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-157"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-158" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-158"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Winifred</td>
                                        <td>Schoen</td>
                                        <td>
                                            terry.lavada@wisokypfeffer.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-163" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-163"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-164" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-164"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Will</td>
                                        <td>Gaylord</td>
                                        <td>
                                            schimmel.delores@schiller.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-67" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-67"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-68" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-68"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Webster</td>
                                        <td>Heaney</td>
                                        <td>
                                            urobel@bartellsmith.biz
                                        </td>
                                        <td>free</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-227" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-227"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-228" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-228"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Vito</td>
                                        <td>Fay</td>
                                        <td>
                                            dlynch@hotmail.com
                                        </td>
                                        <td>premium</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-91" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-91"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-92" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-92"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Vernice</td>
                                        <td>Hills</td>
                                        <td>
                                            devante.schmeler@jaskolski.org
                                        </td>
                                        <td>premium</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-161" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-161"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-162" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-162"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Vergie</td>
                                        <td>Terry</td>
                                        <td>
                                            langosh.pearlie@hotmail.com
                                        </td>
                                        <td>free</td>
                                        <td>
                                            2 weeks ago
                                        </td>
                                        <td>
                                            <a href="view_user.html">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user" id="livicon-185" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-185"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user" id="livicon-186" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6875px;" id="canvas-for-livicon-186"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f56954" stroke="none" d="M25,2C22.238,2,20,4.24,20,7S22.238,12,25,12S30,9.76,30,7S27.762,2,25,2ZM28,8H22V6H28V8Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f56954" stroke="none" d="M18.379,24.414C17.391000000000002,24.008000000000003,16.994,22.881,16.994,22.881S16.549,23.137,16.549,22.424C16.549,21.707,16.994,22.881,17.442,20.122999999999998C17.442,20.122999999999998,18.676000000000002,19.763999999999996,18.43,16.801H18.134999999999998C18.134999999999998,16.801,18.877,13.630999999999998,18.134999999999998,12.559999999999999C17.391,11.486999999999998,17.131999999999998,10.629999999999999,15.456999999999997,10.258999999999999C13.919999999999998,9.918,14.417999999999997,9.948999999999998,13.226999999999997,9.999999999999998C12.037999999999997,10.052999999999999,11.043999999999997,10.616999999999997,11.043999999999997,10.973999999999998C11.043999999999997,10.973999999999998,10.300999999999997,11.025999999999998,10.003999999999998,11.332999999999998C9.706,11.64,9.21,13.069,9.21,13.428C9.21,13.785,9.543000000000001,16.188000000000002,9.791,16.699L9.411,16.801000000000002C9.163,19.764000000000003,10.402,20.123,10.402,20.123C10.847,22.881,11.295,21.707,11.295,22.424C11.295,23.137,10.848,22.881,10.848,22.881S10.452,24.008,9.461,24.414C8.47,24.824,2.968,27.018,2.5200000000000005,27.48C2.071,27.941,2.122,30,2.122,30H25.719C25.719,30,25.768,27.941,25.323,27.48C24.873,27.018,19.373,24.824,18.379,24.414Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                            </a>
                                        </td>
                                    </tr></tbody>
                            </table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 10 of 100 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="table" tabindex="0" id="table_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="table" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">5</a></li><li class="paginate_button disabled" aria-controls="table" tabindex="0" id="table_ellipsis"><a href="#">…</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">10</a></li><li class="paginate_button next" aria-controls="table" tabindex="0" id="table_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                            <!-- Modal for showing delete confirmation -->
                            <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="user_delete_confirm_title">
                                                Delete User
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to delete this user? This operation is irreversible.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="#" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row--> </section>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row ">
                    <div class="col-md-4 col-sm-12">
                 </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
<div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

                    </div>
                </div>
                    </div>
                </div>
            </section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="js/josh.js" type="text/javascript"></script>
    <script src="js/metisMenu.js" type="text/javascript"> </script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->
    <script src="js/todolist.js"></script>
    <!-- EASY PIE CHART JS -->
    <script src="vendors/charts/easypiechart.min.js"></script>
    <script src="vendors/charts/jquery.easypiechart.min.js"></script>
    <!--for calendar-->
    <script src="vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="vendors/charts/jquery.flot.min.js" type="text/javascript"></script>
    <script src="vendors/charts/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="vendors/charts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="vendors/countUp/countUp.js"></script>
    <!--   maps -->
    <script src="vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <script src="vendors/jscharts/Chart.js"></script>
    <script src="js/dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var composeHeight = $('#calendar').height() +21 - $('.adds').height();
        $('.list_of_items').slimScroll({
            color: '#A9B6BC',
            height: composeHeight + 'px',
            size: '5px'
        });
    });
    </script>
    <!-- end of page level js -->
  
</body>


<style type="text/css">
    .main-sidebar{
        width: 250px !important;
    }
</style>
@endsection

