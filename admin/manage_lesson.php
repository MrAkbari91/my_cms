<?php include "include/header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM lesson where course_id=$id";
    $result = mysqli_query($con, $sql);
    $row = $result->fetch_assoc();

    // $course_id=  $row['course_id'];
    // var_dump($row['course_id']);die();

    $course_sql = "SELECT * FROM courses where id=$id";
    $course_result = mysqli_query($con, $course_sql);
    $course_row = $course_result->fetch_assoc();
}

?>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><b><a href="lessons.php"> <?= $course_row['course_name']; ?> </a> </b> </h3>
            <a class="btn btn-info" href="add_lesson.php?course_id=<?= $course_row['id']; ?>">Add Lesson <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <?php
                    if (isset($_GET['delete_status']) && $_GET['delete_status'] == "success") { ?>
                        <p class="text-center alert alert-success"> lesson Delete successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['delete_status']) && $_GET['delete_status'] == "failed") { ?>
                        <p class="text-center alert alert-danger"> can't Delete lession</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['active_status']) && $_GET['active_status'] == "success") { ?>
                        <p class="text-center alert alert-success"> lesson active successfully</p>
                    <?php    }
                    ?>
                    <?php
                    if (isset($_GET['active_status']) && $_GET['active_status'] == "failed") { ?>
                        <p class="text-center alert alert-danger"> can't active lession</p>
                    <?php    }
                    ?>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Lesson Name</th>
                            <th>lesson Description</th>
                            <th>Lesson link</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM lesson where course_id = $id";
                        $result = mysqli_query($con, $sql);
                        while ($row = $result->fetch_assoc()) {
                            // var_dump($row);die();
                        ?>

                            <tr>
                                <td><?= $row['lesson_id']; ?></td>
                                <!-- <th>
                                    <img class="rounded-circle" width="60" src="<?= $row['img']; ?>" alt="img">
                                </th> -->
                                <td><?= $row['lesson_name']; ?></td>
                                <td><?= $row['lesson_description']; ?></td>
                                <td><?= $row['lesson_link']; ?></td>
                                <td><?= $row['lesson_description']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="update_lesson.php?from=course&lesson_id=<?= $row['lesson_id']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <?php if ($row['is_active'] == 0) { ?>
                                            <a href="query.php?from=lesson&type=active&course_id=<?=$row['course_id'];?>&lesson_id=<?= $row['lesson_id']; ?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-toggle-off"></i></a>
                                        <?php } else { ?>
                                            <a href="query.php?from=lesson&type=delete&course_id=<?=$row['course_id'];?>&lesson_id=<?= $row['lesson_id']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-toggle-on"></i></a>
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
<!-- <?php
        //         }
        //     }
        // }

        ?> -->






<?php include "include/footer.php"; ?>