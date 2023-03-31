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
  <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
  <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-----------------------    Jquery   ---------------------------->
  <script src="./lib/Jquery/jquery3.6.0.js"></script>

  <!------------------------   JS   -------------------------------->
  <script src="./resources/js/navigation.js"></script>

  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
  <link rel="stylesheet" href="./resources/css/cartpopup.css">
  <link rel="stylesheet" href="./resources/css/shoplist.css" />


</head>

<body class="promobody">

  <?php
  include "./resources/shared/nav.php";
  ?>

  <section id="hero">

    <div class="row">
      <div class="col-md-6 ">
        <div class="text-label">
          Coffee the best for You.........
        </div>

        <div class="text-hero-regular">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nemo laboriosam, modi delectus temporibus exercitationem nulla quas sapiente facilis nostrum, excepturi quo neque, veritatis dignissimos odio! Dolor voluptas delectus nesciunt!
        </div>
      </div>

      <div class="col-md-6">
        <img src="./resources/img/shoplisthero.png" alt="">
      </div>
    </div>
  </section>

  <!-- =================================================================== trending food and cake ======================================================================== -->
  <section id="tending">
    <h1 class="title fw-bold position-relative pb-2">Tending Food & Cake</h1>

    <div class="container">

      <div class="shopContainer">
        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>

              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>
              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>
              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>
              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>
              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="./resources/img/pshop2.png" alt="">
          <div class="script">

            <span class="infor">CJ Cafe</span>

            <div class="icon">
              <span class="price fw-bold">2000MMK</span>
              <iconify-icon icon="icon-park-solid:shopping-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="30" height="30"></iconify-icon>
            </div>
          </div>
        </div>
      </div>

    </div>
    <a href="./seeAllProduct.php">
      <button class="rightseemore">See more</button></a>
  </section>

  <!-- ==============================================trending shop ============================================ -->
  <section id="tshop">
    <h1 class="title fw-bold position-relative pb-2">Tending Shop</h1>

    <div class="mx-sm-5 mx-2 pt-5 row">

      <div class="col-lg-6 ">
        <div class="h-75 ">
          <img class="aboutImage" src="./resources/img/trendshop.png" height="100%" width="100%">
        </div>
      </div>

      <div class="col-lg-6 ">
        <p class="subtitle position-relative">Reason Cafe</p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
          ipsum dolor sit, amet consectetur adipisicing elit.
        </p>

        <p class="subtitle position-relative">Popular</p>
        <div class="poularphoto">
          <img src="./resources/img/popular_p.png" alt="">
          <img src="./resources/img/popular_p1.png" alt="">
          <img src="./resources/img/popular_p2.png" alt="">
          <img src="./resources/img/popular_p3.png" alt="">
        </div>
        <div class="mt-5">
          <a href="./shopinterface.php">
            <button class="rightseemore">See More</button></a>
        </div>
      </div>
    </div>

    <div class="mx-sm-5 mx-2 pt-5 row flex flex-column-reverse flex-lg-row">

      <div class="col-lg-6 ">
        <p class="subtitle position-relative">Reason Cafe</p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
          ipsum dolor sit, amet consectetur adipisicing elit.
        </p>

        <p class="subtitle position-relative">Popular</p>
        <div class="poularphoto">
          <img src="./resources/img/popular_p.png" alt="">
          <img src="./resources/img/popular_p1.png" alt="">
          <img src="./resources/img/popular_p2.png" alt="">
          <img src="./resources/img/popular_p3.png" alt="">
        </div>
        <a href="./shopinterface.php">
          <button class="leftseemore">See More</button></a>
      </div>


      <div class="col-lg-6 ">
        <div class="h-75 ">
          <img class="aboutImage" src="./resources/img/trendshop1.png" height="100%" width="100%">
        </div>
      </div>



    </div>

    <div class="mx-sm-5 mx-2 pt-5 row">

      <div class="col-lg-6 ">
        <div class="h-75 ">
          <img class="aboutImage" src="./resources/img/trendshop2.png" height="100%" width="100%">
        </div>
      </div>

      <div class="col-lg-6 ">
        <p class="subtitle position-relative">Reason Cafe</p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
          ipsum dolor sit, amet consectetur adipisicing elit.
        </p>

        <p class="subtitle position-relative">Popular</p>
        <div class="poularphoto">
          <img src="./resources/img/popular_p.png" alt="">
          <img src="./resources/img/popular_p1.png" alt="">
          <img src="./resources/img/popular_p2.png" alt="">
          <img src="./resources/img/popular_p3.png" alt="">
        </div>
        <div class="mt-5">
          <a href="./shopinterface.php">
            <button class="rightseemore mb-5">See More</button></a>
        </div>
      </div>
    </div>
  </section>

  <a href="./seeAllShop.php"><button class="tseemore">See More</button></a>



  <!-- ===============================================footer======================================================= -->
  <?php
  include "./resources/shared/footer.php";
  ?>

</body>

</html>