<?php include 'include/header.php';
?>

<!-- Content body start -->


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
                if (isset($_GET['update_status']) && $_GET['update_status'] == "success") { ?>
                    <p class="text-center alert alert-success solid alert-dismissible fade show"> Student update successfully</p>    
                <?php } ?>
                <?php
                if (isset($_GET['update_status']) && $_GET['update_status'] == "failed") { ?>
                    <p class="text-center alert alert-danger solid alert-dismissible fade show"> Student update Failed!</p>
                <?php } ?>
                <?php
                if (isset($_GET['activate_status']) && $_GET['activate_status'] == "success") { ?>
                    <p class="text-center alert alert-success solid alert-dismissible fade show"> Student activate  Successfully</p>
                <?php    }
                ?>
                <?php
                if (isset($_GET['activate_status']) && $_GET['activate_status'] == "failed") { ?>
                    <p class="text-center alert alert-danger solid alert-dismissible fade show">Can't activate Student!</p>
                <?php    }
                ?>
                <?php
                if (isset($_GET['deactivate_status']) && $_GET['deactivate_status'] == "success") { ?>
                    <p class="text-center alert alert-success solid alert-dismissible fade show"> Student deactivate successfully</p>
                <?php    }
                ?>
                <?php
                if (isset($_GET['deactivate_status']) && $_GET['deactivate_status'] == "failed") { ?>
                    <p class="text-center alert alert-danger solid alert-dismissible fade show"> Student Delete Failed!</p>
                <?php    }
                ?>

                <div id="status"></div>
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Roll no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Password</th>
                            <th>Created Date</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM student";
                        $result = mysqli_query($con, $sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <th>
                                    <img class="rounded-circle d_img" width="60" src="<?= $row['img']; ?>" alt="img">
                                </th>
                                <th><?= $row['sid']; ?></th>
                                <th><?= $row['sname']; ?></th>
                                <th><?= $row['email']; ?></th>
                                <th><?= $row['phone']; ?></th>
                                <th><?= $row['dob']; ?></th>
                                <th><?= $row['pwd']; ?></th>
                                <th><?= $row['created_date']; ?></th>
                                <th><?= $row['updated_date']; ?></th>
                                <td>
                                    <div class="d-flex">
                                        <a href="update_student.php?from=student&sid=<?= $row['sid']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <!-- <a href="query.php?from=student&type=delete&sid=" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> -->
                                        <?php if($row['is_active']==0) {?>
                                             <a href="query.php?from=student&type=active&sid=<?= $row['sid']; ?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-toggle-off"></i></a>
                                       <?php }else{?>
                                            <a href="query.php?from=student&type=delete&sid=<?= $row['sid']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-toggle-on"></i></a>
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


<!-- Content body end -->

<?php include 'include/footer.php'; ?>