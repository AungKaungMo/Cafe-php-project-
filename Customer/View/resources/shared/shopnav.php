<?php
session_start();
?>

<!---------- nav --------->


<nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">

            <img src="./resources/img/cafeLogo 1.png" height="60px" class="logo">

        </a>
        <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
            <div class="d-flex align-items-center position-relative">
                <div class=" me-3">
                    <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                </div>
                <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                    <!-- <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
                    <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon>

                    <div class="d-flex  align-items-center">
                        <p class="mt-3 userText ">
                            <?php
                            if (!empty($_SESSION["userid"])) {
                                echo $_SESSION["username"];
                            } else {
                                echo "New User";
                            }
                            ?>

                        </p>
                        <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>

                    </div>
                    <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

                        <!-----------------   Before Login  ------------------------>

                        <?php
                        if (!empty($_SESSION["username"])) { ?>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Cart </span>
                                    <span class="cartCount">(14)</span>
                                </div>
                                <div>
                                    <form method="post" action="">
                                        <input type="hidden" value="" class="cartsValue">
                                        <!-- <a href=""> -->
                                    <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon buyCartIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight"></iconify-icon>
                                    <!-- </a>     -->
                                </form>
                                </div>

                            </div>
                            <div class="line"></div>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Fav</span>
                                    <span>(14)</span>
                                </div>
                                <div>
                                    <iconify-icon icon="mdi:cards-heart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="fs-3 cartIcon" id="favourite"></iconify-icon>
                                </div>

                            </div>
                            <div class="line"></div>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Profile </span>

                                </div>
                                <div>
                                    <a href="./dashboard_userprofile.php">
                                        <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon></a>
                                </div>

                            </div>
                            <div class="line"></div>

                        <?php  } else { ?>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="fw-bold signColor">Sign In</p>
                                <a href="./login.php">
                                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold signColor">Sign Up</p>
                                <a href="./signup.php">
                                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                                </a>
                            </div>
                        <?php   } ?>


                        <!--------------------  End After Login  ------------------------>

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
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link navtitle navtitleActive" href="./shopinterface.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navtitle mx-5" href="./shopinterfacemenu.php">Menu</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link navtitle  me-5" href="./booking.php">Booking</a>
                </li>
            </ul>
            <div class="d-flex align-items-center position-relative">
                <div class=" me-4">
                    <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                </div>
                <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                    <!-- <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
                    <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon>

                    <div class="d-flex  align-items-center">
                        <p class="mt-3 userText">
                            <?php
                            // $user = $_SESSION["userid"];
                            // $name = $_SESSION["username"];
                            if (!empty($_SESSION["userid"])) {
                                echo $_SESSION["username"];
                            } else {
                                echo "New User";
                            }
                            ?>
                        </p>
                        <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
                    </div>
                    <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">


                        <?php
                        if (!empty($_SESSION["username"])) { ?>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Cart </span>
                                    <span class="cartCount">(14)</span>
                                </div>
                                <div>
                                    <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon buyCartIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight"></iconify-icon>
                                </div>

                            </div>
                            <div class="line"></div>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Fav</span>
                                    <span>(14)</span>
                                </div>
                                <div>
                                    <iconify-icon icon="mdi:cards-heart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="fs-3 cartIcon" id="favourite"></iconify-icon>
                                </div>

                            </div>
                            <div class="line"></div>

                            <div class="d-flex justify-content-between mt-2 afterLogin">
                                <div>
                                    <span class="cartText">Profile </span>

                                </div>
                                <div>
                                    <a href="./dashboard_userprofile.php">
                                        <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon></a>
                                </div>

                            </div>
                            <div class="line"></div>

                        <?php  } else { ?>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="fw-bold signColor">Sign In</p>
                                <a href="./login.php">
                                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold signColor">Sign Up</p>
                                <a href="./signup.php">
                                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                                </a>
                            </div>
                        <?php   } ?>

                        <!--------------------  End After Login  ------------------------>
                    </div>

                </div>
            </div>
        </div>
</nav>

<?php
include "./resources/shared/afterLogin.php";
?>

                            <!---------------  CHECK LOGIN MODAL  ---------------------->

                    <!-- Modal -->
<div class="modal fade" id="staticBackdropCheckLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body newUser">
                <div>
                    <div class="fs-4 text-center ">New User?</div>
                    <div class="mt-3">
                        <div class="text-center">Dont have an account? <a href="./signup.php">Sign Up</a></div>
                    </div>
                    <div class="mt-3 mb-4">
                        <div class="text-center">Already have an account? <a href="./login.php">Log In</a></div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>

<!-----------------------------   RES side bar   --------------------------->
<div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
    <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

    <ul class="">
        <li class="nav-item">
            <a class="nav-link navtitle hometitle pb-2" href="./shopinterface.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link navtitle menutitle my-5 pb-2" href="./shopinterfacemenu.php">Menu</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link navtitle bookingtitle pb-2" href="./booking.php">Booking</a>
        </li>
    </ul>
</div>
<div class="navLine"></div>