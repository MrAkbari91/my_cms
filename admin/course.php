<?php include "include/header.php"; ?>

<!-- Content body start -->


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Courses</h4>
            <a class="btn btn-info" href="add_course.php">Add Course <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="example3" class="display" style="min-width: 845px">
                    <?php
                    if (isset($_GET['activate_status']) && $_GET['activate_status'] == "success") { ?>
                        <p class="text-center alert alert-success solid alert-dismissible fade show"> Course activate Successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['activate_status']) && $_GET['activate_status'] == "failed") { ?>
                        <p class="text-center alert alert-danger solid alert-dismissible fade show">Can't activate Course!</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['deactivate_status']) && $_GET['deactivate_status'] == "success") { ?>
                        <p class="text-center alert alert-success solid alert-dismissible fade show"> Course deactivate successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['deactivate_status']) && $_GET['deactivate_status'] == "failed") { ?>
                        <p class="text-center alert alert-danger solid alert-dismissible fade show"> Course Delete Failed!</p>
                    <?php    }
                    ?>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Course Name</th>
                            <th>Course Description</th>
                            <th>Author</th>
                            <th>Duration</th>
                            <th>Original Price</th>
                            <th>Price</th>
                            <th>Created Date</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM courses";
                        $result = mysqli_query($con, $sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><img class="rounded-circle" width="60" src="<?= $row['img']; ?>" alt=""></td>
                                <td><?= $row['course_name']; ?></td>
                                <td><?= $row['courses_desc']; ?></td>
                                <td><?= $row['author']; ?></td>
                                <td><?= $row['duration']; ?></td>
                                <td><?= $row['original_price']; ?></td>
                                <td><?= $row['price']; ?></td>
                                <td><?= $row['created_date']; ?></td>
                                <td><?= $row['updated_date']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="update_course.php?from=course&id=<?= $row['id']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <?php if ($row['is_active'] == 0) { ?>
                                            <a href="query.php?from=course&type=active&id=<?= $row['id']; ?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-toggle-off"></i></a>
                                        <?php } else { ?>
                                            <a href="query.php?from=course&type=delete&id=<?= $row['id']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-toggle-on"></i></a>
                                        <?php }  ?>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- table end -->
</div>
</div>

<!-- Content body end -->


<script>
    function toggle_active(id) {
        var id = id;
        $.ajax({
            url: "query.php?type=delete&from=course",
            type: "post",
            data: {
                course_id: id
            },
            success: function(result) {
                if (result == 1) {
                    alert("ok");
                } else {
                    alert("no");
                }
            }
        });
    }
</script>
<?php include "include/footer.php"; ?>