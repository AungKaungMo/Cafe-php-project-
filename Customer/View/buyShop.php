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

  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
  <link rel="stylesheet" href="./resources/css/buyShop.css">
</head>

<body>

  <!------------------  Header Navigation   --------------------->
  <?php
  include "./resources/shared/nav.php";
  ?>

  <!------------------------------    Get your own shop   ---------------------------------->
  <div class="mt-5 row mx-sm-5 mx-2 d-flex flex-lg-row flex-column-reverse">
    <div class="col-lg-6 col-12">
      <h1 class="title my-5 fw-bold position-relative pb-2">Get Your Own Shop</h1>
      <p class="buyText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ab tempora laborum. Eveniet sit amet consectetur olor sit amet consectetur adipisicing elit. Numquam ab tempora laborum. Eveniet sit amet consecte adipisicing elit.t sit amet consectetu Numquam ab t fugiat deserunt culpa deleniti dolorum architecto ab?
        <span class="collapse" id="collapseExample4">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
      </p>
      <div class="mt-5">
        <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">See More</button>
      </div>
    </div>
    <div class="col-lg-6 col-md-8 col-10 m-auto">
      <img src="./resources/img/buyShop.png" width="100%">
    </div>
  </div>

  <!--------------------------    Payment Card   --------------------------------->

  <div class="payment mt-5 pt-5 mx-sm-5 mx-2">
    <h1 class="text-center title position-relative pb-2">Choose Your Plan</h1>

    <div class="d-flex justify-content-between w-75 m-auto paymentCardContainer flex-wrap">
      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Basic</h6>
        <div class="text-center fs-5 mb-5 fw-bold">$150 per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">have only booking and reserve system.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can booking 100 times each day.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update menu 4 times each day.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update 2 blogs.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">online cash payment system.</p>
          </div>
        </div>
        <div class="buyNowBtn mt-2 text-center">
          <a href="./buyShopFillInformation.php"> <button class="p-2">Buy Now</button></a>
        </div>
      </div>

      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Premium</h6>
        <div class="text-center fs-5 mb-5 fw-bold paymentPrice">$400 per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">have delivery system and booking system</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">unlimited delivery and booking.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update unlimited menu everyday.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update 6 blog..</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">coin payment.</p>
          </div>
        </div>

        <div class="buyNowBtn2 mt-2 text-center">
          <a href="./buyShopFillInformation.php"> <button class="p-2">Buy Now</button></a>
        </div>

      </div>

      <div class="paymentCard p-4 ">
        <h6 class="text-center mb-0 mt-3">Standard</h6>
        <div class="text-center fs-5 mb-5 fw-bold">$250 per month</div>

        <div class="rule">
          <div class="d-flex ">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">have delivery system and booking system.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can booking and deliver 100 time each day.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update 20times menu each day.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">can update 3 blogs.</p>
          </div>
          <div class="d-flex">
            <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
            <p class=" ruleText">coin payment.</p>
          </div>
        </div>
        <div class="buyNowBtn mt-2 text-center">
          <a href="./buyShopFillInformation.php"><button class="p-2">Buy Now</button></a>
        </div>
      </div>


    </div>
  </div>

  <!-----------------------   Footer   ---------------------------->
  <?php
  include "./resources/shared/footer.php"
  ?>

</body>

</html>