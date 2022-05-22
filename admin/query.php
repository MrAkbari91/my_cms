<?php
include "../dbcon.php";


// 
// 
// course query
// add course
// 
// 

if (isset($_POST['add_course'])) {
    // CHecking for Empty Fields
    if (($_POST['course_name'] == "") || ($_POST['course_desc'] == "") || ($_POST['course_author'] == "") || ($_POST['duration'] == "") || ($_POST['original_price'] == "") || ($_POST['selling_price'] == "")) {
        header("Location: add_course.php?status=fillfild");
    } else {
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $duration = $_POST['duration'];
        $original_price = $_POST['original_price'];
        $selling_price = $_POST['selling_price'];

        $course_img = $_FILES['course_img']['name'];
        $course_img_temp = $_FILES['course_img']['tmp_name'];
        $course_img_folder = 'images/course_img/' . $course_img;

        $sql = "INSERT INTO courses ( course_name , courses_desc, author , img , duration , price , original_price) VALUES ('$course_name','$course_desc','$course_author','$course_img_folder','$duration','$selling_price','$original_price')";

        $result = $con->query($sql);
        move_uploaded_file($course_img_temp, $course_img_folder);
        if ($result == TRUE) {
            header("Location: add_course.php?status=success");
        } else {
            header("Location: add_course.php?status=failed");
        }
    }
}

// update course
if (isset($_POST['update_course'])) {
    $id = $_POST['id'];
    // CHecking for Empty Fields
    if (($_POST['update_course_name'] == "") || ($_POST['update_course_desc'] == "") || ($_POST['update_course_aut'] == "") || ($_POST['update_duration'] == "") || ($_POST['update_original_price'] == "") || ($_POST['update_selling_price'] == "")) {
        header("Location: update_course.php?status=fillfild&from=course&id=$id");
    } else {
        $update_course_name = $_POST['update_course_name'];
        $update_course_desc = $_POST['update_course_desc'];
        $update_course_aut = $_POST['update_course_aut'];
        $update_duration = $_POST['update_duration'];
        $update_original_price = $_POST['update_original_price'];
        $update_selling_price = $_POST['update_selling_price'];
        $update_date = date("Y-m-d");
    
        $update_course_img = $_FILES['update_course_img']['name'];
        $update_course_img_temp = $_FILES['update_course_img']['tmp_name'];
        $update_course_img_folder = 'images/course_img/' . $update_course_img;
      

        if ($update_course_img == "") {
            $sql = "select * from courses where id =$id";
            $sqlresult = $con->query($sql);
            $row = $sqlresult->fetch_assoc();
            
            $update_course_img = $row['img'];
            $update_course_img_temp = $row['img'];

            $query = "UPDATE courses set course_name ='$update_course_name', courses_desc ='$update_course_desc', author='$update_course_aut', duration ='$update_duration', img='$update_course_img', price='$update_selling_price', original_price='$update_original_price', is_update='$update_date' where id = $id;";

            $result = $con->query($query);

            if ($result) {
                move_uploaded_file($update_course_img_temp, $update_course_img_folder);
                header("Location: course.php?update_status=success");
            } else {
                header("Location: course.php?update_status=failed");
            }
        } else {
            $query = "UPDATE courses set course_name ='$update_course_name', courses_desc ='$update_course_desc', author='$update_course_aut', duration ='$update_duration', img='$update_course_img_folder', price='$update_selling_price',original_price='$update_original_price', is_update='$update_date' where id = $id;";

            $result = $con->query($query);

            if ($result) {
                move_uploaded_file($update_course_img_temp, $update_course_img_folder);
                header("Location: course.php?update_status=success");
            } else {
                header("Location: course.php?update_status=failed");
            }
        }
    }
}


// delete course
if ($_GET['from'] == "student") {
    if ($_GET['type'] == "delete") {
        $sid = $_GET['sid'];
        $query = "UPDATE student set is_active = 0 where sid = $sid;";
        $result = $con->prepare($query);
        $output = $result->execute();
        if ($output) {
            header("Location: student.php?delete_status=success");
        } else {
            header("Location: student.php?delete_status=failed");
        }
    }
}




// 
// 
// 
// student querys
// add student
// 
// 
// 
// 

if (isset($_POST['add_student'])) {
    // CHecking for Empty Fields
    if (($_POST['student_name'] == "") || ($_POST['student_email'] == "") || ($_POST['occupation'] == "") || ($_POST['password'] == "")) {
        header("Location: add_student.php?status=fillfild");
    } else {
        $student_name = $_POST['student_name'];
        $student_email = $_POST['student_email'];
        $occupation = $_POST['occupation'];
        $password = $_POST['password'];

        $student_img = $_FILES['student_img']['name'];
        $student_img_temp = $_FILES['student_img']['tmp_name'];
        $student_img_folder = 'images/student_img/' . $student_img;

        $query = "SELECT email FROM student WHERE email='" . $student_email . "'";
        $queryresult = $con->query($query);
        $row = $queryresult->num_rows;
        if ($row == 0) {
            $sql = "INSERT INTO student (sname, email, pwd, occ, img) VALUES ('$student_name','$student_email','$password','$occupation' , '$student_img_folder')";
            $result = $con->query($sql);
            move_uploaded_file($student_img_temp, $student_img_folder);
            if ($result == TRUE) {
                header("Location: add_student.php?status=success");
            } else {
                header("Location: add_student.php?status=failed");
            }
        } else {
            header("Location: add_student.php?status=AlreadyExists");
        }
    }
}

// update student
if (isset($_POST['update_student'])) {
    $sid = $_POST['sid'];
    // CHecking for Empty Fields
    if (($_POST['update_student_name'] == "") || ($_POST['update_student_email'] == "") || ($_POST['update_occupation'] == "") || ($_POST['update_password'] == "")) {
        header("Location: update_student.php?status=fillfild");
    } else {
        $update_student_name = $_POST['update_student_name'];
        $update_student_email = $_POST['update_student_email'];
        $update_occupation = $_POST['update_occupation'];
        $update_password = $_POST['update_password'];

        $update_student_img = $_FILES['update_student_img']['name'];
        $update_student_img_temp = $_FILES['update_student_img']['tmp_name'];
        $student_img_folder = 'images/student_img/' . $update_student_img;


        // var_dump($update_student_img);
        // die();
        if ($update_student_img == "") {
            $sql = "select * from student where sid =$sid";
            $sqlresult = $con->query($sql);
            $row = $sqlresult->fetch_assoc();

            $update_student_img = $row['img'];
            $update_student_img_temp = $row['img'];


            $query = "UPDATE student set sname ='$update_student_name', email ='$update_student_email',pwd='$update_password',occ ='$update_occupation', img='$update_student_img' where sid = $sid;";

            $result = $con->query($query);

            if ($result) {
                move_uploaded_file($update_student_img_temp, $student_img_folder);
                header("Location: student.php?update_status=success");
            } else {
                header("Location: student.php?update_status=failed");
            }
        } else {
            $query = "UPDATE student set sname ='$update_student_name', email ='$update_student_email',pwd='$update_password',occ ='$update_occupation', img='$student_img_folder' where sid = $sid;";

            $result = $con->query($query);

            if ($result) {
                move_uploaded_file($update_student_img_temp, $student_img_folder);
                header("Location: student.php?update_status=success");
            } else {
                header("Location: student.php?update_status=failed");
            }
        }
    }
}


// delete student
if ($_GET['from'] == "student") {
    if ($_GET['type'] == "delete") {
        $sid = $_GET['sid'];
        $query = "UPDATE student set is_active = 0 where sid = $sid;";
        $result = $con->prepare($query);
        $output = $result->execute();
        if ($output) {
            header("Location: student.php?delete_status=success");
        } else {
            header("Location: student.php?delete_status=failed");
        }
    }
}
