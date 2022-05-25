<?php
if (!isset($_SESSION)) {
    session_start();
}
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

    if(isset($_POST['checkregbtn']) && isset($_POST['rname']) && isset ($_POST['remail'])&& isset($_POST['rpwd'])){
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
    
    if(!isset($_SESSION['studentlogin'])){
        if(isset($_POST['checkloginemail']) && isset($_POST['email']) && isset ($_POST['pwd'])){
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $sql ="SELECT * FROM student WHERE email='".$email."' AND pwd='".$pwd."' and is_active=1";
            $result =$con->query($sql);
            $row=$result->num_rows;
           
            if($row===1){
                $_SESSION['studentlogin']=true;
                $_SESSION['email']=$email;
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
            $sql ="SELECT email,pwd FROM adminlogin WHERE email='".$adminemail."' AND pwd='".$adminpwd."'AND is_active=1";
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
