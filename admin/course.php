<?php include "include/header.php"; ?>

<!-- Content body start -->

<div class="content-body">
    <div class="container-fluid">
        <!-- <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Student</a></li>
                        </ol>
                    </div>
                </div> -->
        <!-- row -->

        <!-- table start -->
        <div class="row">
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
                            if (isset($_GET['status']) && $_GET['update_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Course update successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['update_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Course update Failed!</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Course deleted successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Course Delete Failed!</p>
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
                                    $sql = "SELECT * FROM courses where is_active=1";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><img class="rounded-circle" width="35" src="<?= $row['img']; ?>" alt=""></td>
                                            <td><?= $row['course_name']; ?></td>
                                            <td><?= $row['courses_desc']; ?></td>
                                            <td><?= $row['author']; ?></td>
                                            <td><?= $row['duration']; ?></td>
                                            <td><?= $row['original_price']; ?></td>
                                            <td><?= $row['price']; ?></td>
                                            <td><?= $row['is_created']; ?></td>
                                            <td><?= $row['is_update']; ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="update_course.php?from=course&id=<?= $row['id']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="query.php?from=course&type=delete&id=<?= $row['id']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
        </div>
        <!-- table end -->
    </div>
</div>

<!-- Content body end -->

<?php include "include/footer.php"; ?>