<?php
include "include/header.php";
// var_dump($row);die();
?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Feedback</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>user image</th>
                            <th>user email</th>
                            <th>feedback</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT feedback.feedback_id, student.img, feedback.student_email , feedback.feedback, feedback.created_date FROM feedback join student on student.email = feedback.student_email";
                        $result = mysqli_query($con, $sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?=$row['feedback_id'];?></td>
                                <td><img class="rounded-circle d_img" width="60" src="<?= $row['img']; ?>" alt=""></td>
                                <td><?= $row['student_email']; ?></td>
                                <td><?= $row['feedback']; ?></td>
                                <td><?= $row['created_date']; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>