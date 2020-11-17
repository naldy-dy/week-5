<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lapak-Kayong | Admin</title>
    <!-- Bootstrap Styles-->
    <link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('public')}}/assets/css/admin.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('public')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('public')}}/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('public')}}/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <!-- Navv -->
 		@include('admin.template.section.header')
        <!-- eend Nav -->



        <!--/. NAV TOP  -->
        @include('admin.template.section.sidebar')


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">

            <!-- Konten -->
             
                   <div class="row">
                       <div class="col-md-12">
                           @include('admin.template.utils.notif')
                       </div>
                   </div>
              
              @yield('content')

               
           <!-- end konten -->

        <!-- /. PAGE WRAPPER  -->
   		 </div>
    </div>
    
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{url('public')}}/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{url('public')}}/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{url('public')}}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{url('public')}}/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="{{url('public')}}/assets/js/custom-scripts.js"></script>


</body>

</html>