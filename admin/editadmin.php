<?php include "include/header.php";

$_SESSION['adminemail'] = $adminemail;

$sql = "SELECT * FROM adminlogin;";
$result = $con->query($sql);
$row = $result->fetch_assoc();
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
                            <input type="hidden" class="form-control" name="id" value="<?= $row['id']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>">
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
                        <label class="col-sm-3 col-form-label">facebook</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $row['facebook']; ?>" name="facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $row['instagram']; ?>" name="instagram">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Skype</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $row['skype']; ?>" name="skype">
                        </div>
                    </div>
                    <div class="input-group custom_file_input">
                        <label class="col-sm-3 col-form-label">Course Banner image</label>
                        <div class="input-group custom_file_input">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="admin_img" id="admin_img">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" placeholder="New password" name="new_password">
                                    </div>
                                </div> -->
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="update_admin" name="update_admin" value="update">
                            <a href="profile.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>