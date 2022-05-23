<?php include "include/header.php";

$_SESSION['adminemail'] = $adminemail;

$sql = "SELECT * FROM adminlogin;";
$result = $con->query($sql);
$row = $result->fetch_assoc();

?>

<div class="col-xl-6 col-xxl-6">
    <div class="card">
        <div class="card-header pb-0 border-0">
            <h5 class="mb-0 text-black fs-20">My Profile</h5>
            <div class="dropdown ms-auto">
                <div class="btn-link" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img src="<?= $row["img"]; ?>" alt="" class="profile_img cover rounded ds-img-profile">
                <h4 class="fs-26 mt-sm-3 mt-2 mb-sm-3 mb-0 font-w600 text-black"><?= $row["name"]; ?></h4>
                <p class="mb-0 text-black ">DOB : <?= $row['dob']; ?></p>
                <a href="editadmin.php" class="btn btn-rounded btn-outline-primary mt-sm-4 mt-2"><i class="fas fa-pencil-alt scale5 me-3"></i>Edit prorfile</a>
            </div>
            <ul class="d-flex justify-content-center share-icon mt-sm-4 mt-3">
                <li><a href="tel:<?= $row['phone']; ?>"><i class="las la-phone"></i></a></li>
                <li><a href="mailto:<?= $row["email"]; ?>"><i class="las la-envelope"></i></a></li>
                <li><a href="https://www.facebook.com/<?= $row['facebook']; ?>"><i class="lab la-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>