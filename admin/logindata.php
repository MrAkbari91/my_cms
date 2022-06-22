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

            $sql ="SELECT * FROM adminlogin WHERE email='".$adminemail."' AND pwd='".$adminpwd."' and is_active=1";
            $result =$con->query($sql);
            $nrow=$result->num_rows;
            if($nrow===1){
                $row=$result->fetch_assoc();
                $_SESSION['adminlogin']=true;
                $_SESSION['data']=$row;
                echo json_encode($nrow);
            } else if($nrow === 0){
                echo json_encode($nrow);
            }
        }
    }
    
?>