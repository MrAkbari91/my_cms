<?php include "include/footer.php"; ?>

<!-- Content body start -->

<div class="col-xl-8 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Student</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Student Name" name="student_new_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" name="student_new_email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="occupation" name="new_occupation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Password" name="new_password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success" id="add_student" name="add_student">Sign in</button>
                            <a href="student.html" class="btn btn-danger">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content body end -->
<?php include "include/footer.php"; ?>