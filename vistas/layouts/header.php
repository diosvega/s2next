<?php

	$URI=$_SERVER['REQUEST_URI'];
	$strexplode=explode("/",$URI);
	$baseUrlIndex=$strexplode[1];

  $baseUrlIndex="http://".$_SERVER['HTTP_HOST'].'/evaluacion/';
	$baseUrlCms="http://".$_SERVER['HTTP_HOST'].'/evaluacion/';
?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="UTF-8">
  <title>EVALUACION S2NEXT</title>

    <!-- Bootstrap -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo $baseUrlIndex; ?>sximo/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style >
    <link href="<?php echo $baseUrlIndex; ?>sximo/css/custom.min.css" rel="stylesheet"-->
    <!-- Datatables -->
    
    <link href="<?php echo $baseUrlIndex; ?>sximo/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/cropper/dist/cropper.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrlIndex; ?>sximo/cropper/dist/cropper.css" rel="stylesheet">

    <script src="<?php echo $baseUrlIndex; ?>sximo/ckeditor/ckeditor.js"></script>
  

  

  

  </head>
  <body>

<?php

include("menu.php");
include($this->view);
include("footer.php");
?>
