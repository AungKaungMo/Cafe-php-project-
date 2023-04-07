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
    <link rel="stylesheet" href="./resources/css/wavepay2.css">

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
                        <button class="circle"></button>
                        <button class="circle"></button>
                    </div>
                </div>
                <div class="line"></div>
            </div>


            <div class="second">
                <div class="slideBall mt-4">
                    <div class="ms-4">Tax</div>
                    <div class="me-4 fw-bold">30Ks</div>
                </div>
                <div class="line"></div>
            </div>


            <div class="second">
                <div class="slideBall mt-4">
                    <div class="ms-4">Total</div>
                    <div class="me-4 fw-bold">5030Ks</div>
                </div>
                <div class="line"></div>
            </div>


            <div class="mt-3 ms-4">
                <p>You've logged in as</p>
            </div>

            <div class="third">
                <div>
                    <img src="./resources/img/Ellipse 72.png" alt="" width="50%" class="ms-4">
                </div>
                <div>
                    <div class="fw-bold mb-3">959 122 324 221</div>
                    <div>
                        <iconify-icon icon="icon-park-twotone:mall-bag" class="icon"></iconify-icon>
                        <span class="ms-2 fw-bold">5030Ks</span>
                    </div>
                </div>
            </div>


            <div class="comBtn text-center">
                <a href="./wavepay3.php">
                    <button class="p-1">Enter To Comfirm</button></a>
            </div>

        </div>
    </div>
</body>

</html>