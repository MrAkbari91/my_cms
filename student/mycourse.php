<?php
include "include/header.php";
?>
<style>
    .card .margin-center{
        margin: 0 auto;
    }
</style>

<h4>All course</h4>

<?php
if (isset($email)) {
    $sql = "SELECT co.order_id, c.id, c.course_name, c.duration, c.courses_desc, c.img, c.author, c.price, c.original_price from courseorders as co join courses as c on c.id = co.course_id where co.user = '$email' and c.is_active=1;";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // print_r($row);
?>

            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top img-fluid w-75 margin-center" src="<?= $row['img']; ?>" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title"><?= $row['course_name']; ?></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $row['courses_desc']; ?></p>
                        <p class="card-text text-dark"><a href="watchcourse.php?course_id=<?= $row['id']; ?>" class="btn btn-primary text-white font-weight-bolder float-right">Watch course</a></p>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo "<h2> no course purchase</h2>";
    }
}
?>

<?php include "include/footer.php"; ?>