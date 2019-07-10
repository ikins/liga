<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <link rel="icon" href="<?php echo base_url("assets/"); ?>images/favicon.ico">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/"); ?>flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/"); ?>custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Chart -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/chart.js/Chart.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url("assets/theme/"); ?>dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jszip.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/pdfmake.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/vfs_fonts.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>plugins/iCheck/icheck.min.js"></script>

  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url("assets/theme/"); ?>bower_components/morris.js/morris.min.js"></script>
  
  </head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<input type="hidden" id="url" value="<?php echo base_url(); ?>">
  