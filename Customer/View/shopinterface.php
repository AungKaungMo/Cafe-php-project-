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
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/shopinterface.css">

</head>

<body>

    <?php
    include "./resources/shared/shopnav.php";
    ?>

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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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
                                <a href="./selectedBlog.php">
                                    <button class="p-2">Read More</button></a>
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