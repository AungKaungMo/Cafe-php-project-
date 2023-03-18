<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Page</title>

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
    <script src="./resources/js/booking.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/booking.css">
</head>

<body>

    <!---------- nav --------->
    <nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">

                <img src="./resources/img/cafejj-removebg-preview (1) 3.png" height="60px" class="logo">

            </a>
            <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
                <div class="d-flex align-items-center position-relative">
                    <div class=" me-3">
                        <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                    </div>
                    <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                        <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage">
                        <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon> -->

                        <div class="d-flex  align-items-center">
                            <p class="mt-3 userText ">New User</p>
                            <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>

                        </div>
                        <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

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
                                    <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon"></iconify-icon>
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
                        <a class="nav-link navtitle" href="./home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtitle mx-5" href="./shopinterfacemenu.php">Menu</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link navtitle navtitleActive me-5" href="./booking.php">Booking</a>
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
                                    <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></iconify-icon>
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
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle"></iconify-icon>
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
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle"></iconify-icon>
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
                            <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle"></iconify-icon>
                        </div>

                    </div>

                </div>

            </div>
            <div class="navLine my-4"></div>


        </div>
    </div>


    <!-----------------------------   RES side bar   --------------------------->
    <div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
        <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

        <ul class="">
            <li class="nav-item">
                <a class="nav-link navtitle pb-2" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navtitle my-5 pb-2" href="#">SHOP</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navtitle navtitleActive pb-2" href="#">Booking</a>
            </li>
        </ul>
    </div>
    <div class="navLine"></div>

    <div class="mt-3 main">

        <div class="mb-5">
            <div class="bookdate mb-5">
                <input type="date" name="" id="" class="date">
            </div>
            <div class="place">
                <div class="indoor pt-3" id="in">Indoor</div>
                <div class="outdoor pt-3 ps-2" id="out">Outdoor</div>
            </div>
        </div>

        <div class="mb-5">
            <div class="timer mb-5">
                <input type="time" name="" id="" class="time">
            </div>
            <div class="gp1">
                <select class="people" aria-label=".form-select-lg example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <iconify-icon icon="mdi:user" class="icon1"></iconify-icon>
            </div>

        </div>
    </div>
    <div class="lines"></div>



    <div class="mt-3 main2">
        <div class="input">
            <input type="text" name="" id="name" class="bar" placeholder="Name">
        </div>

        <div class="input mt-3 text-center">
            <input type="text" name="" id="email" class="bar" placeholder="Email">
        </div>

        <div class="input mt-3 text-center">
            <input type="text" name="" id="phone" class="bar" placeholder="Phone Number">
        </div>

        <div class="input4 mt-4 text-center gp2">
            <textarea name="" id="" cols="30" rows="5" class="note" placeholder="Note to order"></textarea>
            <iconify-icon icon="mdi:message-reply-text" class="icon2"></iconify-icon>
        </div>


        <div class="sendBtn">
            <button class="p-2">Booking</button>
        </div>

    </div>

    <!-----------------------   Footer   ---------------------------->

    <div class="footerImg"></div>
    <div class="footer">
        <div class="footerContainer d-flex mx-sm-5 mx-2 pt-5 mb-4 justify-content-between flex-wrap">
            <div class="footerLogo">
                <img src="./resources/img/Rectangle 535.png" width="200px">
            </div>
            <div class="navigation">
                <div class="footerTitle">Navigation</div>
                <div class="mt-4 d-flex flex-column footerDetails">
                    <a href="./interface.php">Home</a>
                    <a href="#">Menu</a>
                    <a href="#">Booking</a>
                </div>
            </div>

            <div class="someLinks">
                <div class="footerTitle">Some Links</div>
                <div class="mt-4 d-flex flex-column footerDetails">
                    <a href="#">FAQS</a>
                    <a href="#">User Guide</a>
                    <a href="#">Privacy Policy</a>

                </div>
            </div>

            <div class="socialMedia">
                <div class="footerTitle">Social Media</div>
                <div class="mt-4 d-flex footerDetails">
                    <a href="#"><iconify-icon icon="ic:baseline-facebook"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="ph:instagram-logo-fill"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="mdi:github"></iconify-icon></a>

                </div>
            </div>

        </div>

        <div class="copyRight pb-3">
            <div class="w-75 m-auto mb-2"></div>
            <p class="text-center mb-0">Copyright @ design by GroupTwo</p>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper1", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>