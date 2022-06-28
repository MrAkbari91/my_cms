<?php include "include/header.php"; ?>

<a href="mycourse.php">
    <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="me-3">
                        <i class="flaticon-381-book"></i>
                    </span>
                    <div class="media-body text-white text-end">
                        <h3 class="text-white mb-1">Courses</h3>
                        <?php
                        $email = $row['email'];
                        $sql = "SELECT count(*) as total FROM courseorders where user='$email';";
                        $result = $con->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        <h3 class="text-white"><?= $row['total']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>


<?php include "include/footer.php"; ?>