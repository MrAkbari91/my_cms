<!-- start header -->
<?php
    include('include/header.php')
?>
<!-- end header -->



<!-- img start -->
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/course1.jpg" alt="bg img" class="w-100 image">
	</div>
</div>

<!-- img end -->


<!-- start main containt -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="image/1.png" alt="img" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name : Learn somthing</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam obcaecati magni dolores aspernatur. Debitis aut, neque quis nisi sapiente sunt sit facere distinctio totam officiis!</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                </form>
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
                <tr>
                    <th scope="row">1</th>
                        <td>Introduction</td>
                </tr>
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