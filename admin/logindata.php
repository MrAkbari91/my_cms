<?php
if (!isset($_SESSION)) {
    session_start();
}
    include_once('../dbcon.php');
    // admin login

    if(!isset($_SESSION['adminlogin'])){
        if(isset($_POST['checkloginemail']) && isset($_POST['adminemail']) && isset ($_POST['adminpwd'])){
            $adminemail=$_POST['adminemail'];
            $adminpwd=$_POST['adminpwd'];

            $sql ="SELECT * FROM adminlogin WHERE email='".$adminemail."' AND pwd='".$adminpwd."'";
            $result =$con->query($sql);
            $row=$result->num_rows;
            if($row===1){
                $_SESSION['adminlogin']=true;
                $_SESSION['adminemail']=$adminemail;
                echo json_encode($row);
            } else if($row === 0){
                echo json_encode($row);
            }
        }
    }
    
?>