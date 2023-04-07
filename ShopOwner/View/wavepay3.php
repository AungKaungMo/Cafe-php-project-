<?php
session_start();
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
    <script src="./resources/js/wavepay3.js"></script>

    <!----------- css---------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/wavepay3.css">

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
                    <div class="ms-4">
                        <iconify-icon icon="ph:arrow-left-bold" class="fw-bold"></iconify-icon>
                        <span class="fw-bold ms-1">Receipt</span>
                    </div>
                    <div class="me-4">
                        <button class="circle activecircle"></button>
                        <button class="circle activecircle"></button>
                        <button class="circle activecircle"></button>
                        <button class="circle"></button>
                    </div>
                </div>
                <div class="line"></div>
            </div>


            <h4 class="text-center fw-bold mt-4">Enter Your Pin</h4>
            <div class="text-center text1">Please enter your login pin</div>
            <div class="text-center text2">Comfirm Purchase</div>

            <div class="btncircle mt-3">
                <button class="circles"></button>
                <button class="circles"></button>
                <button class="circles"></button>
                <button class="circles"></button>
            </div>

            <!-- <div class="Table">
                <div class="Row">
                    <div class="Num"></div>
                    <div class="Num"></div>
                    <div class="Num"></div>
                </div>

                <div class="Row">
                    <div class="Num"></div>
                    <div class="Num"></div>
                    <div class="Num"></div>
                </div>

                <div class="Row">
                    <div class="Num"></div>
                    <div class="Num"></div>
                    <div class="Num"></div>
                </div>
            </div> -->

            <table class="mt-3">
                <tr align="center" bgcolor="white">
                    <td class="tbl clickPsw">1</td>
                    <td class="tbl clickPsw">2</td>
                    <td class="tbl clickPsw">3</td>
                </tr>
                <tr align="center" bgcolor="white">
                    <td class="tbl clickPsw">4</td>
                    <td class="tbl clickPsw">5</td>
                    <td class="tbl clickPsw">6</td>
                </tr>
                <tr align="center" bgcolor="white">
                    <td class="tbl clickPsw">7</td>
                    <td class="tbl clickPsw">8</td>
                    <td class="tbl clickPsw">9</td>
                </tr>
                <tr align="center" bgcolor="white">
                    <td class="tbl"></td>
                    <td class="tbl clickPsw">0</td>
                    <td class="tbl backspace"><iconify-icon icon="ri:delete-back-2-fill" class="icondel"></iconify-icon></td>
                </tr>
            </table>

            <div class="comBtn text-center mb-4">
                <a href="../Controller/dashboard_shop_paymentController.php">
                    <button class="p-2">Comfirm</button></a>
            </div>

        </div>
    </div>
</body>

</html>