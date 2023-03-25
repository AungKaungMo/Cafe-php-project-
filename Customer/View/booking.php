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
    <!-- <script src="./resources/js/booking.js"></script> -->

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/booking.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
</head>

<body>

    <?php
    include "./resources/shared/shopnav.php";
    ?>

    <div class="mt-3 main">

        <div class="mb-5">
            <div class="bookdate mb-5">
                <input type="date" name="" id="" class="date ps-3">
            </div>
            <div class="place">
                <div class="indoor pt-3" id="in"><input type="radio" name="place" id="" checked>Indoor</div>
                <div class="outdoor pt-3 ps-2" id="out"><input type="radio" name="place" id="">Outdoor</div>
            </div>
        </div>

        <div class="mb-5">
            <div class="timer mb-5">
                <input type="time" name="" id="" class="time ps-2">
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
            <textarea name="" id="" cols="30" rows="5" class="notes" placeholder="Note to order"></textarea>
            <iconify-icon icon="mdi:message-reply-text" class="icon2"></iconify-icon>
        </div>


        <div class="sendBtn">
            <button class="p-2">Booking</button>
        </div>

    </div>

    <!-----------------------   Footer   ---------------------------->
    <?php
    include "./resources/shared/footer.php";
    ?>


</body>

</html>