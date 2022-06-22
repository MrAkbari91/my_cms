<?php
session_start();
if (isset($_SESSION['adminlogin'])) {
	$data = $_SESSION['data'];
} else {
	header("location:index.php");
}

include $_SERVER['DOCUMENT_ROOT'] . "/cms/dbcon.php";

$adminemail=$data['email'];
$sql = "SELECT * from adminlogin where email= '$adminemail';";
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>unit - Admin Dashboard </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">

	<!-- datatables -->
	<link href="../css/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/vendor/chartist/css/chartist.min.css">
	<link href="../css/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="../css/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../css/css/style.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

	<style>
	.btn-buy-now{
		display: none!important;
	}
	#main-wrapper > div.content-body > div > div > div.col-xl-12.col-lg-12 > div > div.card-body > div > form > div > input{
		margin-top: 0!important;
	}
</style>
</head>

<body>
	<!-- Preloader start -->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!-- Preloader end -->

	<!-- Main wrapper start -->
	<div id="main-wrapper">

		<!-- Nav header start -->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<!-- <img src="" alt="asdfas" srcset=""> -->
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<!-- Nav header end -->

		<!-- Header start -->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<ul class="navbar-nav header-right">
							<!-- <li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<div class="input-group-append">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
									<input type="text" class="form-control" placeholder="Search here...">
								</div>
							</li> -->
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="index.html#" role="button" data-bs-toggle="dropdown">
									<img src="<?=$row['img']; ?>" width="20" alt="" class="cover" />
									<div class="header-info">
										<span><?=$row['name']; ?></span>
										<small>Super Admin</small>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="profile.php" class="dropdown-item ai-icon">
										<svg id="icon-user1" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="changepassword.php" class="dropdown-item ai-icon">
										<img src="../images/key.svg" alt="key" class="key">
										<span class="ms-2">Change password </span>
									</a>
									<a href="logout.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- Header end -->


		<!-- Sidebar start -->
		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a href="dashboard.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" aria-expanded="false">
							<i class="flaticon-381-book"></i>
							<span class="nav-text">Manage Courses</span>
						</a>
						<ul>
							<li><a href="add_course.php">Add Course</a></li>
							<li><a href="course.php">Courses</a></li>
						</ul>
					</li>
					<li><a href="lessons.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-notebook-1"></i>
							<span class="nav-text">Lessons</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Manage Student</span>
						</a>
						<ul>
							<li><a href="add_student.php">Add Student</a></li>
							<li><a href="student.php">Student</a></li>
						</ul>
					</li>
					<li><a href="sellrepoart.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-list-1"></i>
							<span class="nav-text">Sell Repoart</span>
						</a>
					</li>
					<li><a href="payment_status.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-success-2"></i>
							<span class="nav-text">Payment Status</span>
						</a>
					</li>
				</ul>
				<div class="book-box">
					<img src="../images/book.png" alt="book">
				</div>
				<div class="copyright">
					<p><strong>CMS Admin Dashboard</strong> © <span id="year"></span> All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Mr Akbari</p>
				</div>
			</div>
		</div>
		<!-- Sidebar end -->

		<!-- contant add -->
		<div class="content-body">
			<div class="container-fluid">
				<!-- row -->
				<div class="row">