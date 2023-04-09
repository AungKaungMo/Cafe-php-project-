<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>

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
  <link rel="stylesheet" href="./resources/css/buyShop.css">
</head>

<body>

  <!------------------  Header Navigation   --------------------->
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  include "./resources/shared/nav.php";
  include "../Controller/shop_package_showController.php";

  ?>

  <!------------------------------    Get your own shop   ---------------------------------->
  <div class="mt-5 row mx-sm-5 mx-2 d-flex flex-lg-row flex-column-reverse">
    <div class="col-lg-6 col-12">
      <h1 class="title my-5 fw-bold position-relative pb-2"><?= $shopInfoResults[0]["title_one"] ?></h1>
      <p class="buyText">
        <span class="collapse" id="collapseExample4"></span>
      </p>
      <div class="mt-5">
        <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">See More</button>
      </div>
    </div>
    <div class="col-lg-6 col-md-8 col-10 m-auto">
      <img src="../../Storages/<?= $shopInfoResults[0]["picture"] ?>" width="100%">
    </div>
  </div>

  <!--------------------------    Payment Card   --------------------------------->

  <div class="payment mt-5 pt-5 mx-sm-5 mx-2">
    <h1 class="text-center title position-relative pb-2"><?= $shopInfoResults[0]["title_two"] ?></h1>

    <div class="d-flex justify-content-between w-75 m-auto paymentCardContainer flex-wrap">
      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Basic</h6>
        <div class="text-center fs-5 mb-5 fw-bold">$<?= $shopInfoResults[0]["basic_price"] ?> per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["basic_detail_one"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["basic_detail_two"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["basic_detail_three"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["basic_detail_four"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["basic_detail_five"] ?></p>
          </div>
          <!-- <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">online cash payment system.</p>
          </div> -->
        </div>
        <div class="buyNowBtn mt-2 text-center">
          <a <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> href="./buyShopFillInformation.php" <?php } ?>> <button class="p-2">Buy Now</button></a>
        </div>
      </div>

      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Premium</h6>
        <div class="text-center fs-5 mb-5 fw-bold paymentPrice">$<?= $shopInfoResults[0]["premium_price"] ?> per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["premium_detail_one"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["premium_detail_two"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["premium_detail_three"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["premium_detail_four"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["premium_detail_five"] ?></p>
          </div>
          <!-- <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">coin payment.</p>
          </div> -->
        </div>

        <div class="buyNowBtn2 mt-2 text-center">
          <a <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> href="./buyShopFillInformation.php" <?php } ?>> <button class="p-2">Buy Now</button></a>
        </div>

      </div>

      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Standard</h6>
        <div class="text-center fs-5 mb-5 fw-bold">$<?= $shopInfoResults[0]["standard_price"] ?> per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["standard_detail_one"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["standard_detail_two"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["standard_detail_three"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["standard_detail_four"] ?></p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText"><?= $shopInfoResults[0]["standard_detail_five"] ?></p>
          </div>
          <!-- <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">coin payment.</p>
          </div> -->
        </div>
        <div class="buyNowBtn mt-2 text-center">
          <a <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> href="./buyShopFillInformation.php" <?php } ?>><button class="p-2">Buy Now</button></a>
        </div>
      </div>


    </div>
  </div>

  <!-----------------------   Footer   ---------------------------->

  <?php
  // include "../Model/dbConnection.php";
  include "./resources/shared/footer.php"
  ?>

  <script>
    let text = "<?= $shopInfoResults[0]["paragraph"] ?>";
    $(".buyText").append(
      `
      ${text.substring(0,200)}
       <span class="collapse" id="collapseExample4">${text.substring(200,text.length)}</span>
        `
    )
  </script>

</body>

</html>