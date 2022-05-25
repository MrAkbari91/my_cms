<?php
session_start();
include "../dbcon.php";


// student update 
if (isset($_POST['update_profile'])) {
    $sid = $_POST['sid'];
    // CHecking for Empty Fields
    if (($_POST['name'] == "") || ($_POST['email'] == "") || ($_POST['occupation'] == "") || ($_POST['dob'] == "") || ($_POST['phone'] == "")) {
        header("Location: editstudent.php?status=fillfild");
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $occupation = $_POST['occupation'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $date = date("Y-m-d");
        
        $img = $_FILES['student_img']['name'];
        $img_temp = $_FILES['student_img']['tmp_name'];
        $img_folder = '../images/student_img/' . $img;

        if ($img == "") {
            $query = "UPDATE student set sname ='$name', email ='$email', occ ='$occupation', phone=$phone, dob='$dob', is_update='$date' where sid = $sid;";
            $result = $con->query($query);
            if ($result) {
                $_SESSION['email']=$email;
                header("Location: editstudent.php?update_status=success");
            } else {
                header("Location: editstudent.php?update_status=failed");
            }
        } else {
            $query = "UPDATE student set sname ='$name', email ='$email', occ ='$occupation', img='$img_folder', phone=$phone, dob='$dob', is_update='$date' where sid = $sid;";            
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


?>