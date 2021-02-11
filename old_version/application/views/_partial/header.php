<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $meta_title ?> | Car-e SUCOFINDO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon/favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css">
	<!-- amchart css -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  
	<!-- others css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default-css.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

	<!-- modernizr css -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

	<!-- offset area end -->
	<!-- jquery latest version -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/chart.js"></script>
	<!-- bootstrap 4 js -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

	<!-- start chart js -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> -->
	<!-- start highcharts js -->
	<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
	<!-- start zingchart js -->
	<!-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
	<script>
		zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
	</script> -->
	<!-- all line chart activation -->
	<script src="<?php echo base_url(); ?>assets/js/line-chart.js"></script>
	<!-- all pie chart -->
	<script src="<?php echo base_url(); ?>assets/js/pie-chart.js"></script>

	<!-- Start datatable js -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
  
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

  <!-- SweetAlert2 -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert2.all.min.js"></script>

	<!-- firebase -->
	<script src="<?php echo base_url(); ?>assets/js/firebase-app.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/firebase-firestore.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/firebase-auth.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/firebase-storage.js"></script>
	<script type="text/javascript">
		firebase.initializeApp({
		  apiKey: 'AIzaSyBwC5sLWQrEjziZnMaHx6inXs2iK0tvaiI',
		  authDomain: 'car-e-c6518.firebaseapp.com',
		  projectId: 'car-e-c6518',
		  storageBucket: 'car-e-c6518.appspot.com'
		});

		var db = firebase.firestore();
		var storage = firebase.storage();
		var storageRef = firebase.storage().ref();
	</script>
	<style>
		.shadow{
			box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important
		}
	</style>
</head>

<body>