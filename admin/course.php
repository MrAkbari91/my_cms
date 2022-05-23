<?php include "include/header.php";?>

<!-- Content body start -->


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Courses</h4>
                        <a class="btn btn-info" href="add_course.php">Add Course <span class="btn-icon-end"><i class="fa fa-plus color-info"></i></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table id="example3" class="display" style="min-width: 845px">
                            <?php
                            if (isset($_GET['status']) && $_GET['update_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Course update successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['update_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Course update Failed!</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "success") { ?>
                                <p class="alert alert-success solid alert-dismissible fade show"> Course deleted successfully</p>
                            <?php    }
                            ?>
                            <?php
                            if (isset($_GET['status']) && $_GET['delete_status'] == "failed") { ?>
                                <p class="alert alert-danger solid alert-dismissible fade show"> Course Delete Failed!</p>
                            <?php    }
                            ?>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Course Name</th>
                                        <th>Course Description</th>
                                        <th>Author</th>
                                        <th>Duration</th>
                                        <th>Original Price</th>
                                        <th>Price</th>
                                        <th>Created Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM courses where is_active=1";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><img class="rounded-circle" width="60" src="<?= $row['img'];?>" alt=""></td>
                                            <td><?= $row['course_name'];?></td>
                                            <td><?= $row['courses_desc'];?></td>
                                            <td><?= $row['author'];?></td>
                                            <td><?= $row['duration'];?></td>
                                            <td><?= $row['original_price'];?></td>
                                            <td><?= $row['price'];?></td>
                                            <td><?= $row['is_created'];?></td>
                                            <td><?= $row['is_update'];?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="update_course.php?from=course&id=<?= $row['id'];?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="query.php?from=course&type=delete&id=<?= $row['id'];?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
        </div>
        <!-- table end -->
    </div>
</div>

<!-- Content body end -->


<script>
    function toggle_active(id){
        var id=id;
        $.ajax({
            url:"query.php?type=delete&from=course",
            type:"post",
            data:{course_id:id},
            success:function(result){
                if(result==1){
                    alert("ok");
                }else{
                    alert("no");
                }
            }
        });
    }
</script>
<?php include "include/footer.php";?>