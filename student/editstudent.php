<?php include "include/header.php";

$_SESSION['adminemail'] = $adminemail;

?>


<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="query.php" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['update_status']) && $_GET['update_status'] == "fillfild") { ?>
                        <p class="text-center alert-alt solid h3 alert alert-danger"> Fill All Fild</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['update_status']) && $_GET['update_status'] == "success") { ?>
                        <p class="text-center solid alert h3 alert-success"> Student Update successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['update_status']) && $_GET['update_status'] == "failed") { ?>
                        <p class="text-center solid alert h3 alert-danger"> Student Update Failed!</p>
                    <?php    }
                    ?>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sid" value="<?= $row['sid']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?= $row['sname']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?= $row['email']; ?>" name="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" value="<?= $row['dob']; ?>" name="dob">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $row['phone']; ?>" name="phone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $row['occ']; ?>" name="occupation">
                        </div>
                    </div>
                    <div class="input-group custom_file_input">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="input-group custom_file_input">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="student_img" id="student_img">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="update_profile" name="update_profile" value="update">
                            <a href="profile.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>