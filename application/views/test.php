<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login - srtdash</title>
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
	<!-- others css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default-css.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<!-- modernizr css -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<!-- preloader area start -->
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- login area start -->
	<!-- login area end -->

	<!-- jquery latest version -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<!-- bootstrap 4 js -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

	<!-- SweetAlert2 -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert2.all.min.js"></script>

  <!-- firebase -->
	<script src="<?php echo base_url(); ?>assets/js/firebase-app.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/firebase-firestore.js"></script>
  <!-- <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script> -->
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-auth.js"></script>
	<script type="text/javascript">
		firebase.initializeApp({
		  apiKey: 'AIzaSyAoNlyKviIFQlQknOS8HOwiyciFVMb9gzE',
		  authDomain: 'car-e-cf9ff.firebaseapp.com',
		  projectId: 'car-e-cf9ff'
		});

		var db = firebase.firestore();
	</script>

	<!-- others plugins -->
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

	<script type="text/javascript">
		var data = {
    	Name : $("input[name=name]").val(),
    	Email : "habibsyuhada.1109@gmail.com",
    	Role : $("input[name=role]").val(),
    	Department : $("input[name=department]").val(),
      Password : "123456",
    }
		firebase.auth().createUserWithEmailAndPassword(data.Email, data.Password)
    .then(function(user){
      console.log(user);
      //Here if you want you can sign in the user
    }).catch(function(error) {
        //Handle error
        console.log(error.message);
    });
	</script>
</body>

</html>