<?php
include "../dbcon.php";

// 
// add query
// 
// add course

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
        $course_img_folder = '../images/course_img/' . $course_img;

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

// add student
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
        $student_img_folder = '../images/student_img/' . $student_img;


        $query = "SELECT email FROM student WHERE email='" . $student_email . "'";
        $queryresult = $con->query($query);
        $row = $queryresult->num_rows;
        if ($row == 0) {
            if ($student_img == "") {
                $sql = "INSERT INTO student (sname, email, pwd, occ) VALUES ('$student_name','$student_email','$password','$occupation')";
                $result = $con->query($sql);
                if ($result) {
                    header("Location: add_student.php?status=success");
                } else {
                    header("Location: add_student.php?status=failed");
                }
            } else {
                $sql = "INSERT INTO student (sname, email, pwd, occ, img) VALUES ('$student_name','$student_email','$password','$occupation' , '$student_img_folder')";
                $result = $con->query($sql);
                move_uploaded_file($student_img_temp, $student_img_folder);
                if ($result == TRUE) {
                    header("Location: add_student.php?status=success");
                } else {
                    header("Location: add_student.php?status=failed");
                }
            }
        } else {
            header("Location: add_student.php?status=alreadyexists");
        }
    }
}

// add lesson
if (isset($_POST['add_lesson'])) {
    // CHecking for Empty Fields
    if (($_POST['course_id'] == "") || ($_POST['course_name'] == "") || ($_POST['lesson_name'] == "") || ($_POST['lesson_desc'] == "")) {
        header("Location: add_lesson.php?status=fillfild");
    } else {
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $lesson_name = $_POST['lesson_name'];
        $lesson_desc = $_POST['lesson_desc'];

        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $lesson_link_folder = '../images/lesson_videos/' . $lesson_link;


        $sql = "INSERT INTO lesson (lesson_name, lesson_description, lesson_link, course_id, course_name) VALUES ('$lesson_name','$lesson_desc','$lesson_link_folder',$course_id , '$course_name')";
        $result = $con->query($sql);
        if ($result == TRUE) {
            move_uploaded_file($lesson_link_temp, $lesson_link_folder);
            header("Location: add_lesson.php?status=success");
        } else {
            header("Location: add_lesson.php?status=failed");
        }
    }
}

// 

// 
// update querys
// 
// admin  update
if (isset($_POST['update_admin'])) {
    $id = $_POST['id'];
    // CHecking for Empty Fields
    if (($_POST['name'] == "") || ($_POST['email'] == "") || ($_POST['dob'] == "") || ($_POST['phone'] == "")) {
        header("Location: editadmin.php?status=fillfild");
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $skype = $_POST['skype'];

        $admin_img = $_FILES['admin_img']['name'];
        $admin_img_temp = $_FILES['admin_img']['tmp_name'];
        $admin_img_folder = '../images/student_img/' . $admin_img;

        $query = "SELECT * FROM adminlogin WHERE email='" . $email . "'";
        $queryresult = $con->query($query);
        $row = $queryresult->num_rows;
        if ($row == 0) {
            if ($admin_img == "") {
                $query = "UPDATE adminlogin set name ='$name', email ='$email', dob ='$dob', phone='$phone', facebook='$facebook', instagram='$instagram', skype='$skype' where id = $id;";
                $result = $con->query($query);
                if ($result) {
                    $_SESSION['adminemail'] = $email;
                    header("Location: editadmin.php?update_status=success");
                } else {
                    header("Location: editadmin.php?update_status=failed");
                }
            } else {
                $query = "UPDATE adminlogin set name ='$name', email ='$email', dob ='$dob', img='$admin_img_folder', phone='$phone', facebook='$facebook', instagram='$instagram', skype='$skype' where id = $id;";
                $result = $con->query($query);
                if ($result) {
                    $_SESSION['adminemail'] = $email;
                    move_uploaded_file($admin_img_temp, $admin_img_folder);
                    header("Location: editadmin.php?update_status=success");
                } else {
                    header("Location: editadmin.php?update_status=failed");
                }
            }
        } else {
            $row = $queryresult->fetch_assoc();
            header("Location: editadmin.php?&id=$id&update_status=alreadyexists");
        }
    }
}

// course update 
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
        $update_course_img_folder = '../images/course_img/' . $update_course_img;


        if ($update_course_img == "") {

            $query = "UPDATE courses set course_name ='$update_course_name', courses_desc ='$update_course_desc', author='$update_course_aut', duration ='$update_duration', price='$update_selling_price', original_price='$update_original_price', is_update='$update_date' where id = $id;";

            $result = $con->query($query);

            if ($result) {
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

// student update 
if (isset($_POST['update_student'])) {
    $sid = $_POST['sid'];
    // CHecking for Empty Fields
    if (($_POST['name'] == "") || ($_POST['email'] == "") || ($_POST['occupation'] == "") || ($_POST['dob'] == "") || ($_POST['phone'] == "") || ($_POST['password'] == "")) {
        header("Location: update_student.php?&sid=$sid&status=fillfild");
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $occupation = $_POST['occupation'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $date = date("Y-m-d");

        $img = $_FILES['img']['name'];
        $img_temp = $_FILES['img']['tmp_name'];
        $img_folder = '../images/student_img/' . $img;

        $query = "SELECT * FROM student WHERE email='" . $email . "'";
        $queryresult = $con->query($query);
        $row = $queryresult->num_rows;
        if ($row == 0) {
            if ($img == "") {
                $query = "UPDATE student set sname ='$name', email ='$email', pwd='$password', occ ='$occupation', phone=$phone, dob='$dob', is_update='$date' where sid = $sid;";
                $result = $con->query($query);
                if ($result) {
                    header("Location: student.php?update_status=success");
                } else {
                    header("Location: update_student.php?&sid=$sid&update_status=failed");
                }
            } else {
                $query = "UPDATE student set sname ='$name', email ='$email', pwd='$password', occ ='$occupation',img='$img_folder', phone=$phone, dob='$dob', is_update='$date' where sid = $sid;";
                $result = $con->query($query);
                if ($result) {
                    move_uploaded_file($img_temp, $img_folder);
                    header("Location: student.php?update_status=success");
                } else {
                    header("Location: update_student.php?&sid=$sid&update_status=failed");
                }
            }
        } else {
            $row = $queryresult->fetch_assoc();
            header("Location: update_student.php?&sid=$sid&update_status=alreadyexists");
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
        $sql = "SELECT email,pwd FROM adminlogin WHERE email='" . $email . "'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        if ($row['pwd'] == $password) {
            $query = "UPDATE adminlogin set pwd ='$new_password'where email='" . $email . "'";
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

// lession update 
if (isset($_POST['update_lesson'])) {
    $lesson_id = $_POST['lesson_id'];
    // CHecking for Empty Fields
    if (($_POST['course_id'] == "") || ($_POST['course_name'] == "") || ($_POST['lesson_name'] == "") || ($_POST['lesson_desc'] == "")) {
        header("Location: update_lesson.php?status=fillfild&from=lession&id=$lesson_id");
    } else {
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $lesson_name = $_POST['lesson_name'];
        $lesson_desc = $_POST['lesson_desc'];
        $update_date = date("Y-m-d");

        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $lesson_link_folder = '../images/lesson_videos/' . $lesson_link;


        if ($lesson_link == "") {
            $query = "UPDATE lesson set lesson_name ='$lesson_name', lesson_description ='$lesson_desc', is_update='$update_date' where lesson_id = $lesson_id;";

            $result = $con->query($query);

            if ($result) {
                header("Location: update_lesson.php?update_status=success&lesson_id=$lesson_id");
            } else {
                header("Location: update_lesson.php?update_status=failed&lesson_id=$lesson_id");
            }
        } else {
            $query = "UPDATE lesson set lesson_name ='$lesson_name', lesson_description ='$lesson_desc', lesson_link='$lesson_link_folder', is_update='$update_date' where lesson_id = $lesson_id;";

            $result = $con->query($query);

            if ($result) {
                move_uploaded_file($lesson_link_temp, $lesson_link_folder);
                header("Location: update_lesson.php?update_status=success&lesson_id=$lesson_id");
            } else {
                header("Location: update_lesson.php?update_status=failed&lesson_id=$lesson_id");
            }
        }
    }
}


// 
// 
// delete querys
// 
// delete course
if ($_GET['from'] == "course") {
    if ($_GET['type'] == "delete") {
        $id = $_GET['id'];
        $query = "UPDATE student set is_active = 0 where id = $id;";
        $result = $con->prepare($query);
        $output = $result->execute();
        if ($output) {
            header("Location: student.php?delete_status=success");
        } else {
            header("Location: student.php?delete_status=failed");
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

// delete lesson
if ($_GET['from'] == "lesson") {
    if ($_GET['type'] == "delete") {
        $id = $_GET['lesson_id'];
        $query = "UPDATE student set is_active = 0 where sid = $id;";
        $result = $con->prepare($query);
        $output = $result->execute();
        if ($output) {
            header("Location: lesson.php?delete_status=success");
        } else {
            header("Location: lesson.php?delete_status=failed");
        }
    }
}




// search lesson
