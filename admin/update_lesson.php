<?php include "include/header.php";


$lesson_id = $_GET['lesson_id'];
$sql = "SELECT * FROM lesson WHERE lesson_id=$lesson_id";
$result = $con->query($sql);
$row = $result->fetch_assoc();

?>


<div class="col-xl-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Courses</h4>
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
                    if (isset($_GET['status']) && $_GET['update_status'] == "success") { ?>
                        <p class="text-center alert alert-success"> lesson Added successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['status']) && $_GET['update_status'] == "failed") { ?>
                        <p class="text-center alert alert-danger"> lesson Add Failed!</p>
                    <?php    }
                    ?>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="course_id" id="course_id" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];}?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="course_name" id="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];}?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">lession ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lesson_id" id="lesson_id" value="<?=$row['lesson_id'];?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">lesson Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lesson_name" id="lesson_name" value="<?=$row['lesson_name'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">lesson Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lesson_desc" id="lesson_desc" value="<?= $row['lesson_description'];?>">
                        </div>
                    </div>                    
                    <div class="input-group custom_file_input">
                        <label class="col-sm-3 col-form-label">lesson </label>
                        <div class="input-group custom_file_input"> 
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="lesson_link" id="lesson_link">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="update_lesson" name="update_lesson" value="Update">
                            <a href="lessons.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content body end -->

<?php include "include/footer.php"; ?>