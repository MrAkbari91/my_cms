<!-- start header -->
<?php
include('include/header.php')
?>
<!-- end header -->



<!-- img start -->
<!-- <div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/course1.jpg" alt="bg img" class="w-100 image">
	</div>
</div> -->

<!-- img end -->

<!-- start most Popular Course -->
<div class="container mt-8">
	<h1 class="text-center">All Courses</h1>
	<!-- start most popular courses 1st card -->
	<div class="card-deck mt-4">
		<?php
		$sql = "SELECT * FROM courses where is_active=1 order by id desc;";
		$result = mysqli_query($con, $sql);
		while ($row = $result->fetch_assoc()) {
		?>
			<a href="coursedetail.php?course_id=<?= $row['id']; ?>" style="text-align:left;text-decoration:none;color:black;" class="d-block">
				<div class="card m-2 mb-5" style="width: 22rem;">
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
	<!-- card 1 end -->


</div>
<!-- end most Popular Course -->


<!-- start footer -->
<?php
include('include/footer.php')
?>
<!-- end footer -->