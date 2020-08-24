<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<!-- preloader area start -->
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->
		<div class="sidebar-menu">
			<div class="sidebar-header bg-white">
				<div class="logo py-3">
					<!-- <a href="#"><img src="<?php echo base_url() ?>assets/images/logo_sucofindo.png" alt="logo"></a> -->
				</div>
			</div>
			<div class="main-menu">
				<div class="menu-inner">
					<nav>
						<ul class="metismenu" id="menu">
							<li class="active"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
							<li class="active"><a href="<?php echo base_url() ?>Order"><i class="fa fa-history"></i><span>Request</span></a></li>
							<li class="active">
								<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User Management</span></a>
								<ul class="collapse in">
									<li><a href="<?php echo base_url() ?>user/user_list">User List</a></li>
									<li><a href="<?php echo base_url() ?>user/user_new">Add New User</a></li>
								</ul>
							</li>
							<li class="active">
								<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-car"></i><span>Car Management</span></a>
								<ul class="collapse in">
									<li><a href="<?php echo base_url() ?>car/car_list">Car List</a></li>
									<li><a href="<?php echo base_url() ?>car/car_new">Add New Car</a></li>
								</ul>
							</li>
							<li class="active">
								<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-building"></i><span>Department Management</span></a>
								<ul class="collapse in">
									<li><a href="<?php echo base_url() ?>department/department_list">Department List</a></li>
									<li><a href="<?php echo base_url() ?>department/department_new">Add New Department</a></li>
								</ul>
							</li>
							<li class="active">
								<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-building"></i><span>Budget Management</span></a>
								<ul class="collapse in">
									<li><a href="<?php echo base_url() ?>budget/budget_list">Budget List</a></li>
									<li><a href="<?php echo base_url() ?>budget/budget_new">Add New Budget</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- sidebar menu area end -->
		<!-- main content area start -->
		<div class="main-content">
			<!-- header area start -->
			<div class="header-area py-0">
				<div class="row align-items-center">
					<!-- nav and search button -->
					<div class="col-md-12 col-sm-12 clearfix">
						<div class="nav-btn pull-left my-4">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="user-profile pull-right my-0">
							<img class="avatar user-thumb" src="<?php echo base_url() ?>assets/images/author/avatar.png" alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin SCI Batam <i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?php echo base_url() ?>home/logout">Log Out</a>
							</div>
						</div>
					</div>
					<!-- profile info & task notification -->
					<!-- <div class="col-md-6 col-sm-4 clearfix">
						<div class="user-profile pull-right">
							<img class="avatar user-thumb" src="<?php //echo base_url() ?>assets/images/author/avatar.png" alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="#">Log Out</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- header area end -->
			<!-- page title area start -->
			<!-- <div class="page-title-area">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<div class="breadcrumbs-area clearfix">
							<h4 class="page-title pull-left">Dashboard</h4>
							<ul class="breadcrumbs pull-left">
								<li><a href="index.html">Home</a></li>
								<li><span>Dashboard</span></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 clearfix">
						<div class="user-profile pull-right">
							<img class="avatar user-thumb" src="<?php //echo base_url() ?>assets/images/author/avatar.png" alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Message</a>
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="#">Log Out</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- page title area end -->