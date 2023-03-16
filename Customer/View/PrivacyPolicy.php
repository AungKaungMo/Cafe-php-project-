<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrivacyPolicy</title>
    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link rel="stylesheet" href="../../lib/Bootstrap/css/bootstrap.min.css">
    <script src="../../lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-----------------------    Jquery   ---------------------------->
    <script src="../../lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   JS   -------------------------------->
    <script src="../javascript/home.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/navigationAndFooter.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/FAQs&Privacy.css">

</head>

<body>
    <!------------------  Header Navigation   --------------------->
    <nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">

                <img src="../img/cafeLogo 1.png" height="60px" class="logo">

            </a>
            <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
                <div class="d-flex align-items-center position-relative">
                    <div class=" me-3">
                        <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                    </div>
                    <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                        <!-- <img src="../img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
                        <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon>

                        <div class="d-flex  align-items-center">
                            <p class="mt-3 userText ">New User</p>
                            <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>

                        </div>
                        <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">
                            <div class="d-flex justify-content-between mt-2">
                                <p class="fw-bold signColor">Sign In</p>
                                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold signColor">Sign Up</p>
                                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                            </div>
                        </div>
                    </div>

                    <iconify-icon icon="fluent:navigation-16-filled" id="responsiveSideBarIcon"></iconify-icon>

                </div>
            </div>

            <!---------------------   dropdown searchBar   --------------------->

            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content searchDropdown">
                        <div class="modal-header d-flex justify-content-between border-0">

                            <input type="text" placeholder="Search" class="ps-2 searchBox">
                            <iconify-icon icon="material-symbols:search" class="fs-3 inputSearchIcon"></iconify-icon>
                        </div>

                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="responsiveSideBar">
                <ul class="navbar-nav m-auto ">
                    <li class="nav-item">
                        <a class="nav-link navtitle navtitleActive" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtitle mx-5" href="#">SHOP</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link navtitle me-5" href="#">PROMOTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtitle" href="#">BUY SHOP</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center position-relative">
                    <div class=" me-4">
                        <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                    </div>
                    <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                        <!-- <img src="../img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
                        <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon>

                        <div class="d-flex  align-items-center">
                            <p class="mt-3 userText">New User</p>
                            <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
                        </div>
                        <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">
                            <div class="d-flex justify-content-between mt-2">
                                <p class="fw-bold signColor">Sign In</p>
                                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold signColor">Sign Up</p>
                                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <!-----------------------------   RES side bar   --------------------------->
    <div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
        <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

        <ul class="">
            <li class="nav-item">
                <a class="nav-link navtitle navtitleActive pb-2" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navtitle my-5 pb-2" href="#">SHOP</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navtitle pb-2" href="#">PROMOTIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navtitle my-5 pb-2" href="#">BUY SHOP</a>
            </li>
        </ul>
    </div>
    <div class="navLine"></div>

    <!-----------------------------   Privacy & Policy  --------------------------->

    <div class="col-md-8 col-sm-4 Privacy bg-white text-black text-decoration-center">

        <p class="display-3 fw-2 text-center mt-3 mb-5">Privacy Policy</p>
        <p class="fs-3 text-center mt-1 mx-3">
            This Privacy Policy describes Our policies and procedures on the collection,
            use and disclosure of Your information when You use the Service and tells You
            about Your privacy rights and how the law protects You. </p>
        <p class=" fs-3 text-center mt-1 mx-3">
            We use Your Personal data to provide and improve the Service. By using the
            Service, You agree to the collection and use of information in accordance with
            this Privacy Policy.
        </p>

    </div>


</body>

</html>