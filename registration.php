<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="registrationModalLabel">Registration form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="registration">
					<div class="form-group">
						<i class="fas fa-user"></i><label class="pl-2 font-weight-bold">Name</label>
						<span id="msg1"></span>
						<input type="text" class="form-control" name="rname" id="rname" placeholder="Name">
					</div>
					<div class="form-group">
						<i class="fas fa-envelope"></i><label class="pl-2 font-weight-bold">Email</label>
						<span id="msg2"></span>
						<input type="email" class="form-control" name="remail" id="remail" placeholder="Email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label class="pl-2 font-weight-bold">Password</label>
						<span id="msg3"></span>
						<input type="password" class="form-control" name="rpwd" id="rpwd" placeholder="Password">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<span id="statusmsgreg"></span>
				<button type="button" class="btn btn-primary" id="regbtn" onclick="addstudent()" name="regbtn">Sign Up</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<!-- <!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">>
	<title>Register </title>
	<link href="css/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
	<div class="authincation h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-6">
					<div class="authincation-content">
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="auth-form">
									<h4 class="text-center mb-4">Sign up your account</h4>
									<form action="index.html">
										<div class="form-group">
											<label class="mb-1"><strong>Username</strong></label>
											<input type="text" class="form-control" placeholder="username">
										</div>
										<div class="form-group">
											<label class="mb-1"><strong>Email</strong></label>
											<input type="email" class="form-control" placeholder="hello@example.com">
										</div>
										<div class="form-group">
											<label class="mb-1"><strong>Password</strong></label>
											<input type="password" class="form-control" value="Password">
										</div>
										<div class="text-center mt-4">

											<span id="statusmsgreg"></span>
											<button type="button" class="btn btn-primary btn-block" id="regbtn" onclick="addstudent()" name="regbtn">Sign me up</button>
										</div>
									</form>
									<div class="new-account mt-3">
										<p>Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Required vendors -->
	<script src="css/vendor/global/global.min.js"></script>
	<script src="css/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/js/demo.js"></script>
</body>

</html> -->