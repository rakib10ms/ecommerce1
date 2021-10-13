<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />


    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">


<!--     <link href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
 -->
    <link href= "https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css "  rel="stylesheet">
</head>
<body>

    <div class="wrapper">
        @include('layouts.inc.sidebar')


        <div class="main-panel">
            @include('layouts.inc.adminnav')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.inc.adminfooter')
        </div>



    </div>
  
      @yield('scripts')
     <!-- Scripts -->
     <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
 -->



<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



    <script>
      $(".alert").fadeTo(2000, 500).slideUp(500, function(){
          $(".alert").slideUp(500);
      });
  </script>
    <!--   Core JS Files   -->

    <script type="text/javascript">
      $(document).ready( function () {
            $('#example1').DataTable();
        } );
    </script>

      @yield('scripts')



    </body>
</html>
