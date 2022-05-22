<?php
include "../dbcon.php";
session_start();
if(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']){
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>unit - Admin Login </title>
    <!-- Favicon icon -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4">Sign in</h2>
                                    <p id="statusmsglogin"></p>
                                    <div>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control" name="adminemail" id="adminemail">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="password" class="form-control" name="adminpwd" id="adminpwd">
                                            </div>

                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary btn-block" id="loginbtn" onclick="adminlogin()">Sign Me In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>

    <script src="../js/ajaxrequest.js"></script>
</body>

</html>