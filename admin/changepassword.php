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
                <form action="query.php" method="post">
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "fillfild") { ?>
                        <p class="text-center alert-alt solid h3 alert alert-danger"> Fill All Fild</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['update_status']) && $_GET['update_status'] == "success") { ?>
                        <p class="text-center solid alert h3 alert-success"> Password Update successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['update_status']) && $_GET['update_status'] == "failed") { ?>
                        <p class="text-center solid alert h3 alert-danger"> Password Update Failed!</p>
                    <?php    }
                    ?>

                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="id" value="<?= $row['id']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" value="<?= $row['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="New Password" name="new_password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="update_password" name="update_password" value="update">
                            <a href="profile.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>