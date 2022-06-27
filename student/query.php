<?php
session_start();
include "../dbcon.php";


// student update 
if (isset($_POST['update_profile'])) {
    $sid = $_POST['sid'];
    // CHecking for Empty Fields
    if (($_POST['name'] == "") || ($_POST['email'] == "")  || ($_POST['dob'] == "") || ($_POST['phone'] == "")) {
        header("Location: editstudent.php?status=fillfild");
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $date = date("Y-m-d");
        
        $img = $_FILES['student_img']['name'];
        $img_temp = $_FILES['student_img']['tmp_name'];
        $img_folder = '../images/student_img/' . $img;

        if ($img == "") {
            $query = "UPDATE student set sname ='$name', email ='$email', phone=$phone, dob='$dob', updated_date='$date' where sid = $sid;";
            $result = $con->query($query);
            if ($result) {
                $_SESSION['email']=$email;
                header("Location: editstudent.php?update_status=success");
            } else {
                header("Location: editstudent.php?update_status=failed");
            }
        } else {
            $query = "UPDATE student set sname ='$name', email ='$email', img='$img_folder', phone=$phone, dob='$dob', updated_date='$date' where sid = $sid;";            
            $result = $con->query($query);
            if ($result) {
                $_SESSION['email']=$email;

                move_uploaded_file($img_temp, $img_folder);
                header("Location: editstudent.php?update_status=success");
            } else {
                header("Location: editstudent.php?update_status=failed");
            }
        }
    }
}



// password update
if (isset($_POST['update_password'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    // CHecking for Empty Fields
    if (($_POST['password'] == "") || ($_POST['new_password'] == "")) {
        header("Location: changepassword.php?status=fillfild");
    } else {
        $sql = "SELECT email,pwd FROM student WHERE email='" . $email . "'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        if ($row['pwd'] == $password) {
            $query = "UPDATE student set pwd ='$new_password'where email='" . $email . "'";
            $result = $con->query($query);
            if ($result) {
                header("Location: changepassword.php?update_status=success");
            } else {
                header("Location: changepassword.php?update_status=failed");
            }
        } else {
            header("Location: changepassword.php?update_status=failed");
        }
    }
}




// feedback
// var_dump($_POST);die();
if(isset($_POST['feedback_submit'])){
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO feedback (student_email, feedback) VALUES ('$email','$feedback')";
    $result = $con->query($sql);
    if ($result == TRUE) {
        header("Location: feedback.php?status=success");
    }else{
        header("Location: feedback.php?status=failed");

    }
}
?>