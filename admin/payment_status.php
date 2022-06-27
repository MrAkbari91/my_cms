<?php include "include/header.php"; ?>
<?php


// following files need to be included
require_once("../PaytmKit/lib/config_paytm.php");
require_once("../PaytmKit/lib/encdec_paytm.php");
$ORDER_ID = "";
$requestParamList = array();
$responseParamList = array();

if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

    // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
    $ORDER_ID = $_POST["ORDER_ID"];

    // Create an array having all required parameters for status query.
    $requestParamList = array("MID" => PAYTM_MERCHANT_MID, "ORDERID" => $ORDER_ID);

    $StatusCheckSum = getChecksumFromArray($requestParamList, PAYTM_MERCHANT_KEY);

    $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

    // Call the PG's getTxnStatusNew() function for verifying the transaction status.
    $responseParamList = getTxnStatusNew($requestParamList);
}

?>

<h2>Transaction status query</h2>


<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Row</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>" placeholder="ORDER_ID">
                        </div>
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <input value="Status Query" class="btn btn-primary" type="submit" onclick="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
if (isset($responseParamList) && count($responseParamList) > 0) {
?>
    <h2>Response of status query:</h2>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Payments Queue</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <?php
                            foreach ($responseParamList as $paramName => $paramValue) {
                            ?>
                                <tr>
                                    <td style="border: 1px solid"><label><?php echo $paramName ?></label></td>
                                    <td style="border: 1px solid"><?php echo $paramValue ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    
<?php
}
?>
</form>

<?php include "include/footer.php"; ?>