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
  <script src="./resources/js/navigation.js"></script>


  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
  <link rel="stylesheet" href="./resources/css/promotion.css" />
  <link rel="stylesheet" href="./resources/css/root.css">

</head>

<body>

  <?php

  include "./resources/shared/nav.php";

  ?>

  <!-- ===========================================Hero section================================ -->
  <!-- <div class="hero">
    <div class="row">
      <div class="col-8 herocontent">
        <p class="herotitle">10% Off in this month</p>

        <p>
          <iconify-icon icon="mdi:shop" style="color: #765341;" width="24" height="24"></iconify-icon>
          CJ Cafe
        </p>


        <p>
          <iconify-icon icon="material-symbols:location-on" style="color: #765341;" width="24"
            height="24"></iconify-icon>
          No.98, Pazundaung Road, Yangon
        </p>


        <p>
          <iconify-icon icon="material-symbols:shopping-bag" style="color: #765341;" width="24"
            height="24"></iconify-icon>
          Ice tae with cream
        </p>


        <div class="disitems">
          <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded" style="color: #765341;" width="40"
            height="63"></iconify-icon>
          <div class="carousel">
            <img src="./resources/img/disitem.png" alt="">
            <img src="./resources/img/disitem1.png" alt="">
            <img src="./resources/img/disitem2.png" alt="">
            <img src="./resources/img/disitem3.png" alt="">
          </div>
          <iconify-icon icon="material-symbols:arrow-forward-ios-rounded" style="color: #765341;" width="40"
            height="63"></iconify-icon>
        </div>
      </div>

      <div class="col">

      </div>
    </div>
  </div> -->

  <!-- ===========================================Dis product==================================== -->
  <div class="container">
    <p class="subtitle">Discount Products</p>
    <div class="seemore">
      <a href="./promotionmenu.php">see more<iconify-icon icon="material-symbols:arrow-forward" width="35" height="35"></iconify-icon></a>
    </div>

    <div class="row">
      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/disp.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/disp1.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/disp2.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/disp3.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- ===========================================Dis Shop ==================================== -->
  <div class="container">
    <p class="subtitle">Discount Shops</p>
    <div class="seemore">
      <a href="./Promotionshopmenu.php">see more</a><iconify-icon icon="material-symbols:arrow-forward" width="35" height="35"></iconify-icon>
    </div>

    <div class="row">
      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/shop.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/shop.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/shop.png" alt="">
        </div>
      </div>

      <div class="col">
        <div class="box">
          <span class="box_ribbon">
          </span>
          <img src="./resources/img/shop.png" alt="">
        </div>
      </div>
    </div>
  </div>


  <?php
  include "./resources/shared/footer.php";
  ?>
</body>

</html>