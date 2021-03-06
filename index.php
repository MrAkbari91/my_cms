<!-- start header -->
<?php
include('include/header.php');
?>
<!-- end header -->


<!-- start video background -->
<div class="container-fluid remove-vid-marg position-relative">
	<div class="vid-parent">
		<video playsinline autoplay muted loop>
			<source src="images/banvid.mp4">
		</video>
		<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
		<h1 class="my-content">Welcome to ischool</h1>
		<small class="my-content">Learn and Implement</small><br>
		<?php
		if (!isset($_SESSION['studentlogin'])) {
			echo '<a href="" class="btn btn-danger mt-3" type="button" data-toggle="modal" data-target="#registrationModal">Get Starded</a>';
		} else {
			echo '<a href="student/profile.php" class="btn btn-danger mt-3" type="button">My profile</a>';
		}
		?>
	</div>
</div>
<!-- end video background -->

<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner">
		<div class="col-sm">
			<h5><i class="fa fa-book-open mr-3"></i> 100+online Courses</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fa fa-users" mr-3></i> Expert Instructors</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fa fa-keyboard mr-3"></i> Lifetime Acccess</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
		</div>
	</div>
</div>

<!-- end text banner -->

<!-- start most Popular Course -->
<div class="container mt-5">
	<h1 class="text-center">Populer Courses</h1>
	<!-- start most popular courses 1st card -->

	<div class="card-deck mt-4">
		<?php
		$sql = "SELECT * FROM courses where is_active=1 order by id desc limit 6;		";
		$result = mysqli_query($con, $sql);
		while ($row = $result->fetch_assoc()) {
		?>
			<a href="coursedetail.php?course_id=<?=$row['id'];?>" style="text-align:left;text-decoration:none;color:black;">
				<div class="card m-2" style="width: 22rem;">
					<div class="course_img">
						<div class="image_cover" style="background:url(<?= str_replace('..', '.', $row['img']); ?>) no-repeat">
						</div>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?= $row['course_name']; ?></h5>
						<p class="card-text"><?= $row['courses_desc']; ?></p>
					</div>
					<div class="card-footer">
						<p class="card-text d-inline"> price:
							<small><del>&#8377 <?= $row['original_price']; ?></del></small>
							<span class="font-weight-bolder">&#8377 <?= $row['price']; ?></span>
						</p>
						<a href="coursedetail.php?course_id=<?= $row['id']; ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
					</div>
				</div>
			</a>
		<?php } ?>
	</div>
	<!-- card 2 end -->
	<div class="text-center m-2">
		<a href="courses.php" class="btn btn-danger btn-sm">View all Course</a>
	</div>
</div>
<!-- end most Popular Course -->






<div class="m-5"></div>

<!-- start social acc -->

<div class="container-fluid bg-danger">
	<div class="row text-white text-center p-1">
		<div class="col-sm">
			<a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
		</div>
		<div class="col-sm">
			<a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
		</div>
		<div class="col-sm">
			<a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
		</div>
		<div class="col-sm">
			<a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
		</div>
	</div>
</div>

<!-- end social acc -->


<!-- start About -->
<div class="container-fluid p-4" style="background-color: #e9ecef">
	<div class="container" style="background-color:#e9ecef;">
		<div class="row text-center">
			<div class="col-sm">
				<h5>About Us</h5>
				<p>lorem, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis urna sapien. Sed
					vulputate . Praesent non felis lacinia, placerat nibh at, rhoncus odio.</p>
			</div>
			<div class="col-sm">
				<h5>Category</h5>
				<a class="text-dark" href="#"></a>web Development<br>
				<a class="text-dark" href="#"></a>Web Desiging<br>
				<a class="text-dark" href="#"></a>Android app dev<br>
				<a class="text-dark" href="#"></a>IOS Development<br>
				<a class="text-dark" href="#"></a>DAta Analysis<br>
			</div>
			<div class="col-sm">
				<h5>Contact Us</h5>
				<p>unit<br> jakatnaka<br> Kamrej<br>phone:+91 95864 75895</p>
			</div>
		</div>
	</div>
</div>
<!-- end About -->


<!-- start footer -->
<?php
include('include/footer.php')
?>
<!-- end footer -->