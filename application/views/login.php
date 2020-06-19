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
	<div class="login-area" style="z-index : 1; position: relative; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo base_url() ?>assets/images/background_login.jpeg') center/cover no-repeat;">
		<div class="container">
			<div class="login-box ptb--100">
				<form>
					<div class="login-form-head">
						<h4><?php echo strtoupper("sucofindo") ?></h4>
						<p>Sign In</p>
					</div>
					<div class="login-form-body" autofocus>
						<div class="form-gp">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" id="exampleInputEmail1" name="email" required>
							<i class="ti-email"></i>
							<div class="text-danger"></div>
						</div>
						<div class="form-gp">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" id="exampleInputPassword1" name="password" required>
							<i class="ti-lock"></i>
							<div class="text-danger"></div>
						</div>
						<!-- <div class="row mb-4 rmber-area">
							<div class="col-6">
								<div class="custom-control custom-checkbox mr-sm-2">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="#">Forgot Password?</a>
							</div>
						</div> -->
						<div class="submit-btn-area">
							<button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
						</div>
						<!-- <div class="form-footer text-center mt-5">
							<p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
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
	<script src="<?php echo base_url(); ?>assets/js/firebase-auth.js"></script>
	<script type="text/javascript">
		firebase.initializeApp({
		  apiKey: 'AIzaSyBwC5sLWQrEjziZnMaHx6inXs2iK0tvaiI',
		  authDomain: 'car-e-c6518.firebaseapp.com',
		  projectId: 'car-e-c6518'
		});

		var db = firebase.firestore();
	</script>

	<!-- others plugins -->
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

	<script type="text/javascript">
		$("form").submit(function(e){
      e.preventDefault();
      var email = $("input[name=email]").val();
      var password = $("input[name=password]").val();
      sweetalert('loading', 'Please Wait...');
      console.log(email);
      console.log(password);
      firebase.auth().signInWithEmailAndPassword(email, password)
	    .then(function(user){
	      db.collection("Users").where("Email", "==", email).where("Password", "==", password)
	      .get()
	      .then(function(querySnapshot) {
	      	var jumlah = querySnapshot.size;
	      	console.log(jumlah);
	      	if(jumlah > 0){
	      		// sweetalert('success', 'Success Login!');
	      		var id, nama, email, departemen, role;

	      		querySnapshot.forEach(function(doc) {
			        console.log(doc.id, " => ", doc.data());
			        var data = doc.data();
			        id = doc.id;
			        nama = data.Nama;
			        email = data.Email;
			        role = data.Role;
			        departemen = data.Departemen;
			      });

	      		$.ajax({
	            url: "<?php echo base_url();?>home/login_process",
	            type: "post",
	            data: {
	              'id': id,
	              'nama': nama,
	              'email': email,
	              'role': role,
	              'departemen': departemen,
	            },
	            success: function(data) {
	            	// alert(data);
	              window.location = "<?php echo base_url() ?>"
	            }
	          });
	      	}
	      	else{
	      		sweetalert('error', 'Wrong User or Password!');
	      	}
	        
		    })
		    .catch(function(error) {
		    	console.log("Error : ", error);
		    });
	    }).catch(function(error) {
	      console.log(error.message);
	      if (errorCode === 'auth/wrong-password') {
          sweetalert('error', 'Wrong User or Password!');
        } else {
          sweetalert('error', errorMessage);
        }
	    });
      
    });

    function sweetalert(type, text = "Wait ...") {
      if(type == 'success'){
        Swal.fire({
          title: 'Success!',
          text: text,
          type: 'success',
        })
      }
      else if(type == 'error'){
        Swal.fire({
          title: 'Error!',
          text: text,
          type: 'error',
        })
      }
      else if(type == 'loading'){
        Swal.fire({
		      title: text,
		      onBeforeOpen () {
		        Swal.showLoading ()
		      },
		      onAfterClose () {
		        Swal.hideLoading()
		      },
		      allowOutsideClick: false,
		      allowEscapeKey: false,
		      allowEnterKey: false
		    });
      }
    }
	</script>
</body>

</html>