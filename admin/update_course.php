<?php include "include/header.php";


$id = $_GET['id'];
$sql = "SELECT * FROM courses WHERE id=$id";
$result = $con->query($sql);
$row = $result->fetch_assoc();

?>

<!-- Content body start -->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Courses</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="query.php" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Id</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="id" id="id" value="<?=$row['id'];?>" readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_course_name" id="update_course_name" value="<?=$row['course_name'];?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_course_desc" id="update_course_desc" value="<?=$row['courses_desc'];?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Author</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_course_aut" id="update_course_aut" value="<?=$row['author'];?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Duration</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_duration" id="update_duration" value="<?=$row['duration'];?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Original Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_original_price" id="update_original_price" value="<?=$row['original_price'];?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Course Selling Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="update_selling_price" id="update_selling_price" value="<?=$row['price'];?>">
                                    </div>
                                </div>
                                <div class="input-group custom_file_input">
                                    <label class="col-sm-3 col-form-label">Course Banner image</label>
                                    <div class="input-group custom_file_input">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="update_course_img" id="update_course_img">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <span class="col-sm-3"></span>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-success my-5" id="update_course" name="update_course" value="Update">
                                        <a href="course.php" class="btn btn-danger my-5">Close</a>
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