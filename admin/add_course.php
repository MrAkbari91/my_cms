<?php include "include/header.php"; ?>
<!-- Content body start -->

<div class="col-xl-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Courses</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="query.php" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "fillfild") { ?>
                        <p class="text-center alert alert-danger"> Fill All Fild</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
                        <p class="text-center alert alert-success"> Course Added successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
                        <p class="text-center alert alert-danger"> Course Add Failed!</p>
                    <?php    }
                    ?>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Course Name" name="course_name" id="course_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Course Description" name="course_desc" id="course_desc">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Author</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Course Author" name="course_author" id="course_author">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Duration</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="duration" name="duration" id="duration">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Original Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="original price" name="original_price" id="original_price">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Course Selling Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Selling price" name="selling_price" id="selling_price">
                        </div>
                    </div>
                    <div class="input-group custom_file_input">
                        <label class="col-sm-3 col-form-label">Course Banner image</label>
                        <div class="input-group custom_file_input">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="course_img" id="course_img">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success my-5" id="add_course" name="add_course" value="Add course">
                            <a href="course.php" class="btn btn-danger my-5">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content body end -->

<?php include 'include/footer.php'; ?>