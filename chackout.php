<!-- start header -->
<?php
// session_start();
include('include/header.php');
if (isset($_SESSION['studentlogin'])) {
	$data = $_SESSION['data'];
} else {
	header("location:login.php");
}

?>
<!-- end header -->



<!-- start footer -->
<?php
include('include/footer.php')
?>
<!-- end footer -->