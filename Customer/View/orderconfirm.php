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
    <!-- <script src="./promotion.js" defer></script> -->


    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/orderconfirm.css">
    <link rel="stylesheet" href="./resources/css/root.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
        <div class="container-fluid">
            <p class="order"><i>Order</i></p>
            <button class="close">
                <iconify-icon icon="ic:baseline-close" style="color: white;" width="48" height="48"></iconify-icon>
            </button>
        </div>

    </nav>
    <div class="navLine"></div>

    <form action="">
        <p class="formtitle">Fill Information</p>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label for="">Username</label>
        </div>

        <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label for="">Password</label>
        </div>

        <div class="txt_field">
            <input type="text" required>
            <label for="">Address</label>
        </div>

        <div class="payment">
            <label for="">Payment Type</label>
            <br>
            <select name="" id="">
                <option value="kbz">KBZ Pay</option>
                <option value="wave">Wave Pay</option>
                <option value="COD">Cash On Deli</option>
            </select>
        </div>

        <div class="location">
            <iconify-icon icon="material-symbols:location-on" style="color: #765341;" width="55" height="55"></iconify-icon>
            <label for="">location</label>
            <br>
            <img src="./resources/img/map.png" alt="">


            <iconify-icon icon="mdi:truck-delivery" style="color: #765341;" width="55" height="55"></iconify-icon>
            <label for="">Waiting Time</label>

            <span>30</span> <span>min</span>

        </div>

        <div class="note">
            <textarea name="" id="" cols="30" rows="10" placeholder="Note To Order"></textarea>
        </div>

    </form>
    <div class="formline"></div>

    <input type="reset" value="Cancel">
    <input type="submit" value="Order">


</body>

</html>