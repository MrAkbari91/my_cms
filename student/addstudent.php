<?php
// if (!isset($_SESSION)) {
//     session_start();
// }
    include_once('../dbcon.php');


    // email pelethi 6 k nati e check kare
    if(isset($_POST['checkemail']) && isset($_POST['remail'])){
        $remail=$_POST['remail'];
        $sql="SELECT email FROM student WHERE email='".$remail."'";
        $result=$con->query($sql);
        $row=$result->num_rows;
        echo json_encode($row);
    }


    // insert students

    if(isset($_POST['regbtn']) && isset($_POST['rname']) && isset ($_POST['remail'])&& isset($_POST['rpwd'])){
        
        $rname=$_POST['rname'];
        $remail=$_POST['remail'];
        $rpwd=$_POST['rpwd'];

        $sql = "INSERT INTO student(sname,email, pwd) VALUES ('$rname','$remail','$rpwd')";

        if($con->query($sql)== TRUE){
            echo json_encode("OK");
        }else{
            echo json_encode("Failed");
        }
    }


    // login student
    if(!isset($$_SESSION['is_login'])){
        if(isset($_POST['loginemail']) && isset($_POST['lemail']) && isset ($_POST['lpwd'])){
            $lemail=$_POST['lemail'];
            $lpwd=$_POST['lpwd'];

            $sql ="SELECT email,pwd FROM student WHERE email='".$lemail."' AND pwd='".$lpwd."'";

            $result =$con->query($sql);

            $row=$result->num_rows;

            if($row===1){
                $_SESSION['is_login']=true;
                $_SESSION['lemail']=$lemail;
                echo json_encode($row);
            } else if($row === 0){
                echo json_encode($row);
            }
        }
    }

    // // admin login

    if(!isset($_SESSION['adminlogin'])){
        if(isset($_POST['adlog']) && isset($_POST['adminemail']) && isset ($_POST['adminpwd'])){
            $adminemail=$_POST['adminemail'];
            $adminpwd=$_POST['adminpwd'];

            $sql ="SELECT email,pwd FROM adminlogin WHERE email='".$adminemail."' AND pwd='".$adminpwd."'";

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