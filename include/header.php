<?php
include $_SERVER['DOCUMENT_ROOT'] . "/cms/dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- fa fa cdn -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <!-- custom css -->
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/style.css">



    <title>course management</title>
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a class="navbar-brand" href="index.php">Home</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item active custom-nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="courses.php">Course</a>
                    
                </li>
                <?php
                session_start();
                if(isset($_SESSION['studentlogin'])){
                    echo '
                    <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="student/profile.php">My Profile</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>';
                } else {
                    echo '<li class="nav-item custom-nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="registration.php">Sign up</a>
                </li>';
                } ?>
                <!-- <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li> -->
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->