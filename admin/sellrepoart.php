<?php include "include/header.php"; ?>

<style>
    .form-control {
        display: inline-block !important;
        width: 30% !important;
    }
    .card-header{
        border-bottom: none!important;
    }
</style>

<div class="col-xl-8 col-xxl-6">
    <div class="card">
        <div class="card-header pb-0 border-0">
            <h5 class="mb-0 text-black fs-20">Sell Report</h5>
        </div>
        <div class="card-body">
            <form action="">
                <input type="date" name="startdate" id="startdate" class="form-control input-default mx-3">
                <input type="date" name="enddate" id="enddate" class="form-control input-default mx-3">
                <input type="submit" name="sellreport" class="btn btn-primary mx-3">
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['sellreport'])) {
    $start = $_REQUEST['startdate'];
    $end = $_REQUEST['enddate'];
    $sql = "SELECT * FROM courseorders where payment_date between '$start' and '$end'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
?>
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Order id</th>
                                    <th>course id</th>
                                    <th>Email</th>
                                    <th>Payment status</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $row['order_id']; ?></td>
                                        <td><?= $row['course_id']; ?></td>
                                        <td><?= $row['user']; ?></td>
                                        <td><?= $row['status']; ?></td>
                                        <td><?= $row['payment_date']; ?></td>
                                        <td><?= $row['txnamount']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">No Data Found</h4>
                </div>
            </div>
        </div>
<?php
    }
}


?>
<?php include "include/footer.php"; ?>