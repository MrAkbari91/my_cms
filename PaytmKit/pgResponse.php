<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/cms/dbcon.php";

// header("Pragma: no-cache");
// header("Cache-Control: no-cache");
// header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
// var_dump($paramList, $paytmChecksum, $isValidChecksum);die();


if ($isValidChecksum == "TRUE") {
	// var_dump($_SESSION);die();

	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		
		echo "<b>Transaction status is success</b>" . "<br/>";
		if (isset($_POST['ORDERID']) && isset($_POST['TXNAMOUNT'])) {

			$order_id = $_POST['ORDERID'];
			$mid = $_POST['MID'];
			$txnid = $_POST['TXNID'];
			$txnamount = $_POST['TXNAMOUNT'];
			$mode = $_POST['PAYMENTMODE'];
			$payment_date = $_POST['TXNDATE'];
			$status = $_POST['STATUS'];
			$responcecode = $_POST['RESPCODE'];
			// $responce_msg = $_POST['RESPMSG '];
			$getwayname = $_POST['GATEWAYNAME'];
			$bankid = $_POST['BANKTXNID'];
			$bankname = $_POST['BANKNAME'];
			$user = $_SESSION['data']['email'];
			$course_id = $_SESSION['course_id'];
			// var_dump($course_id, $user, $_SESSION);die();
			$sql = "INSERT INTO courseorders ( order_id , mid, txnid, txnamount , mode , payment_date , status , responcecode,  getwayname, bankid, bankname, user, course_id) VALUES ('$order_id','$mid','$txnid', $txnamount, '$mode','$payment_date','$status', $responcecode, '$getwayname', $bankid ,'$bankname', '$user', $course_id)";
			$result = $con->query($sql);
			if ($result == TRUE) {
				echo "<h2>Redirecting to My profile....</h2>";
				echo "<script>setTimeout(()=>{
					window.location.href='../student/mycourse.php';
				},2500)</script>";
			}

		}
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	} else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	// if (isset($_POST) && count($_POST) > 0) {
	// 	foreach ($_POST as $paramName => $paramValue) {
	// 		echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
} else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>