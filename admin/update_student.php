<?php include "include/header.php";

if ($_GET['from'] == "student") {
    $sid = $_GET['sid'];
    $sql = "SELECT * FROM student WHERE sid=$sid";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!-- Content body start -->

<div class="col-xl-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Student</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="query.php" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "fillfild") { ?>
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
                        <label class="col-sm-3 col-form-label">Sid</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sid" value="<?php if (isset($row['sid'])) {
                                                                                            echo $row['sid'];
                                                                                        } ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if (isset($row['sid'])) {
                                                                                echo $row['sname'];
                                                                            } ?>" name="update_student_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?php if (isset($row['sid'])) {
                                                                                echo $row['email'];
                                                                            } ?>" name="update_student_email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if (isset($row['sid'])) {
                                                                                echo $row['occ'];
                                                                            } ?>" name="update_occupation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" value="<?php if (isset($row['sid'])) {
                                                                                    echo $row['pwd'];
                                                                                } ?>" name="update_password">
                        </div>
                    </div>
                    <div class="input-group custom_file_input">
                        <label class="col-sm-3 col-form-label">Course Banner image</label>
                        <div class="input-group custom_file_input">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="update_student_img" id="update_student_img" value="<?php if (isset($row['sid'])) {
                                                                                                                                                        echo $row['img'];
                                                                                                                                                    } ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="update_student" name="update_student" value="Update">
                            <a href="student.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content body end -->

<?php include "include/footer.php"; ?>