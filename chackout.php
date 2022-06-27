<!-- start header -->
<?php
session_start();
if (isset($_SESSION['studentlogin'])) {
	$login = $_SESSION['studentlogin'];
	$data = $_SESSION['data'];
	if (isset($_POST['id'])) {
		$_SESSION['course_id'] = $_POST['id'];
	}
	
	if (isset($_POST['price'])) {
		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

?>

		<!-- end header -->
		<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>

		<head>
			<title>Merchant Check Out Page</title>
			<meta name="GENERATOR" content="Evrsoft First Page">
			<!-- bootstrap css -->
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


			<!-- fa fa cdn -->
			<link rel="stylesheet" href="../css/all.min.css">
			<!-- custom css -->
			<link rel="stylesheet" href="css/style.css">
			<style>
				body {
					background: #f6f6f6;
				}

				.card {
					width: fit-content;
					margin: 30px auto;
					box-shadow: rgb(0 0 0 / 35%) 2px 0 20px 12px;
				}
			</style>
		</head>

		<body>
			<div class="card">
				<div class="card-body">
					<h1>Merchant Check Out Page</h1>
					<form method="post" action="PaytmKit/pgRedirect.php">
						<div class="form-group">
							<label>ORDER_ID::*</label>
							<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>" readonly>
						</div>
						<div class="form-group">
							<label>CUSTID ::*</label>
							<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?= $data['email']; ?>" readonly>
						</div>
						<div class="form-group">
							<input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
						</div>
						<div class="form-group">
							<input type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
						</div>
						<div class="form-group">
							<label>Amount*</label>
							<input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php if (isset($_POST['price'])) {echo $_POST['price'];} ?>" readonly>
						</div>
						<div class="form-group">
							<input value="CheckOut" type="submit" onclick="" class="btn btn-danger">
							<a href="courses.php" class="btn btn-warning">cancel</a>
						</div>

					</form>
				</div>
			</div>
		</body>

		</html>
<?php
	} else {
		header("location:courses.php");
	}
} else {
	header("location:login.php");
}
?>