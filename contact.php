<!-- start header -->
<?php
include('include/header.php')
?>
<!-- end header -->
<style>
	#contact h4 {
		color: #fff;
	}

	#contact>div {
		align-items: center;
	}

	#hideDiv {
		position: fixed;
		right: 0;
		top: 90px;
	}
</style>

<?php
if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
	<div id="hideDiv">
		<div class="alert alert-success solid alert-dismissible fade show">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
				<polyline points="9 11 12 14 22 4"></polyline>
				<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
			</svg>
			<strong>Success!</strong> Message has been sent.
		</div>
	</div>
<?php    }
?>


<?php
if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
	<div id="hideDiv">
		<div class="alert alert-danger solid alert-dismissible fade show">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
				<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
				<line x1="15" y1="9" x2="9" y2="15"></line>
				<line x1="9" y1="9" x2="15" y2="15"></line>
			</svg>
			<strong>Error!</strong> Message sending failed.
		</div>
	</div>
<?php    }
?>
<div class="container mt-8" id="contact">
	<!-- contact us container -->
	<h2 class="text-center mb-4"> Contact Us</h2> <!-- contact us heading -->
	<div class="row">
		<!-- start contact us row -->
		<div class="col-xl-8 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Contact form</h4>
				</div>
				<div class="card-body">
					<div class="basic-form">
						<form method="post" action="mail.php">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" placeholder="Name">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">E-mail</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" placeholder="E-mail">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Subject</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="subject" placeholder="subject">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Message</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="message" placeholder="How can we help you?"></textarea>
								</div>
							</div>
							<div class="mb-3 row">
								<div class="col-sm-10">
									<input type="submit" name="mail" class="btn btn-primary" value="Send">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 stripe text-white text-center">
			<!-- start contract us 2nd column -->
			<h4>Unit</h4>
			<hr>
			<p>unit,
				Near surat<br>
				phone:+91 95864 75895<br>
				www.unit.com</p>
		</div> <!-- end contact us 2nd column -->
	</div> <!-- end contact us row -->
</div> <!-- end contact us container -->


<!-- start footer -->
<?php
include('include/footer.php')
?>
<!-- end footer -->


<script>
	$(function() {
		setTimeout(function() {
			$("#hideDiv").fadeOut(1500);
		}, 3000)

	})
</script>