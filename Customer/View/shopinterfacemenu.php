<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

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
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/navigation.js"></script>

    <!----------- css---------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/shopinterfacemenu.css">

</head>


<body>
    <?php
    include "./resources/shared/shopnav.php";
    include "../Controller/shopInterfaceMenuController.php";

    ?>

    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Our Menu</h1>
        </div>
    </div>

    <div class="maincard">
        <div class="mainCardContainer">

            <?php
            for ($i = 0; $i < count($result); $i++) { ?>
                <div class="card">
                    <img src="../../Storages/<?php echo $result[$i]["product_photo"] ?>" alt="" width="60%" class="img">
                    <div class="text ms-3 fw-bold pname"><?php echo $result[$i]["product_name"] ?></div>
                    <div class="pbtn ms-4">
                        <button>
                            <iconify-icon icon="mdi:shopping-cart-arrow-down" data-id="<?= $result[$i]["product_id"] ?>" index="<?= $i ?>" data-id="<?= $result[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="25" height="25" class="buy"></iconify-icon>
                        </button>
                        <button>
                            <iconify-icon icon="mdi:cards-heart-outline" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } ?> width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="price priceChange text-center">
                        <?php echo $result[$i]["product_price"] ?> MMK
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <div class="lines mt-5 mb-5"></div>




    <script src="./lib/isotope.pkgd.min.js"></script>
    <script>
        var $grid = $('.card-detail').isotope({
            // options
        });
        // filter cards on button click
        $('.card-menu').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script>

    <script src="./resources/js/cartControl.js"></script>

</body>

</html>

<!-- <div class="slidebtn mt-5">
        <div class="box text-center change" id="cg1">Featured Menu</div>
        <div class="box text-center" id="cg2">Popular Menu</div>
        <div class="box text-center" id="cg3">New Menu</div>
    </div> -->