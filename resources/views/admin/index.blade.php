@extends('admin.layouts.app')
@section('content')

<!-- begin container-fluid -->
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Dashboard</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Default</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                        <i class="fe fe-edit btn btn-icon text-primary"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                        <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                        <i class="fa fa-check btn btn-icon text-warning"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                        <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                        <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                    </a>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- Notification -->
    <div class="row">
        <div class="col-md-12">
            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those
                fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-close"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-statistics">
                <div class="row no-gutters">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total Visits</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics7"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 15,640</h3>
                                    <p>Monthly visitor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total Cost</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics8"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 16,656</h3>
                                    <p>This month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total Sales</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics9"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>569</h3>
                                    <p>Avg. Sales per day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20">
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics10"></div>
                                </div>
                                <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                    <ul class="list-style-none p-0">
                                        <li class="d-flex py-1">
                                            <span><i class="fa fa-circle text-primary pr-2"></i> Redirect Visits</span> <span class="pl-2 font-weight-bold">456</span></li>
                                        <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i> New Visits</span> <span class="pl-2 font-weight-bold">256</span></li>
                                        <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i> Direct Visits</span> <span class="pl-2 font-weight-bold">128</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-7 m-b-30">
            <div class="card card-statistics h-100 mb-0 apexchart-tool-force-top">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Site activity</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-xs-6 col-lg-3">
                            <div class="row mb-2 pb-3 align-items-end">
                                <div class="col">
                                    <p>Users</p>
                                    <h3 class="tex-dark mb-0">8.6K</h3>
                                </div>
                                <div class="col ml-auto">
                                    <span><i class="fa fa-arrow-down"></i> 2.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-lg-3">
                            <div class="row mb-2 pb-3 align-items-end">
                                <div class="col">
                                    <p>Revenue</p>
                                    <h3 class="tex-dark mb-0">176K</h3>
                                </div>
                                <div class="col ml-auto">
                                    <span><i class="fa fa-arrow-up"></i> 15%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-lg-3">
                            <div class="row mb-2 pb-3 align-items-end">
                                <div class="col">
                                    <p>Rate</p>
                                    <h3 class="tex-dark mb-0">6.2K</h3>
                                </div>
                                <div class="col ml-auto">
                                    <span><i class="fa fa-arrow-down"></i> 6.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-lg-3">
                            <div class="row mb-2 pb-3 align-items-end">
                                <div class="col">
                                    <p>Sessions</p>
                                    <h3 class="tex-dark mb-0">44K</h3>
                                </div>
                                <div class="col ml-auto">
                                    <span><i class="fa fa-arrow-down"></i> 1.8%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="apexchart-wrapper p-inherit">
                                <div id="analytics1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Income Analysis</h4>
                    </div>
                    <div class="dropdown">
                        <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-circle"></i>
                        </a>
                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                            <h6 class="mb-1">Action</h6>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                            <h6 class="mb-1 mt-3">Export</h6>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>3.8k</h2>
                            <span class="d-block mb-2 font-16">AVG sessions</span>
                            <span class="d-block mb-2 mb-sm-5"><b class="text-primary">-65.88%</b> vs last 1 months</span>
                            <p class="mb-3">Sapiente corporis fugiat, doloremque eveniet nostrum id molestiae quaerat!</p>
                            <a class="btn btn-round btn-inverse-primary mb-3 mb-sm-0" href="#"><b>View details </b></a>
                        </div>
                        <div class="col-xs-6">
                            <div class="apexchart-wrapper">
                                <div id="analytics2" class="chart-fit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top my-4"></div>
                    <h4 class="card-title">Income by department</h4>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <span>FCBK: <b>$1,475</b></span>
                            <div class="progress my-3" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <span>GGL: <b>$23,475</b></span>
                            <div class="progress my-3" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <span>APL: <b>$1,658</b></span>
                            <div class="progress my-3" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <span>SMG: <b>$12,489</b></span>
                            <div class="progress my-3" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xxl-4 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Support Ticket</h4>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-round btn-inverse-primary btn-xs" href="#">View all </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row active-task m-b-20">
                        <div class="col-xs-1">
                            <div class="bg-type mb-1 mb-xs-0 mt-1">
                                <span>PP</span>
                            </div>
                        </div>
                        <div class="col-11">
                            <small class="d-block mb-1">Car dealer</small>
                            <h5 class="mb-0"><a href="#">Unread utf-8 in more quick overview</a></h5>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <small> Created by Lizzy Halfman</small>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">
                                    <small>Saturday, March 17 2019</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row active-task m-b-20">
                        <div class="col-xs-1">
                            <div class="bg-type bg-pink mb-1 mb-xs-0 mt-1">
                                <span>SL</span>
                            </div>
                        </div>
                        <div class="col-11">
                            <small class="d-block mb-1">Webster HTML5 </small>
                            <h5 class="mb-0"><a href="#">I get an error "No Direct Access Allowed!" when I enter purchase</a></h5>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <small> Created by Samuel Woods</small>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">
                                    <small>Sunday, March 19 2019</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row active-task m-b-20">
                        <div class="col-xs-1">
                            <div class="bg-type bg-success mb-1 mb-xs-0 mt-1">
                                <span>MP</span>
                            </div>
                        </div>
                        <div class="col-11">
                            <small class="d-block mb-1">The corps</small>
                            <h5 class="mb-0"><a href="#">OAuth Credentials not generating the key</a></h5>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <small> Created by Andrew nico</small>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">
                                    <small>Monday, March 21 2019</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row active-task m-b-20">
                        <div class="col-xs-1">
                            <div class="bg-type bg-orange mb-1 mb-xs-0 mt-1">
                                <span>SP</span>
                            </div>
                        </div>
                        <div class="col-11">
                            <small class="d-block mb-1">Sam martin vCard</small>
                            <h5 class="mb-0"><a href="#">Pre-Buy Questions : For bakery Shop (Mentor Android Application)</a></h5>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <small> Created by Jimmy Falicon</small>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">
                                    <small>Friday, March 22 2019</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row active-task m-b-20">
                        <div class="col-xs-1">
                            <div class="bg-type bg-info mb-1 mb-xs-0 mt-1">
                                <span>AP</span>
                            </div>
                        </div>
                        <div class="col-11">
                            <small class="d-block mb-1">Mentor admin </small>
                            <h5 class="mb-0"><a href="#">I need a payment option, for each seller per item</a></h5>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <small> Created by Brian Joedon</small>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">
                                    <small>Saturday, March 17 2019</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Project Activity</h4>
                    </div>
                    <div class="dropdown">
                        <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                            <h6 class="mb-1">Action</h6>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                            <h6 class="mb-1 mt-3">Export</h6>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="activity">
                        <li class="activity-item primary">
                            <div class="activity-info">
                                <h5 class="mb-0">Meeting with Amanda and team.</h5>
                                <span>10:30 Jan</span>
                            </div>
                        </li>
                        <li class="activity-item info">
                            <div class="activity-info">
                                <h5 class="mb-0"> Assign task for Smith. </h5>
                                <span>
                                                                Wed, 10 Mar
                                                            </span>
                            </div>
                        </li>
                        <li class="activity-item success">
                            <div class="activity-info">
                                <h5 class="mb-0"> Complete milestone 3 and update. </h5>
                                <span>
                                                                Mon, 14 Jun
                                                            </span>
                            </div>
                        </li>
                        <li class="activity-item danger">
                            <div class="activity-info">
                                <h5 class="mb-0">Start new task with mark. </h5>
                                <span>
                                                                Sat, 01 May
                                                            </span>
                            </div>
                        </li>
                        <li class="activity-item warning">
                            <div class="activity-info">
                                <h5 class="mb-0">You have created a new task</h5>
                                <span>9:30</span>
                            </div>
                        </li>
                        <li class="activity-item info">
                            <div class="activity-info">
                                <h5 class="mb-0"> Meeting with client and CEO.</h5>
                                <span>
                                                                Fri, 10 Aug
                                                            </span>
                            </div>
                        </li>
                        <li class="activity-item success">
                            <div class="activity-info">
                                <h5 class="mb-0">Meeting with Amanda and team.</h5>
                                <span>
                                                                Fri, 01 Dec
                                                            </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Sales</h4>
                    </div>
                    <div class="dropdown">
                        <select class="custom-select custom-select-sm" id="inputGroupSelect01">
                            <option selected>Last 24hr</option>
                            <option value="1">Last week</option>
                            <option value="2">Last 6 month</option>
                            <option value="3">Last year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-2 pb-xxs-4">
                        <div class="row">
                            <div class="col-xxs-6 mb-3 mb-xxs-0">
                                <span class="font-17">Total revenue</span>
                                <h3 class="mt-1 mb-1">$45,541</h3>
                                <span class="d-block"> <i class="fa fa-arrow-down text-primary"></i> <b class="text-primary">+23%</b> Vs last months </span>
                            </div>
                            <div class="col-xxs-6 mb-3 mb-xxs-0">
                                <span class="font-17">Total cost</span>
                                <h3 class="mt-1 mb-1">$6,456</h3>
                                <span class="d-block"> <i class="fa fa-arrow-down text-cyan"></i> <b class="text-cyan">+65%</b> Vs last months </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxs-6 pt-2 pt-xxs-4">
                            <div class="d-flex justify-content-between">
                                <span class="font-16"><b>86</b> Deals added</span>
                                <span class="font-16"><b>65%</b> of goal</span>
                            </div>
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xxs-6 pt-2 pt-xxs-4">
                            <div class="d-flex justify-content-between">
                                <span class="font-16"><b>78</b> Project closed</span>
                                <span class="font-16"><b>45%</b> of goal</span>
                            </div>
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="apexchart-wrapper">
                        <div id="analytics3" class="chart-fit"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xxl-8">
            <div class="card card-statistics analytics-contant">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-xl-4">
                            <h4 class="card-title mb-3">Site Visitors</h4>
                            <p class="mb-4 ">Architecto expedita sequi nisi a excepturi error provident, repellendus quisquam unde aut.</p>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <span>United states: </span><b class="float-right">80%</b>
                                    <div class="progress my-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <span>India: </span><b class="float-right">75%</b>
                                    <div class="progress my-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <span>Australia: </span><b class="float-right">65%</b>
                                    <div class="progress my-2" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <span>Germany: </span><b class="float-right">55%</b>
                                    <div class="progress my-2" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <span>United kingdom: </span><b class="float-right">80%</b>
                                    <div class="progress my-2" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-link pl-0" href="#"><b>View details </b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="vectormap-wrapper">
                                <div id="world" class="vmap"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 m-b-30">
            <div class="card card-statistics h-100 mb-0 o-hidden">
                <div class="card-header">
                    <h4 class="card-title">Received all time</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                            <h3 class="mb-1 mb-xxs-0">25,456</h3>
                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+23%</b> Views  </span>
                        </div>
                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                            <h3 class="mb-1 mb-xxs-0">45,541</h3>
                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+15%</b> Likes </span>
                        </div>
                        <div class="col-12 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                            <h3 class="mb-1 mb-xxs-0">78,462</h3>
                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+32%</b> Comments </span>
                        </div>
                    </div>
                    <div class="mt-2 mt-xxs-4">
                        <p>You're scheduled earn <span class="badge  badge-success-inverse">$2,350 today</span></p>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="tab nav-border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link py-2 active show" id="home-02-tab" data-toggle="tab" href="#home-02" role="tab" aria-controls="home-02" aria-selected="true">Views</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab" aria-controls="profile-02" aria-selected="false">Likes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2" id="portfolio-02-tab" data-toggle="tab" href="#portfolio-02" role="tab" aria-controls="portfolio-02" aria-selected="false">Comments </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5">
                            <div class="tab-pane fade active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                                <div class="apexchart-wrapper">
                                    <div id="analytics4" class="chart-fit mb-minus"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                                <div class="apexchart-wrapper">
                                    <div id="analytics5" class="chart-fit mb-minus"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="portfolio-02" role="tabpanel" aria-labelledby="portfolio-02-tab">
                                <div class="apexchart-wrapper">
                                    <div id="analytics6" class="chart-fit mb-minus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Event Calendar</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div id='external-events'>
                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#eventModal">Add New Event</button>
                                <p class="mt-3">
                                    Drag and drop your event or click in the calendar.
                                </p>
                                <div class='fc-event fc-event-primary' data-color="fc-event-primary"><span></span> Family
                                    Vacation</div>
                                <div class='fc-event fc-event-warning' data-color="fc-event-warning"><span></span> Meeting In
                                    Office</div>
                                <div class='fc-event fc-event-danger' data-color="fc-event-danger"><span></span> Client Call</div>
                                <div class='fc-event fc-event-success' data-color="fc-event-success"><span></span> Interview</div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Remove After Drop
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="event-calendar">
                                <div id="event-calendar"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="modelemail">Event Name</label>
                            <input type="email" class="form-control" id="modelemail">
                        </div>
                        <div class="form-group">
                            <label>Choose Event Color</label>
                            <select class="form-control">
                                <option>Primary</option>
                                <option>Warning</option>
                                <option>Success</option>
                                <option>Danger</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end container-fluid -->
@endsection
