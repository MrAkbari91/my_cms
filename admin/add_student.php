<?php include "include/header.php"; ?>

<!-- Content body start -->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Student</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="query.php" enctype="multipart/form-data">
                                <?php
                                if (isset($_GET['status']) && $_GET['status'] == "fillfild") { ?>
                                    <p class="text-center alert alert-danger"> Fill All Fild</p>
                                <?php    }
                                ?>
                                <?php
                                if (isset($_GET['status']) && $_GET['status'] == "AlreadyExists ") { ?>
                                    <p class="text-center alert alert-danger"> Student Already Exists</p>
                                <?php    }
                                ?>
                                <?php
                                if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
                                    <p class="text-center alert alert-success"> Student Added successfully</p>
                                <?php    }
                                ?>
                                <?php
                                if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
                                    <p class="text-center alert alert-danger"> Student Add Failed!</p>
                                <?php    }
                                ?>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Student Name" name="student_name">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" placeholder="Email" name="student_email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Occupation</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="occupation" name="occupation">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="input-group custom_file_input">
                                    <label class="col-sm-3 col-form-label">Course Banner image</label>
                                    <div class="input-group custom_file_input">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="student_img" id="student_img">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <span class="col-sm-3"></span>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-success my-5" id="add_student" name="add_student" value="Add Student">
                                        <a href="student.php" class="btn btn-danger my-5">Close</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content body end -->

<?php include "include/footer.php"; ?>