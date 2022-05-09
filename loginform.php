<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="login">
					<div class="form-group">
						<i class="fas fa-envelope"></i><label for="lemail" class="pl-2 font-weight-bold">Email</label>
						<input type="email" class="form-control" name="lemail" id="lemail" placeholder="Email">

					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="lpwd" class="pl-2 font-weight-bold">Password</label>
						<input type="password" class="form-control" name="lpwd" id="lpwd" placeholder="Password">
					</div>
				</form>
			</div>
			<div class="modal-footer">
                <span id="statusmsglogin"></span>
				<button type="button" class="btn btn-primary" id="loginbtn" onclick="login()">Login</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- admin login -->
<div class="modal fade" id="adminloginModal" tabindex="-1" aria-labelledby="adminloginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="adminloginModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="alogin">
					<div class="form-group">
						<i class="fas fa-envelope"></i><label for="adminmail" class="pl-2 font-weight-bold">Email</label>
						<input type="email" class="form-control" name="adminemail" id="adminemail" placeholder="Email">

					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="adminpwd" class="pl-2 font-weight-bold">Password</label>
						<input type="password" class="form-control" name="adminpwd" id="adminpwd" placeholder="Password">
					</div>
				</form>
			</div>
			<div class="modal-footer">
			<span id="adminloginmsg"></span>
				<button type="button" class="btn btn-primary" id="loginbtn" onclick="adminlogin()">Login</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- admin login -->
