<?php include "include/header.php"; ?>

<!-- Content body start -->
<!-- box for count start-->
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
	<div class="widget-stat card bg-danger">
		<div class="card-body  p-4">
			<div class="media">
				<span class="me-3">
					<i class="flaticon-381-book"></i>
				</span>
				<div class="media-body text-white text-end">
					<h3 class="text-white mb-1">Courses</h3>
					<?php
					$sql = "SELECT count(*) as total FROM courses;";
					$result = $con->query($sql);
					$row = $result->fetch_assoc();
					?>
					<h3 class="text-white"><?= $row['total']; ?></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
	<div class="widget-stat card bg-primary">
		<div class="card-body p-4">
			<div class="media">
				<span class="me-3">
					<i class="flaticon-381-user-7"></i>
				</span>
				<div class="media-body text-white text-end">
					<h3 class="mb-1 text-white">Student</h3>
					<?php
					$sql = "SELECT count(*) as total FROM student;";
					$result = $con->query($sql);
					$row = $result->fetch_assoc();
					?>
					<h3 class="text-white"><?= $row['total']; ?></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
	<div class="widget-stat card bg-success">
		<div class="card-body p-4">
			<div class="media">
				<span class="me-3">
					<i class="flaticon-381-diamond"></i>
				</span>
				<div class="media-body text-white text-end">
					<h3 class="text-white mb-1">Earning</h3>
					<h3 class="text-white">$56K</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
	<div class="widget-stat card bg-info">
		<div class="card-body p-4">
			<div class="media">
				<span class="me-3">
					<i class="flaticon-381-heart"></i>
				</span>
				<div class="media-body text-white text-end">
					<h3 class="text-white mb-1">Total</h3>
					<h3 class="text-white">783K</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- box for count end-->

<!-- table start -->
<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example3" class="display" style="min-width: 845px">
				<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Department</th>
						<th>Gender</th>
						<th>Education</th>
						<th>Joining Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
						<td>Tiger Nixon</td>
						<td>Architect</td>
						<td>Male</td>
						<td>M.COM., P.H.D.</td>
						<td>2011/04/25</td>
						<td>
							<div class="d-flex">
								<a href="table-datatable-basic.html#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
								<a href="table-datatable-basic.html#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- table end -->

<!-- Content body end -->
<?php include "include/footer.php"; ?>