

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    @if(direction() == 'ltr')
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/AdminLTE.min.css">
    @else
    <link rel="stylesheet" href="{{ url('/adminlteRTL/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('/adminlte/dist/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ url('/adminlte/dist/css/rtl.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
    <style type="text/css">
    html,body ,h1,h2,h3,h4,h5,h6{
      font-family: 'Cairo', sans-serif;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" integrity="sha256-Y4fsmcZ5AITTOI41har72EhwauUaLt5u51px24bEtKc=" crossorigin="anonymous" />
    @endif
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="dist/css/rtl.css"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">