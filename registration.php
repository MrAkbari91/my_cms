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