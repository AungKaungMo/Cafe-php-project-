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
    ?>



    <div class="mx-sm-5 mx-2 pt-5 row aboutSection serviceSection">
        <div>
            <h1 class=" text-center title fw-bold pb-2 position-relative">Our Menu</h1>
        </div>
    </div>

    <div class="slidebtn mt-5">
        <div class="box text-center change" id="cg1">Featured Menu</div>
        <div class="box text-center" id="cg2">Popular Menu</div>
        <div class="box text-center" id="cg3">New Menu</div>
    </div>


    <div class="maincard">
        <div class="mainCardContainer">
            <div class="card">
                <img src="./resources/img/black_coffee-removebg-preview (1) 1.png" alt="" width="60%" class="img">
                <div class="text ms-3">Black Coffee</div>
                <div class="pbtn ms-4">
                    <button>
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
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
                        <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
                    </button>
                    <button>
                        <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
                    </button>
                </div>
                <div class="price text-center">
                    1500MMK
                </div>
            </div>

        </div>

        <div class="lines mt-5 mb-5"></div>


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

</body>

</html>