<!-- start header -->
<?php
    include('include/header.php')
?>
<!-- end header -->



<!-- img start -->
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/payment.jpg" alt="bg img" class="w-100 ">
	</div>
</div>

<!-- img end -->


<!-- start search bar  -->
<div class="container">
    <h2 class="text-center my-4"> Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label for="" class="offset-sm-3 col-form-lable">Order ID: </label>
            <div>
                <input type="text" name="search" id="searchtext" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" name="search" id="search" class="btn btn-primary mx-4" value="view">
            </div>
        </div>
    </form>
</div>
<!-- end search bar  -->



<!-- start footer -->
<?php
    include('include/footer.php')
?>
<!-- end footer -->