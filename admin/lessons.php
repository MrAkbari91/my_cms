<?php include "include/header.php"; ?>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><b>Courses </b> </h3>
            <!-- <a class="btn btn-info" href="add_lesson.php">Add Lesson <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span> -->
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">

                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
                        <p class="text-center alert alert-success"> lesson Added successfully</p>
                    <?php    }
                    ?>

                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
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
                                <td><?= $row['id']; ?></td>
                                <th>
                                    <img class="rounded-circle" width="60" src="<?= $row['img']; ?>" alt="img">
                                </th>
                                <td><?= $row['course_name']; ?></td>
                                <td><?= $row['courses_desc']; ?></td>
                                <td><?= $row['author']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="manage_lesson.php?id=<?= $row['id']; ?>" class="btn btn-primary shadow btn-xs sharp me-1 action_btn">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="query.php?from=lesson&type=delete&id=<?= $row['id']; ?>" class="btn btn-danger shadow btn-xs sharp action_btn">
                                            <i class="fa fa-trash"></i>
                                        </a>
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