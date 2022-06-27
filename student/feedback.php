<?php
include "include/header.php";
// var_dump($row);die();
?>

<?php
if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
    <p class="text-center solid alert alert-success"> feedback sent succsesfully</p>
<?php    }
?>

<?php
if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
    <p class="text-center solid alert alert-danger"> feedback sent failed</p>
<?php    }
?>
<div class="col-xl-8 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="query.php">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?= $row['email']; ?>" name="email" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">feedback</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" placeholder="enter feedback" name="feedback" required=""></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" name="feedback_submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>