<?php
session_start();

if (isset($_SESSION['studentlogin'])) {
    $email = $_SESSION['data']['email'];
} else {
    header("location:index.php");
}
include $_SERVER['DOCUMENT_ROOT'] . "/cms/dbcon.php";

$sql = "SELECT * from student where email = '$email';";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();

if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>unit - Student Dashboard </title>
    <!-- Favicon icon -->

    <!-- datatables -->
    <link href="../css/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/vendor/chartist/css/chartist.min.css">
    <link href="../css/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../css/css/style.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .btn-buy-now {
            display: none !important;
        }

        .deznav .metismenu ul li {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            position: relative;
            font-size: 15px;
            padding-left: 4.5rem;
            -webkit-transition: all 0.5s;
            -ms-transition: all 0.5s;
            transition: all 0.5s;
        }

        .deznav .metismenu>li {
            position: relative;
            display: block;
            padding: 0.625rem 1.875rem;
            outline-width: 0;
            color: #7e7e7e;
            text-decoration: none;
        }

        [data-sidebar-style="full"] .deznav .metismenu ul>li:before {
            content: "";
            height: 2px;
            width: 6px;
            background: rgba(54, 48, 98, 0.5);
            position: absolute;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transition: all 0.5s;
            -ms-transition: all 0.5s;
            transition: all 0.5s;
        }

        [data-sidebar-style="full"] .deznav .metismenu ul li:hover {
            padding-left: 5.5rem;
        }

        #menu>li>a {
            width: 100% !important;
        }
        #videoarea{
            height: 100vh;
        }
    </style>

</head>

<body>

    <!-- Main wrapper start -->
    <div id="main-wrapper">

        <!-- Nav header start -->
        <div class="nav-header">
            <a href="dashboard.php" class="ai-icon" aria-expanded="false">
                <!-- <span class="nav-text">Dashboard</span> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!-- Nav header end -->

        <!-- Header start -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <?php
                                $query = "SELECT course_name FROM courses where id = $course_id";
                                $result = mysqli_query($con, $query);
                                if ($course = $result->fetch_assoc()) {
                                    echo $course['course_name'];
                                }
                                ?>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="index.html#" role="button" data-bs-toggle="dropdown">
                                    <img src="<?= $row['img']; ?>" width="20" alt="" class="cover" />
                                    <div class="header-info">
                                        <span><?= $row['sname']; ?></span>
                                        <small>Student</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="profile.php" class="dropdown-item ai-icon">
                                        <i class="flaticon-381-user"></i>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="changepassword.php" class="dropdown-item ai-icon">
                                        <i class="flaticon-381-key"></i>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="../logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header end -->
        <!-- demoside -->
        <div class="deznav">
            <div class="deznav-scroll mm-active ps ps--active-y">
                <ul class="metismenu mm-show" id="menu">
                    <li class="mm-active">
                        <a class="has-arrow ai-icon mm-active w-100" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">
                                <?php
                                $query = "SELECT course_name FROM courses where id = $course_id";
                                $result = mysqli_query($con, $query);
                                if ($course = $result->fetch_assoc()) {
                                    echo $course['course_name'];
                                }
                                ?>
                            </span>
                        </a>
                        <ul id="playlist" class="mm-collapse mm-show">
                            <?php
                            $sql = "SELECT * FROM lesson where course_id = $course_id";
                            $result = mysqli_query($con, $sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <li movieurl="<?= $row['lesson_link']; ?>">
                                    <?= $row['lesson_name']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>

                </ul>

                <div class="book-box">
                    <img src="../images/book.png" alt="book">
                </div>
                <div class="copyright">
                    <p><strong>CMS Student Dashboard</strong> © <span id="year"></span> All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by Mr Akbari</p>
                </div>
            </div>
        </div>
        <!-- demoside -->
        <!-- Sidebar start -->

        <!-- Sidebar end -->

        <!-- contant add -->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <video id="videoarea" src="" controls autoplay></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Mr Akbari <span id="year"></span></p>
            </div>
        </div>
        <!-- Footer end -->

    </div>
    <!-- Main wrapper end -->

    <!-- Scripts -->
    <!-- Required vendors -->
    <script src="../css/vendor/global/global.min.js"></script>
    <script src="../css/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


    <script src="../js/custom.min.js"></script>
    <script src="../js/deznav-init.js"></script>

    <!-- styleSwitcher -->
    <script src="../js/styleSwitcher.js"></script>

    <script>
        $(document).ready(function() {
            $(function() {
                $("#playlist li").on("click", function() {
                    $("#videoarea").attr({
                        src: $(this).attr("movieurl"),
                    });
                });
                $("#videoarea").attr({
                    src: $("#playlist li").eq(0).attr("movieurl"),
                });
            });
        });
    </script>
</body>

</html>