<?php
ini_set("display_errors", "1");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wavepay</title>

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


    <!----------- css---------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/wavepay1.css">

</head>

<body>
    <div class="box">
        <div class="card">

            <div class="first">
                <div class="text-center">
                    <img src="./resources/img/WaveMoney 1.png" alt="">
                </div>
                <div class="ms-4">From - <span class="fw-bold">Cafe</span></div>
            </div>

            <div class="second">
                <div class="slideBall mt-3">
                    <div class="fw-bold ms-4">Receipt</div>
                    <div class="me-4">
                        <button class="circle activecircle"></button>
                        <button class="circle"></button>
                        <button class="circle"></button>
                        <button class="circle"></button>
                    </div>
                </div>
                <div class="line"></div>
            </div>

            <div class="third mt-3">
                <div class="ms-4">Item Name</div>
                <div class="me-4 fw-bold">Cafe Order</div>
            </div>


            <div class="second">
                <div class="slideBall mt-4">
                    <div class="ms-4">Amount</div>
                    <div class="me-4 fw-bold">5000Ks </div>
                </div>
                <div class="line"></div>
            </div>

            <form action="../Controller/waveOTPcontroller.php" method="post">
            <div class=" text-center mt-4">
                <input type="text" name="useremail" id="" placeholder="email address" 
                class="phone">
            </div>

            <div class="fouth mt-3">
                <!-- <input type="password" name="pwd" id="" placeholder="One time password" class="pas ms-4"> -->
                <div class="otpBtn">
                    <button class="p-2 me-4" name="submit">Get OTP</button>
                </div>
            </div>
            </form>

            <div class="text mt-3 ps-4">
                <p>OTP SMS will be sent to your WavePay registered <br>
                    Phone Number.</p>
            </div>
     <form action="../Controller/wave1confirmController.php"  method="post">
     <div class="fouth mt-3">
                <input type="password" name="pwd" id="" placeholder="One time password" class="pas ms-4">
                 
            </div>
            <div class="comBtn text-center mt-3">
                <a href="./wavepay2.php">
                    <button name="confirm" class="p-2">Comfirm</button></a>
            </div>
            </form>
        </div>
    </div>
</body>

</html>