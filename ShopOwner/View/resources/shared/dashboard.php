<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopDashboard</title>
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
    <link rel="stylesheet" href="./resources/css/confirmpopup.css">

    <!---------------------- JS   ---------------------------------------->
    <script src="./resources/js/dashboard.js" defer></script>
    <script src="./resources/js/color_theme.js" defer></script>

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
                    <a href="./dashboard_salechart.php">
                        <span class="icon"><iconify-icon icon="material-symbols:area-chart-rounded"></iconify-icon></span>
                        <span class="title">Sale Chart</span>
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
                        <span class="icon"><iconify-icon icon="mdi:truck-delivery"></iconify-icon></span>
                        <span class="title">Order</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="./dashboard_booking.php">
                        <span class="icon"><iconify-icon icon="material-symbols:book"></iconify-icon></span>
                        <span class="title">Booking</span>
                    </a>
                </li> -->
                <li>
                    <a href="./dashboard_profile_informtaions.php">
                        <span class="icon"><iconify-icon icon="iconoir:profile-circle"></iconify-icon></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="./dashboard_shop.php">
                        <span class="icon"><iconify-icon icon="simple-icons:shopee"></iconify-icon></span>
                        <span class="title">Shop</span>
                    </a>
                </li>
                <li>
                    <a href="./dashboard_setting_gallery.php">
                        <span class="icon"><iconify-icon icon="uiw:setting"></iconify-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <p data-bs-toggle="modal" data-bs-target="#staticBackdropConfirm">
                        <span class="icon"><iconify-icon icon="basil:logout-solid"></iconify-icon></span>
                        <span class="title">Logout</span>
                    </p>
                </li>
            </ul>
        </div>

        <!-- Confirm Modal -->
        <div class="modal fade " id="staticBackdropConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  ">
                <div>
                    <div class="modal-content text-center subPop">
                        <div class=" text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <div><iconify-icon class="circleClick" icon="mdi:question-mark-circle-outline"></iconify-icon></div>
                        </div>
                        <div class="modal-body text-center">
                            <div class="mainPop mb-4">
                                <div class="h2 mb-3 fw-bold log">Lou Out</div>
                                <div class="mb-5 thankPurchase">Are You Sure...</div>
                                <button type="button" class="btn text-white Back2Home me-5" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button type="button" class="btn text-white Back2Home ms-5"> <a href="./shoplogin.php">Confirm</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div class="main active">
            <div class="topbar">
                <div class="toggle">
                    <iconify-icon icon="material-symbols:menu"></iconify-icon>
                </div>
                <!-- userImg -->
                <div class="fs-4 fw-bold">Shop Owner</div>
                <div class="owner">
                    <img src="../../Storages/<?= $_SESSION["ownerImage"] ?> ?>">
                </div>
            </div>
            <hr>
            <!-- Second Nav Bar --->