<!DOCTYPE html>
<html lang="en">


<head>
    <title>Restaurant Management System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
</head>

<body>
<!-- begin app -->
<div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
        <!-- begin pre-loader -->
        <div class="loader">
            <div class="h-100 d-flex justify-content-center">
                <div class="align-self-center">
                    <img src="{{asset('assets/img/loader/loader.svg')}}" alt="loader">
                </div>
            </div>
        </div>
        <!-- end pre-loader -->
      @include('admin.layouts.inc.header')
        <!-- begin app-container -->
        <div class="app-container">
           @include('admin.layouts.inc.sidebar')
            <!-- begin app-main -->
            <div class="app-main" id="main">
                @yield('content')
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
        @include('admin.layouts.inc.footer')
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

@include('admin.layouts.inc.script')
</body>


</html>
