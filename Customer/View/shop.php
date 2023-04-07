  <?php
  ini_set("display_errors", "1");
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>

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
    <script src="./resources/js/search.js"></script>
    <script src="./resources/js/cartControl.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
    <link rel="stylesheet" href="./resources/css/cartpopup.css">
    <link rel="stylesheet" href="./resources/css/shoplist.css" />


  </head>

  <body class="promobody">

    <?php
    include "./resources/shared/nav.php";
    include "../Controller/shopheaderController.php";
    ?>

    <section id="hero">

      <div class="row">
        <div class="col-md-6 ">
          <div class="text-label">
            <?= $SHresult[0]["header_title"] ?>
          </div>

          <div class="text-hero-regular">
            <?= $SHresult[0]["header_text"] ?>
          </div>
        </div>

        <div class="col-md-6 mt-5 mb-5">
          <img src="<?= $SHresult[0]["header_image"] ?>" width="450px" alt="">
        </div>
      </div>
    </section>

    <!-- =================================================================== trending food and cake ======================================================================== -->
    <?php include "../Controller/tendingfoodController.php"  ?>
    <section id="tending">
      <h1 class="title fw-bold position-relative pb-2">Tending Food & Cake</h1>

      <div class="container">


        <div class="shopContainer">

          <?php for ($i = 0; $i < count($Tfood); $i++) { ?>
            <div class="card">
              <img src="../../Storages/<?= $Tfood[$i]["product_photo"] ?>" alt="" class="img">
              <div class="script">

                <span class="infor pname"><?= $Tfood[$i]["product_name"] ?></span>

                <div class="icon">
                  <span class="price priceChange fw-bold"><?= $Tfood[$i]["product_price"] . " MMK" ?></span>
                  <iconify-icon icon="icon-park-solid:shopping-cart" data-id="<?= $Tfood[$i]["product_id"] ?>" index="<?= $i ?>" <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?> width="30" height="30" class="buy"></iconify-icon>
                </div>
              </div>
            </div>
          <?php  } ?>
        </div>
      </div>
    </section>
    <!-- <div class="card">
           <img src="./resources/img/pshop2.png" alt="">
           <div class="script">

    <!-- ==============================================trending shop ============================================ -->
    <?php include "../Controller/selectShopController.php"   ?>
    <section id="tshop">
      <h1 class="title fw-bold position-relative pb-2">Trending Shop</h1>


      <div class="mx-sm-5 mx-2 pt-5 row anbox">
        <div class="col-lg-6 ">
          <div class=" shopImage">
            <img class="aboutImage" src="../../Storages/<?= $g1 ?>" height="100%" width="100%">
          </div>
        </div>

        <div class="col-lg-6 ">
          <p class="subtitle position-relative"><?= $shopname1 ?></p>
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
            <a href="./shopinterface.php?id=<?= $shop1 ?>">
              <button class="rightseemore">See More</button></a>
          </div>
        </div>
      </div>

      <div class="mx-sm-5 mx-2 pt-5 mt-5 row flex flex-column-reverse flex-lg-row anbox">

        <div class="col-lg-6 ">
          <p class="subtitle position-relative"><?= $shopname2 ?></p>
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
          <a href="./shopinterface.php?id=<?= $shop2 ?>">
            <button class="leftseemore">See More</button></a>
        </div>
        <div class="col-lg-6 ">
          <div class="shopImage">
            <img class="aboutImage" src="../../Storages/<?= $g2 ?>" height="100%" width="100%">
          </div>
        </div>
      </div>

      <div class="mx-sm-5 mx-2 mt-5 pt-5 row anbox">

        <div class="col-lg-6 ">
          <div class=" shopImage">
            <img class="aboutImage" src="../../Storages/<?= $g3 ?>" height="100%" width="100%">
          </div>
        </div>

        <div class="col-lg-6 ">
          <p class="subtitle position-relative"><?= $shopname3 ?></p>
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
            <a href="./shopinterface.php?id=<?= $shop3 ?>">
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


  <!-- <div class="card">
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
          </div> -->