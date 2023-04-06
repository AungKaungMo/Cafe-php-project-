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
  <script src="./resources/js/cartControl.js"></script>
  <script src="./resources/js/favList.js"></script>

  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
  <link rel="stylesheet" href="./resources/css/cartpopup.css">
  <link rel="stylesheet" href="./resources/css/seeAllProduct.css" />


</head>

<body class="promobody">

  <?php
  include "./resources/shared/nav.php";
  include "../Controller/seeMoreMenuController.php";
  ?>

  <!-- =====================================little Nav===================================== -->

  <a href="./promotion.html">
    <a href="./shop.php">
      <iconify-icon icon="material-symbols:arrow-back" class="backArrow fs-2"></iconify-icon></a>
  </a>
  <!-- <div class="btn">
    <button class="choose activechoose">
      <a href=""><img src="./resources/img/coffee.png" alt="">Coffee</a>
    </button>

    <button class="choose">
      <a href="">
        <img src="./resources/img/Desserts.png" alt="">
        Desserts
      </a>

    </button>

    <button class="choose">
      <a href="">
        <img src="./resources/img/Specials.png" alt="">
        Specials
      </a>
    </button> -->
  </div>

  <!-- ====================================== Product==================================================== -->
  <h1>Products</h1>
  <div class="container">

    <div class="cardContainer">

      <?php for ($i = 0; $i < count($result); $i++) { ?>
        <div class="card mt-5">

          <div class="carditems">
            <div class="disphoto">
              <img src="../../Storages/<?= $result[$i]["product_photo"] ?>" alt="" class="img">
            </div>
            <p class="pname"><?= $result[$i]["product_name"] ?></p>
            <div class="disbtn">
              <button>
                <iconify-icon icon="mdi:shopping-cart-arrow-down" data-id="<?= $result[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="25" height="25" class="buy"></iconify-icon>
              </button>

              <button>
                <iconify-icon icon="mdi:cards-heart-outline" class="blank_heart" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } ?> width="25" height="25"></iconify-icon>
                <iconify-icon icon="mdi:cards-heart" class="full_heart d-none" width="25" height="25"></iconify-icon>
              </button>
            </div>
            <div class="disprice price">
              <?= $result[$i]["product_price"] ?> MMK
            </div>
          </div>
        </div>

      <?php } ?>

      <!-- <div class="card">
        <div class="carditems">
          <img src="./resources/img/blackcoffee.png" alt="">
          <p class="pname">Black coffee</p>
          <div class="pbtn">
            <button>
              <iconify-icon icon="mdi:shopping-cart-arrow-down" data-bs-toggle="modal" data-bs-target="#staticBackdrop" width="25" height="25"></iconify-icon>
            </button>

            <button>
              <iconify-icon icon="mdi:cards-heart-outline" width="25" height="25"></iconify-icon>
            </button>
          </div>
          <div class="price">
            1500MMK
          </div>
        </div>
      </div> -->


    </div>
  </div>


  <div class="line"></div>


</body>

</html>