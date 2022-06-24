<!-- start header -->
<?php
include('include/header.php');
if (isset($_GET['course_id'])) {
    $id = $_GET['course_id'];
}

?>
<!-- end header -->



<!-- img start -->
<!-- <div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/course1.jpg" alt="bg img" class="w-100 image">
    </div>
</div> -->

<!-- img end -->

<?php

$sql = "SELECT * FROM courses where id=$id";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();

?>
<!-- start main containt -->
<div class="container mt-8">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= str_replace('..', '.', $row['img']); ?>" alt="img" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">

                <h5 class="card-title">Course Name : <?= $row['course_name']; ?></h5>
                <p class="card-text"><?= $row['courses_desc']; ?></p>
                <p class="card-text">Duration: <?= $row['duration']; ?></p>
                <!-- <form action="chackout.php" method="post"> -->
                    <p class="card-text d-inline">Price: <small><del>&#8377 <?= $row['original_price']; ?>
                        </del></small><span class="font-weight-bolder">&#8377 <?= $row['price']; ?></span>
                    </p>
                    <!-- input -->
                    <a href="chackout.php?course_id=<?=$row['id'];?>" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</a>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_lesson = "SELECT * FROM lesson where course_id=$id";
                $result_lesson = mysqli_query($con, $sql_lesson);
                $num = 0;
                while ($row_lesson = $result_lesson->fetch_assoc()) {
                    $num++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $num; ?></th>
                        <td><?= $row_lesson['lesson_description']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- end main containt -->

<!-- start footer -->
<?php
include('include/footer.php')
?>
<!-- end footer -->