<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop inter Page</title>

    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-----------------------    Jquery   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   JS   -------------------------------->
    <script src="./resources/js/navigation.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/shopinterface.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
</head>

<body>

    <?php
    include "./resources/shared/shopnav.php";
    ?>

    <!-----------------   Before Login  ------------------------>

    <!-- <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div>
                <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div> -->

    <!------------------  After Login   -------------------------->

    <div class="d-flex justify-content-between mt-2 afterLogin">
        <div>
            <span class="cartText">Cart </span>
            <span>(14)</span>
        </div>
        <div>
            <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon" data-bs-toggle="modal" data-bs-target="#exampleModal1"></iconify-icon>
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
            <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon>
        </div>

    </div>
    <div class="line"></div>


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
                <a class="nav-link navtitle navtitleActive" href="./home.php">HOME</a>
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
                <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage">
                <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon> -->

                <div class="d-flex  align-items-center">
                    <p class="mt-3 userText">New User</p>
                    <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
                </div>
                <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

                    <!-------------   BEFORE SIGN IN/ SIGN UP   ------------------->

                    <!-- <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div>
                <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div> -->

                    <!-------------   AFTER SIGN IN/ SIGN UP   ------------------->

                    <div class="d-flex justify-content-between mt-2 afterLogin">
                        <div>
                            <span class="cartText">Cart </span>
                            <span>(14)</span>
                        </div>
                        <div>
                            <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon" data-bs-toggle="modal" data-bs-target="#exampleModal1"></iconify-icon>
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
                            <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon>
                        </div>

                    </div>
                    <div class="line"></div>

                </div>

            </div>
        </div>
    </div>
    </nav>

    <!--------------- favlist ------->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <div class="d-flex ">
                <h5 id="offcanvasRightLabel" class="favList fs-3">Favourite </h5>
                <iconify-icon icon="mdi:cards-heart" class="mt-2 ms-2 fs-3"></iconify-icon>
            </div>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="navLine"></div>
        <div class="offcanvas-body">
            <div class="d-flex">
                <div class="ListImg me-3 col-5">
                    <img src="./resources/img/cake.jpg" width="100%" height="100%">
                </div>
                <div class="col-7">
                    <div class="d-flex justify-content-between">
                        <div class="favProductTitle fw-bold">Chocolate Cake</div>
                        <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                        <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                    </div>
                    <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                    <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>
                    <div class="d-flex justify-content-between">

                        <div class="gowebsite">
                            <button class="p-2">Go to website</button>
                        </div>

                        <div>
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                        </div>

                    </div>
                </div>

            </div>
            <div class="navLine my-4"></div>

            <div class="d-flex">

                <div class="ListImg me-3 col-5">
                    <img src="./resources/img/cake.jpg" width="100%" height="100%">
                </div>

                <div class="col-7">
                    <div class="d-flex justify-content-between">
                        <div class="favProductTitle fw-bold">Chocolate Cake</div>
                        <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                        <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                    </div>

                    <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                    <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>
                    <div class="d-flex justify-content-between">

                        <div class="gowebsite">
                            <button class="p-2">Go to website</button>
                        </div>

                        <div>
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                        </div>

                    </div>

                </div>

            </div>
            <div class="navLine my-4"></div>

            <div class="d-flex">

                <div class="ListImg me-3 col-5">
                    <img src="./resources/img/cake.jpg" width="100%" height="100%">
                </div>

                <div class="col-7">
                    <div class="d-flex justify-content-between">
                        <div class="favProductTitle fw-bold">Chocolate Cake</div>
                        <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                        <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                    </div>

                    <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                    <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>

                    <div class="d-flex justify-content-between">

                        <div class="gowebsite">
                            <button class="p-2">Go to website</button>
                        </div>

                        <div>
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                        </div>

                    </div>

                </div>

            </div>
            <div class="navLine my-4"></div>


        </div>
    </div>

    <!------------cart---------->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 id="offcanvasRightLabel" class="fs-3 CHcart">Cart</h5>
                        <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 CHcarti"></iconify-icon>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="navLine"></div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text_title">No</th>
                                <th scope="col" class="text_title">Product Id</th>
                                <th scope="col" class="text_title">Preview</th>
                                <th scope="col" class="text_title">Description</th>
                                <th scope="col" class="text_title">Price</th>
                                <th scope="col" class="text_title">Stock</th>
                                <th scope="col" class="text_title">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text_b">1</th>
                                <td class="text_b">C1</td>
                                <td>
                                    <div class="ListImg me-3 col-5">
                                        <img src="./resources/img/cake.jpg" width="100%" height="100%">
                                    </div>
                                </td>
                                <td class="text_b">Cake</td>
                                <td class="text_b">15000MMK</td>
                                <td>
                                    <button class="stockbtn d-flex">
                                        <iconify-icon icon="mdi:arrow-top-drop-circle" class="topi"></iconify-icon>
                                        <p class="number">2</p>
                                        <iconify-icon icon="material-symbols:arrow-drop-down-circle" class="downi"></iconify-icon>
                                    </button>
                                </td>
                                <td class="text_b">30000MMk</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text_b">1</th>
                                <td class="text_b">C1</td>
                                <td>
                                    <div class="ListImg me-3 col-5">
                                        <img src="./resources/img/cake.jpg" width="100%" height="100%">
                                    </div>
                                </td>
                                <td class="text_b">Cake</td>
                                <td class="text_b">15000MMK</td>
                                <td>
                                    <button class="stockbtn d-flex">
                                        <iconify-icon icon="mdi:arrow-top-drop-circle" class="topi"></iconify-icon>
                                        <p class="number">2</p>
                                        <iconify-icon icon="material-symbols:arrow-drop-down-circle" class="downi"></iconify-icon>
                                    </button>
                                </td>
                                <td class="text_b">30000MMk</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text_b">1</th>
                                <td class="text_b">C1</td>
                                <td>
                                    <div class="ListImg me-3 col-5">
                                        <img src="./resources/img/cake.jpg" width="100%" height="100%">
                                    </div>
                                </td>
                                <td class="text_b">Cake</td>
                                <td class="text_b">15000MMK</td>
                                <td>
                                    <button class="stockbtn d-flex">
                                        <iconify-icon icon="mdi:arrow-top-drop-circle" class="topi"></iconify-icon>
                                        <p class="number">2</p>
                                        <iconify-icon icon="material-symbols:arrow-drop-down-circle" class="downi"></iconify-icon>
                                    </button>
                                </td>
                                <td class="text_b">30000MMk</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="lineSt">
                        <div class="calprice mt-4">
                            <div class="d-flex">
                                <div class="Sotext">Sub total</div>
                                <div class="Toprice">90000 MMK</div>
                            </div>
                        </div>
                        <div class="lineH"></div>
                    </div>

                    <div class="lineSt">
                        <div class="calprice mt-4">
                            <div class="d-flex">
                                <div class="Sotext">Tax 5%</div>
                                <div class="Toprice">4500 MMK</div>
                            </div>
                        </div>
                        <div class="lineH"></div>
                    </div>

                    <div class="lineSt">
                        <div class="calprice mt-4">
                            <div class="d-flex">
                                <div class="Sotext">Discount</div>
                                <div class="Toprice">-500 MMk</div>
                            </div>
                        </div>
                        <div class="lineH"></div>
                    </div>

                    <div class="lineSt">
                        <div class="calprice mt-4">
                            <div class="d-flex">
                                <div class="Sotext">Grand Ttal<span class="tax">(incl.tax)</span></div>
                                <div class="Toprice">94000 MMK</div>
                            </div>
                        </div>
                        <div class="lineH"></div>
                    </div>

                    <div class="lineSt">
                        <div class="CheckO">
                            <button class="p-1">Check out</button>
                        </div>
                    </div>


                    <div class="nextline"></div>
                </div>
            </div>
        </div>
    </div>


    <!-----------------------------   RES side bar   --------------------------->
    <div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
        <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

        <ul class="">
            <li class="nav-item">
                <a class="nav-link navtitle navtitleActive pb-2" aria-current="page" href="./shopinterface.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navtitle my-5 pb-2" href="./shopinterfacemenu.php">Menu</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navtitle  pb-2" href="./booking.php">Booking</a>
            </li>
        </ul>
    </div>
    <div class="navLine"></div>

    <!-----------------------------   Header SLider    --------------------->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="backImage backgroundCafeImage1 swiper-slide"></div>
            <div class="backImage backgroundCafeImage2 swiper-slide"></div>
            <div class="backImage backgroundCafeImage3 swiper-slide"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!------------------------   Today Menu  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Promotiom Product</h1>
        </div>
    </div>
    <div class="swiper mySwiper mt-5 box1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="maincard">
                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>
                </div>
            </div>


            <div class="swiper-slide box1">
                <div class="maincard mb-4">
                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide box1">
                <div class="maincard">
                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>

                    <div class="card">
                        <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                        <div class="text ms-3">Black Coffee</div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price text-center">
                            1500MMK
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination mt-4"></div>
    </div>


    <!------------------------   our Menu  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Our Menu</h1>
        </div>
    </div>
    <div class="menubox mt-5">
        <div class="textbox mt-5">
            <button class="btn_text">Featured Menu</button>
            <button class="btn_text">Most Popular Menu</button>
            <button class="btn_text">New Menu</button>
        </div>

        <div class="boxmenu">
            <div class="maincard">
                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>
            </div>

            <div class="maincard">
                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>

                <div class="card">
                    <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                    <div class="text ms-3">Black Coffee</div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price text-center">
                        1500MMK
                    </div>
                </div>
            </div>
        </div>

        <div><a href="./shopinterfacemenu.php" class="seeall fw-bold">See All...</a></div>
    </div>


    <!---------- cart popup--------->
    <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title cart" id="staticBackdropLabel">Cart</h5>
                    <iconify-icon icon="ph:shopping-cart-fill" class="carti"></iconify-icon>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6 text-center mt-5">
                            <img src="./resources/img/cake.jpg" alt="" class="image">
                        </div>
                        <div class="col-6 text-center">
                            <h5 class="cake">Cake</h5>
                            <div class="cartbox">
                                <div class="cartbox1">
                                    <iconify-icon icon="bi:dash-circle-fill" id="mine" class=" me-3"></iconify-icon>
                                    <h6 id="changeNum" class="fw-bold me-3">1</h6>
                                    <iconify-icon icon="mdi:plus-circle" id="plus"></iconify-icon>
                                </div>
                                <div class="line"></div>
                            </div>
                            <div class="cartbox">
                                <div class="cartbox1">
                                    <h6 class="fw-bold changeNum">15000MMk</h6>
                                </div>
                                <div class="babyline"></div>
                            </div>
                            <div class="input4 mt-4 text-center">
                                <textarea name="" id="" class="note" placeholder="Note to order"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="addtocart modal-footer">
                        <button class="p-2" data-bs-dismiss="modal">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------------------   Blog  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Blog Post</h1>
        </div>
    </div>
    <div class="swiper mySwiper mt-5 body">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="minibox">
                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="minibox">
                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="minibox">
                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="blogcard">
                        <div class="part1">
                            <img src="./resources/img/Rectangle 362.png" alt="" width="100%">
                        </div>
                        <div class="part2">
                            <h5 class="text1 pt-2 fw-bold">Essential Guide to Healthy
                                Eating </h5>
                            <p class="text2">We mean real food as opposed to processed
                                food. Real food is fruits, vegetables, meats,
                                dairy, seafood, nuts, seeds, whole grains and
                                beans. Natural sweeteners, coffee,
                                chocolate and wine count, </p>
                            <div class="day ">
                                <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                <h6 class="date pe-2">01/10/2023</h6>
                                <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                <h6 class="like">4.3k</h6>
                            </div>
                            <div class="readBtn">
                                <button class="p-2">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>


    <!------------------------   Contact Us   ------------------------>
    <div class="mt-3 mx-sm-5 mx-2 pt-5 contactSection">
        <div class="text-center">
            <h1 class="position-relative pb-2 fw-bold title">Contact Us</h1>
            <h6 class=" w-25 m-auto subTitle">Lorem ip dolor sit amet cconsectRecusandae, temporibus!r adipisicing elit. Recusandae</h6>
        </div>
        <div class="row mt-5 w-75 m-auto contactBox ">
            <div class="col-md-6 text-center mt-3  ">
                <div class=" p-3 rounded-circle contactImage m-auto">
                    <img src="./resources/img/contactImage.png">
                </div>
                <div class="ms-5">
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="material-symbols:location-on-rounded" class="fs-3"></iconify-icon>
                        </div>
                        <p class="mt-3 text-start">No.135, Min ma haw lane, Yangon,
                            Myanmar</p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="material-symbols:phone-in-talk" class="fs-3"></iconify-icon>
                        </div>
                        <p class="mt-3 text-start">+959 123 456 789</p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="ic:baseline-email" class="fs-3"></iconify-icon>
                        </div>
                        <p class="mt-3 text-start">GroupTwo@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-md-0 ps-5">
                <div class=" position-relative">
                    <iconify-icon icon="mdi:user" class="contactInputIcon"></iconify-icon>
                    <input type="text" class="contactInput" placeholder="Name">
                </div>
                <div class=" position-relative">
                    <iconify-icon icon="material-symbols:phone-in-talk" class="contactInputIcon"></iconify-icon>
                    <input type="text" class="contactInput" placeholder="Phone Number">
                </div>
                <div class=" position-relative">
                    <iconify-icon icon="ic:baseline-email" class="contactInputIcon"></iconify-icon>
                    <input type="text" class="contactInput" placeholder="Email">
                </div>
                <div class=" position-relative">
                    <iconify-icon icon="ic:baseline-message" class="contactInputIcon"></iconify-icon>
                    <input type="textarea" class="contactInput" placeholder="Message">
                </div>
                <div class="sendBtn">
                    <button class="p-2">Send</button>
                </div>
            </div>
        </div>


    </div>

    <!-----------------------   Footer   ---------------------------->
    <?php
    include "./resources/shared/footer.php";
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>