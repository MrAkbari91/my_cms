<?php include "include/header.php"; ?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Lessons</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    <div class="input-group search-area d-xl-inline-flex d-none">
                        <div class="input-group-append">
                            <button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search Course Lessons By Id..." name="checkid">
                    </div>
                    <input type="submit" class="btn btn-primary mx-5 mb-1" value="Search" name="search">
                </form>
            </div>
        </div>
    </div>
</div>


<?php

$sql = "SELECT id from courses";
$result = $con->query($sql);

while ($row = $result->fetch_assoc()) {
    if (isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['id']) {
        $sql = "SELECT * from courses where id = {$_REQUEST['checkid']}";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        if ($row['id'] == $_REQUEST['checkid']) {
            $_SESSION['course_id'] = $row['id'];
            $_SESSION['course_name'] = $row['course_name'];
?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><b>Courses ID:</b> <?php if (isset($row['id'])) {
                                                    echo $row['id'];
                                                } ?> </h3>
                        <h3><b>Course Name :</b> <?php if (isset($row['course_name'])) {
                                                        echo $row['course_name'];
                                                    } ?></h3>
                        <a class="btn btn-info" href="add_lesson.php">Add Lesson <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Lession Name</th>
                                        <th>Lesson Description</th>
                                        <th>Lession Link</th>
                                        <th>Created Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM lesson where course_id={$_REQUEST['checkid']}";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?= $row['lesson_id']; ?></td>
                                            <td><?= $row['lesson_name']; ?></td>
                                            <td><?= $row['lesson_description']; ?></td>
                                            <td><?= $row['lesson_link']; ?></td>
                                            <td><?= $row['is_created']; ?></td>
                                            <td><?= $row['is_update']; ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="update_lesson.php?from=lesson&lesson_id=<?=$row['lesson_id'];?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="query.php?from=lesson&type=delete&lesson_id=<?=$row['lesson_id'];?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
<?php
        }
    }
}

?>






<?php include "include/footer.php"; ?>