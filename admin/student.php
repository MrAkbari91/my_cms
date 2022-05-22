<?php include 'include/header.php';
?>

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


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Students info</h4>
                        <a class="btn btn-info" href="add_student.php">Add Student <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            if (isset($_GET['status']) && $_GET['update_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Student update successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['update_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Student update Failed!</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Student deleted successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Student Delete Failed!</p>
                            <?php    }
                            ?>
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>password</th>
                                        <th>Occupation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM student where is_active=1";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <th>
                                                <img class="rounded-circle d_img" width="35" src="<?= $row['img']; ?>" alt="img">
                                            </th>
                                            <th><?= $row['sname']; ?></th>
                                            <th><?= $row['email']; ?></th>
                                            <th><?= $row['pwd']; ?></th>
                                            <th><?= $row['occ']; ?></th>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="update_student.php?from=student&sid=<?= $row['sid']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="query.php?from=student&type=delete&sid=<?= $row['sid']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
    </div>
</div>

<!-- Content body end -->

<?php include 'include/footer.php'; ?>