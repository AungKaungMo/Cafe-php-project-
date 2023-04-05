<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promotion</title>

    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-----------------------    Jquery   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>
    <!------------------------   JS   -------------------------------->
    <script src="./resources/js/navigation.js"></script>


    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/seeAllShop.css" />

</head>

<body>

    <?php
    include "./resources/shared/nav.php";
    include "../Controller/shopallController.php"
    ?>

    <!-- ===========================================arrow========================================== -->

    <a href="./shop.php">
        <iconify-icon icon="material-symbols:arrow-back" style="color: #765341;" class="fs-2"></iconify-icon>
    </a>
    <!-- ===============================================shop============================================= -->

    <h1>Shop</h1>
    <div class="container">
        <div class="shopContainer">

            <?php foreach ($idresult as $result) {  ?>
                <div class="card">
                    <img src="./resources/img/pshop.png" alt="">
                    <div class="script">
                        <div class="icon">
                            <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                            <span class="sinfor"><?= $result["shop_name"] ?></span>
                        </div>

                        <div class="icon">
                            <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                            <span class="sinfor"><?= $result["shop_address"] ?></span>
                        </div>
                    </div>
                    <a href="./shopinterface.php?id=<?= $result["shop_id"] ?>">
                        <button>See more</button>
                    </a>

                </div>
            <?php     }         ?>


            <!-- <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div>

            <div class="card">
                <img src="./resources/img/pshop.png" alt="">
                <div class="script">
                    <div class="icon">
                        <iconify-icon icon="mdi:shop" width="30" height="30"></iconify-icon>
                        <span class="sinfor">CJ Cafe</span>
                    </div>

                    <div class="icon">
                        <iconify-icon icon="material-symbols:location-on-rounded" width="30" height="30"></iconify-icon>
                        <span class="sinfor">Mingalar Taung Nyunt</span>
                    </div>
                </div>
                <a href="./shopinterface.php">
                    <button>See more</button>
                </a>

            </div> -->


        </div>

    </div>


    <div class="line"></div>

</body>

</html>