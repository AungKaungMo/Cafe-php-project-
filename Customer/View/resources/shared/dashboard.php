<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDashboard</title>
    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify  --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!----------------------  Bootstrap  ----------------------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------------------   JQUERY   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/dashboard.css">

    <!---------------------- JS   ---------------------------------------->
    <script src="./resources/js/dashboard.js" defer></script>

    <div class="admindsh_container">
        <div class="navigation active">
            <ul>
                <li>
                    <a href="">
                        <span class="icon mt-2"><iconify-icon icon="carbon:cafe"></iconify-icon></span>
                        <span class="title">cafe</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="iconoir:profile-circle"></iconify-icon></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="./dashboard_history.php">
                        <span class="icon"><iconify-icon icon="ic:baseline-history"></iconify-icon></span>
                        <span class="title">History</span>
                    </a>
                </li>
                <li>
                    <a href="./dashboard_order.php">
                        <span class="icon"><iconify-icon icon="pajamas:review-list"></iconify-icon></span>
                        <span class="title">Review</span>
                    </a>
                </li>
                <li>
                    <a href="./dashboard_setting_gallery.php">
                        <span class="icon"><iconify-icon icon="uiw:setting"></iconify-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="basil:logout-solid"></iconify-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main active">
            <div class="topbar">
                <div class="toggle">
                    <iconify-icon icon="material-symbols:menu"></iconify-icon>
                </div>
                <!-- userImg -->
                <div class="fs-4 fw-bold">User</div>
                <div class="owner">
                    <img src="./resources/img/profile.jpg">
                </div>
            </div>
            <hr>
            <!-- Second Nav Bar --->