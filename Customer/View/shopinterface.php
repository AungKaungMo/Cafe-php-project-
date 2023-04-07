<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Controller/shopinterfaceController.php";
$Sid = $_GET["id"];
$_SESSION["shopid"] = $Sid;
?>

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
    <script src="./resources/js/search.js"></script>
    <script src="./resources/js/cartControl.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/shopinterface.css">
    <style>
        .backgroundCafeImage1 {
            background: url(../../Storages/<?= $gimg2 ?>);
        }

        .backgroundCafeImage2 {
            background: url(../../Storages/<?= $gimg3 ?>);
        }

        .backgroundCafeImage3 {
            background: url(../../Storages/<?= $gimg1 ?>);
        }

        .backgroundCafeImage4 {
            background: url(../../Storages/<?= $gimg4 ?>);
        }
    </style>

</head>

<body>

    <?php
    include "./resources/shared/shopnav.php";
    // include "../Controller/shopInterfacePromotionMenuController.php";
    ?>

    <!-----------------------------   Header SLider    --------------------->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="backgroundCafeImage1 swiper-slide backImage"></div>
            <div class="backgroundCafeImage2 swiper-slide backImage"></div>
            <div class="backgroundCafeImage3 swiper-slide backImage"></div>
            <div class="backgroundCafeImage4 swiper-slide backImage"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!------------------------   Today Menu  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Promotiom Product</h1>
        </div>
    </div>

    <div class=" box1 position-relative">

        <div class="swiper mySwiper1 mt-5 ms-4">
            <div class="swiper-wrapper discountCardContainer">
                <?php for ($i = 0; $i < count($Pmresult); $i++) { ?>
                    <div class="swiper-slide ">
                        <div class="disCard mt-5 ms-4">
                            <div class="disticket">
                                <?php echo $Pmresult[$i]["product_discount"] . " %" ?>
                            </div>
                            <div class="distickettri"></div>
                            <div class="carditems">
                                <div class="disphoto">
                                    <img src="../../Storages/<?php echo $Pmresult[$i]["product_photo"] ?>" alt="">
                                </div>
                                <p class="pname"><?php echo $Pmresult[$i]["product_name"] ?></p>
                                <div class="disbtn">
                                    <button>
                                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-id="<?= $Pmresult[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="25" height="25" class="buy"></iconify-icon>
                                    </button>
                                    <button>
                                        <iconify-icon icon="mdi:cards-heart-outline" class="blank_heart" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } ?> width="25" height="25"></iconify-icon>
                                        <!-- <iconify-icon icon="mdi:cards-heart" class="full_heart d-none" width="25" height="25"></iconify-icon> -->
                                    </button>
                                </div>
                                <div class="priceChange disprice ">
                                    <?php
                                    $percentPrice = $Pmresult[$i]["product_price"] - (($Pmresult[$i]["product_price"] * $Pmresult[$i]["product_discount"]) / 100);
                                    echo $percentPrice . " MMK" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-pagination card-swiper"></div>

        </div>
    </div>


    <!------------------------   our Menu  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Our Menu</h1>
        </div>
    </div>
    <div class="menubox mt-5">
        <div class="textbox mt-5 item-menu">
            <button class="btn_text" data-filter="*">ALL</button>
            <button class="btn_text" data-filter=".featured">Featured Menu</button>
            <button class="btn_text" data-filter=".most">Most Popular Menu</button>
        </div>

        <div class="boxmenu">
            <div class="maincard item-details">

                <?php for ($i = 0; $i < count($Pmresult); $i++) { ?>
                    <div class="card item <?php if ($Pmresult[$i]["sold_quantity"] >= 10) { ?> most <?php  } else { ?> featured <?php    } ?>">
                        <img src="../../Storages/<?= $Pmresult[$i]["product_photo"] ?>" alt="" width="60%" class="img">
                        <div class="text pname fs-3 ms-3"><?= $Pmresult[$i]["product_name"] ?></div>
                        <div class="pbtn ms-4">
                            <button>
                                <iconify-icon icon="mdi:shopping-cart-arrow-down" data-id="<?= $Pmresult[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="25" height="25" class="buy"></iconify-icon>
                            </button>
                            <button>
                                <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                            </button>
                        </div>
                        <div class="price priceChange text-center">
                            <?= $Pmresult[$i]["product_price"] ?>MMK
                        </div>
                    </div>
                <?php  }    ?>
            </div>


        </div>

        <div><a href="./shopinterfacemenu.php?id=<?= $Sid ?>" class="seeall fw-bold">See All...</a></div>
    </div>


    <!------------------------   Blog  -------------------------------->

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Blog Post</h1>
        </div>
    </div>
    <div class="swiper mySwiperBlog mt-5 body">
        <div class="swiper-wrapper">

            <?php foreach ($blog as $blogbox) { ?>
                <div class="swiper-slide box">
                    <div class="minibox">
                        <div class="blogcard">
                            <div class="part1">
                                <img src="../../Storages/<?= $blogbox["blog_image"] ?>" alt="">
                            </div>
                            <div class="part2">
                                <h5 class="text1 mb-3 pt-2 fw-bold"><?= $blogbox["main_title"] ?></h5>
                                <p class="text2"><?= $blogbox["first_para"] ?></p>
                                <div class="day ">
                                    <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                    <h6 class="date pe-2"><?= $blogbox["created_date"] ?></h6>
                                    <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                    <h6 class="like">4.3k</h6>
                                </div>
                                <div class="readBtn">
                                    <a href="./selectedBlog.php?bid=<?= $blogbox["id"] ?>">
                                        <button class="p-2">Read More</button></a>
                                    <input type="text" value="<?= $blogbox["id"] ?>" name="bid" hidden>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

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
                    <!-- <img src="./resources/img/contactImage.png"> -->
                    <img src="../../Storages/<?= $shoplogo ?>" width="100%">
                </div>
                <div class="ms-5">
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="material-symbols:location-on-rounded" class="fs-3"></iconify-icon>
                        </div>
                        <!-- <p class="mt-3 text-start">No.135, Min ma haw lane, Yangon,
                            Myanmar</p> -->
                        <p class="mt-3 text-start"><?= $address ?></p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="material-symbols:phone-in-talk" class="fs-3"></iconify-icon>
                        </div>
                        <!-- <p class="mt-3 text-start">+959 123 456 789</p> -->
                        <p class="mt-3 text-start"><?= $shopph ?></p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
                            <iconify-icon icon="ic:baseline-email" class="fs-3"></iconify-icon>
                        </div>
                        <p class="mt-3 text-start"><?= $shopemail ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ps-md-0 ps-5">
                <form action="../Controller/shopSendCuController.php" method="post">
                    <div class=" position-relative">
                        <iconify-icon icon="mdi:user" class="contactInputIcon"></iconify-icon>
                        <input type="text" class="contactInput" placeholder="Name" name="name">
                    </div>
                    <div class=" position-relative">
                        <iconify-icon icon="material-symbols:phone-in-talk" class="contactInputIcon"></iconify-icon>
                        <input type="text" class="contactInput" placeholder="Phone Number" name="phone">
                    </div>
                    <div class=" position-relative">
                        <iconify-icon icon="ic:baseline-email" class="contactInputIcon"></iconify-icon>
                        <input type="text" class="contactInput" placeholder="Email" name="email">
                    </div>
                    <div class=" position-relative">
                        <iconify-icon icon="ic:baseline-message" class="contactInputIcon"></iconify-icon>
                        <input type="textarea" class="contactInput" placeholder="Message" name="message">
                    </div>
                    <div class="sendBtn">
                        <input type="text" name="id" id="" value="<?= $Sid  ?>" hidden>
                        <button class="p-2" type="submit" name="send">Send</button>
                    </div>
                </form>

            </div>
        </div>


    </div>

    <!-----------------------   Footer   ---------------------------->
    <?php
    include "./resources/shared/footer.php";
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!----filter js----->
    <script src="./lib/isotope.pkgd.min.js"></script>

    <script>
        var $grid = $('.item-details').isotope({
            // options
        });
        // filter items on button click
        $('.item-menu').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiperBlog", {
            spaceBetween: 30,
            slidesPerView: 2,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                900: {
                    slidesPerView: 2,
                },
                300: {
                    slidesPerView: 1,
                }
            }
        });
    </script>

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
        var swiper1 = new Swiper(".mySwiper1", {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                },
                530: {
                    slidesPerView: 2,
                },
                700: {
                    slidesPerView: 2.5,
                },
                900: {
                    slidesPerView: 3,
                },

            },
        });
    </script>

</body>

</html>




<!-- <div class="swiper-slide box">
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
            </div> -->


<!-- <div class="blogcard">
                            <div class="part1">
                                <img src="../../Storages/<?= $blogbox["blog_image"] ?>" alt="" width="100%">
                            </div>
                            <div class="part2">
                                <h5 class="text1 pt-2 fw-bold"><?= $blogbox["main_title"] ?></h5>
                                <p class="text2"><?= $blogbox["first_para"] ?></p>
                                <div class="day ">
                                    <iconify-icon icon="material-symbols:calendar-month-outline-sharp" class="icon pe-2"></iconify-icon>
                                    <h6 class="date pe-2"><?= $blogbox["created_date"] ?></h6>
                                    <iconify-icon icon="mdi:message-reply-text" class="icon pe-2"></iconify-icon>
                                    <h6 class="like">4.3k</h6>
                                </div>
                                <div class="readBtn">
                                    <a href="./selectedBlog.php">
                                        <button class="p-2">Read More</button></a>
                                </div>
                            </div>
                        </div> -->

<!-- <div class="blogcard">
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
                        </div> -->

<!-- <div class="card item most">
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
                </div> -->

<!-- <div class="card item most">
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
                </div> -->

<!-- <div class="card item featured">
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
                <div class="card item featured">
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
                </div> -->

<!-- <div class="maincard item-details">
    <?php for ($i = 0; $i < count($MPmresult); $i++) { ?>
        <div class="card item most">
            <img src="../../Storages/<?= $MPmresult[$i]["product_photo"] ?>" alt="" width="60%" class="img">
            <div class="text fs-3 ms-3 pname"><?= $MPmresult[$i]["product_name"] ?></div>
            <div class="pbtn ms-4">
                <button>
                    <iconify-icon icon="mdi:shopping-cart-arrow-down" data-id="<?= $MPmresult[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="25" height="25" class="buy"></iconify-icon>
                </button>
                <button>
                    <iconify-icon icon="mdi:cards-heart-outline" style="color: #FFEBCD;" width="25" height="25"></iconify-icon>
                </button>
            </div>
            <div class="price priceChange text-center">
                <?= $MPmresult[$i]["product_price"] ?>MMK
            </div>
        </div>
    <?php    }       ?>
</div> -->


</div>



<!-- Initialize Swiper -->

<!-- <script> -->

<!-- </script> -->

<!-- 
<script>
    var swiper = new Swiper(".mySwiperBlog", {
        spaceBetween: 30,
        slidesPerView: 2,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            900: {
                slidesPerView: 2,
            },
            300: {
                slidesPerView: 1,
            }
        }
    });
</script>

<script>
    var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 4,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            530: {
                slidesPerView: 2,
            },
            700: {
                slidesPerView: 2.5,
            },
            900: {
                slidesPerView: 3,
            },

        },
    });
</script>



</body>

</html> -->