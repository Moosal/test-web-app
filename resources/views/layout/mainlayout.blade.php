<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title> Dashboard- HRMS admin template</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    @include('layout.partials.head')
    </head>
    @if(Route::is(['error-404','error-500']))
    <body class="error-page">
    @endif 
    @if(!Route::is(['error-404','error-500']))
    <body>
    @include('layout.partials.nav')
    @include('layout.partials.header')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        @if(!Route::is(['chat','contacts','ticket-view','video-call','voice-call']))
        @if(Route::is(['activities']))
        <!-- Page Content -->
        <div class="content pb-0">
         @endif 
          @if(!Route::is(['activities']))
        <!-- Page Content -->
        <div class="content container-fluid">  
         @endif 
    		@yield('content')

    	</div>
        <!-- /Page Content -->
     @endif 
      @if(Route::is(['chat','contacts','ticket-view','video-call','voice-call']))
        @yield('content')
      @endif 
    </div>
    <!-- /Page Wrapper -->
      @endif 
      @if(Route::is(['error-404','error-500']))
      <!-- Main Wrapper -->
            <div class="main-wrapper">
            @yield('content')
            </div>
            <!-- /Main Wrapper -->
      @endif 
    @include('layout.partials.footer-scripts')
    </body>
</html>