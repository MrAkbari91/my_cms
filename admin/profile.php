<?php include "include/header.php";

?>

<div class="col-xl-6 col-xxl-6">
    <div class="card">
        <div class="card-header pb-0 border-0">
            <h5 class="mb-0 text-black fs-20">My Profile</h5>
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