<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrivacyPolicy</title>
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
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/FAQs&Privacy.css">
</head>

<body>
    <!------------------  Header Navigation   --------------------->
    <?php
    include "./resources/shared/nav.php";
    ?>

    <!-----------------------------   Privacy & Policy  --------------------------->


    <div class="col-md-8 col-sm-4 Privacy bg-white text-black text-decoration-center">

        <p class="display-3 fw-2 text-center mt-3 mb-5">Privacy Policy</p>
        <p class="fs-3 text-center mt-1 mx-3">
            This Privacy Policy describes Our policies and procedures on the collection,
            use and disclosure of Your information when You use the Service and tells You
            about Your privacy rights and how the law protects You. </p>
        <p class=" fs-3 text-center mt-1 mx-3 mb-3">
            We use Your Personal data to provide and improve the Service. By using the
            Service, You agree to the collection and use of information in accordance with
            this Privacy Policy.
        </p>

    </div>

    <?php
    include "./resources/shared/footer.php";
    ?>

</body>

</html>