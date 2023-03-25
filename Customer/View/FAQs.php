<?php
    include "../Model/dbconnection.php";

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "SELECT * FROM m_faqs
        WHERE id=2
        "
    );
    $sql->execute();
    $result1 = $sql->fetchAll(PDO::FETCH_ASSOC);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
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
    <link rel="stylesheet" href="./resources/css/home.css">
    <link rel="stylesheet" href="./resources/css/FAQs&Privacy.css">
</head>

<body>
    <!------------------  Header Navigation   --------------------->
    <?php
    include "./resources/shared/nav.php";
    ?>

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

    <!-----------------------------   FAQs   --------------------------->
    <div class=" col-md-8 col-sm-4 FAQs">
        <div class="Title">
            <p class="lineOne text-#765341">Have a Question?</p>
            <p class="lineTwo text-black display-6 fw-bold">Frequently Asked</p>
            <p class="lineThree text-black display-6 fw-bold">Questions</p>
        </div>

        <div class="FAQsBox ">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item Question">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <!-- Which payment system is used by this website? -->
                            <?php
                            echo $result1[0]["questionOne"];  
                            ?>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- Kpay, Wavepay, Cash on Delivery(COD) and Coins(virtual currency of the website)
                            can be used to purchase the products on this website. -->
                            <?php
                            echo $result1[0]["answerOne"];  
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item Question">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <!-- How do I get the coins in this website? -->
                            <?php
                            echo $result1[0]["questionTwo"];  
                            ?>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- Coins are granted when you purchase from the website.
                            1 coin equal 100MMK and it is calculated from grand total of your purchase. -->
                            <?php
                            echo $result1[0]["answerTwo"];  
                            ?>
                        
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item Question">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <!-- How do I book a table at the shop? -->
                                <?php
                            echo $result1[0]["questionThree"];  
                            ?>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- In the navbar of your chosen shop, Booking link can be seen.
                                Click it and you can book the seat on the page.
                                The instructions are clear.
                                If you have trouble understanding, click the User Guide link in the footer and
                                read the details instruction. -->
                                <?php
                            echo $result1[0]["answerThree"];  
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item Question">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <!-- I'm sure I've booked, but I haven't had confirmation - what now? -->
                                <?php
                            echo $result1[0]["questionFour"];  
                            ?>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- We will always send you an automated confirmation when your booking is confirmed at the restaurant. If you haven't received a confirmation, please start the process again.
                                If you continue to have an issue please a call a number on the shop home page. -->
                                <?php
                            echo $result1[0]["answerFour"];  
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item Question">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <!-- How do I cancel my booking? -->
                                <?php
                            echo $result1[0]["questionFive"];  
                            ?>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- Contact the number on the shop Homepage and notify your cancellation. -->
                                <?php
                            echo $result1[0]["answerFive"];  
                            ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include "./resources/shared/footer.php";
    ?>
</body>

</html>