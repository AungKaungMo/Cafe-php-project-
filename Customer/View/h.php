<?php
ini_set("display_errors", "1");
?>


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
  <link rel="stylesheet" href="./resources/css/home.css">
</head>

<body>

  <!------------------  Header Navigation   --------------------->
  <?php
  include "./resources/shared/nav.php";
  ?>

  <!-----------------------------   Header SLider    --------------------->

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="backImage backgroundCafeImage1 swiper-slide">

        <div class="mx-sm-5 mx-2 pt-5">
          <h1 class=" fw-bold pt-5">Cofree Cofee</h1>
          <p class="mt-5 col-lg-6 col-md-9">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
          </p>
          <div class="mt-5">
            <a href="./shopinterface.php"><button class="btn px-2 py-3 fw-bold seemoreBtn">Go Now</button></a>
          </div>

        </div>
      </div>

      <div class="backImage backgroundCafeImage2 swiper-slide">

        <div class="mx-sm-5 mx-2 pt-5">
          <h1 class=" fw-bold pt-5">Name Less</h1>
          <p class="mt-5 col-lg-6 col-md-9">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
          </p>
          <div class="mt-5">
            <a href="./shopinterface.php"><button class="btn px-2 py-3 fw-bold seemoreBtn">Go Now</button></a>
          </div>
        </div>
      </div>

      <div class="backImage backgroundCafeImage3 swiper-slide">

        <div class="mx-sm-5 mx-2 pt-5">
          <h1 class=" fw-bold pt-5">The Hide Out</h1>
          <p class="mt-5 col-lg-6 col-md-9">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
            ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
          </p>
          <div class="mt-5">
            <a href="./shopinterface.php"><button class="btn px-2 py-3 fw-bold seemoreBtn">Go Now</button></a>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>


  <!------------------------   About US  -------------------------------->
  <?php
  include "../Controller/aboutusSelectController.php"
  ?>
  <div class="mx-sm-5 mx-2 pt-5 row aboutSection ">
    <div class="col-lg-6 ">
      <h1 class="title my-5 fw-bold position-relative pb-2">About Us</h1>
      <p>
        <?php
        echo $resultA[0]["about_text"];
        ?>
        <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
        ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
        ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus. -->
        <span class="collapse" id="collapseExample4">Some placeholder content for the collapse component.
          This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
      </p>
      <div class="mt-5">
        <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">See More</button>
      </div>
    </div>
    <div class="col-lg-6 ">
      <div class="h-75 ">
        <img  <?php
        echo $resultA[0]["about_image"];
        ?>
        class="aboutImage" src="./resources/img/about.png" height="100%" width="100%">
      </div>
    </div>
  </div>

  <!-------------------  Our Services  ------------------------->
  <?php
  include "../Controller/selectserviceController.php";
  ?>

  <div class="serviceSection position-relative mt-3 mx-sm-5 mx-2 pt-5">
    <div>
      <h1 class=" text-center title fw-bold pb-2 position-relative">Our Services</h1>
    </div>

    <div class=" position-absolute w-100 mt-5 pt-lg-5 d-flex flex-md-row justify-content-md-between flex-column justify-content-center align-items-center">

      <div>
        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon1"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box1"] ?></span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon2"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box2"] ?></span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon3"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box3"] ?></span>
        </div>

      </div>

      <div>
        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon4"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box4"] ?></span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon5"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box5"] ?></span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="<?= $serviceR[0]["icon6"] ?>"></iconify-icon>
          <span><?= $serviceR[0]["text_box6"] ?></span>
        </div>

      </div>

    </div>

    <div class="mt-5 d-flex align-items-center justify-content-center">
      <img src="./resources/img/service.png" width="40%" class="serviceImage">
    </div>


  </div>

  <!-------------------------   Customers Reviews  ----------------------->
  <div class="mt-md-3 mt-5 pt-md-0 pt-5 mx-sm-5 mx-2 customerSection">
    <h6 class="mb-0 text-center">Happy Customers</h6>
    <h1 class="title text-center position-relative fw-bold pb-2">Customers Reviews</h1>

    <div class=" reviewBox">
      <div class="w-75 p-3 m-auto reviewRightSide rounded-3 row position-relative">
        <div class="col-6">
          <div>

            <div class=" customersBox m-lg-0 m-auto">

              <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

                    <div class="mx-3 my-3">
                      <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center">
                          <div class="customersProfile">
                            <img class=" rounded-circle " src="./resources/img/cust1.jpg" width="100%" height="100%">
                          </div>
                          <div class="ms-3">
                            <div class="">Willian Zin</div>
                            <h6 class="">Yangon</h6>
                          </div>
                        </div>
                        <div>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                        </div>
                      </div>

                      <div class="mt-4 customersText">
                        Lorem ipsum dolor sit amet consectetur pisicing elit. Aut ex et numquam. pisicing elit. Aut ex et numquam. adipisicing elit. Aut ex et numquam. consectetur adipisicing elit. Aut ex et numquam.
                      </div>

                    </div>
                  </div>

                  <div class="swiper-slide">

                    <div class="mx-3 my-3">
                      <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center">
                          <div class="customersProfile">
                            <img class=" rounded-circle " src="./resources/img/cust2.jpg" width="100%" height="100%">
                          </div>
                          <div class="ms-3">
                            <div class="">Johnie Sinde</div>
                            <h6 class="">Yangon</h6>
                          </div>
                        </div>
                        <div>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                        </div>
                      </div>

                      <div class="mt-4 customersText">
                        Lorem ipsum dolor sit amet consectetur pisicing elit. Aut ex et numquam. pisicing elit. Aut ex et numquam. adipisicing elit. Aut ex et numquam. consectetur adipisicing elit. Aut ex et numquam.
                      </div>

                    </div>
                  </div>

                  <div class="swiper-slide">

                    <div class="mx-3 my-3">
                      <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center">
                          <div class="customersProfile">
                            <img class=" rounded-circle " src="./resources/img/cust3.jpg" width="100%" height="100%">
                          </div>
                          <div class="ms-3">
                            <div class="">Gray Bellin</div>
                            <h6 class="">Yangon</h6>
                          </div>
                        </div>
                        <div>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                          <iconify-icon icon="material-symbols:star-rounded" width="24" height="24"></iconify-icon>
                        </div>
                      </div>

                      <div class="mt-4 customersText">
                        Lorem ipsum dolor sit amet consectetur pisicing elit. Aut ex et numquam. pisicing elit. Aut ex et numquam. adipisicing elit. Aut ex et numquam. consectetur adipisicing elit. Aut ex et numquam.
                      </div>

                    </div>
                  </div>

                </div>

                <div class="swiper-pagination testimonialBullet"></div>

              </div>

            </div>

          </div>
        </div>
        <div class="col-6 testiRight d-lg-flex d-none position-relative">
          <div class="mt-5">
            <h1 class="position-relative fs-3 mt-4">Testimonial</h1>
            <iconify-icon icon="material-symbols:arrow-back" class="display-2"></iconify-icon>
          </div>
          <div class="h-100 position-absolute reviewImage">
            <img src="./resources/img/customerReview.png" height="170%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!------------------------   Contact Us   ------------------------>

  <?php
  include "../Controller/contactusController.php";
  ?>

  <div class="mt-3 mx-sm-5 mx-2 pt-5 contactSection">
    <div class="text-center">

      <h1 class="position-relative pb-2 fw-bold title">Contact Us</h1>
      <!-- <h6 class=" w-25 m-auto subTitle">Lorem ip dolor sit amet cconsectRecusandae, temporibus!r adipisicing elit. Recusandae</h6> -->
      <h6 class=" w-25 m-auto subTitle"><?= $contactR[0]["paragraph"] ?></h6>
    </div>

    <div class="row mt-5 w-75 m-auto contactBox ">
      <div class="col-md-6 text-center mt-3  ">

        <div class=" p-3 rounded-circle contactImage m-auto">
          <img src="../../Storages/<?php echo $contactR[0]["picture"] ?>">
        </div>

        <div class="ms-5">
          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="material-symbols:location-on-rounded" class="fs-3"></iconify-icon>
            </div>
            <!-- <p class="mt-3 text-start">No.135, Min ma haw lane, Yangon,
              Myanmar</p> -->
            <p class="mt-3 text-start"><?= $contactR[0]["address"] ?></p>
          </div>

          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="material-symbols:phone-in-talk" class="fs-3"></iconify-icon>
            </div>
            <!-- <p class="mt-3 text-start">+959 123 456 789</p> -->
            <p class="mt-3 text-start"><?= $contactR[0]["phone"] ?></p>
          </div>

          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="ic:baseline-email" class="fs-3"></iconify-icon>
            </div>
            <!-- <p class="mt-3 text-start">GroupTwo@gmail.com</p> -->
            <p class="mt-3 text-start"><?= $contactR[0]["email"] ?></p>
          </div>
        </div>

      </div>

      <div class="col-md-6 ps-md-0 ps-5">
        <form action="../Controller/sendContact.php" method="post">
          <div class=" position-relative">
            <iconify-icon icon="mdi:user" class="contactInputIcon"></iconify-icon>
            <input type="text" class="contactInput" placeholder="Name" name="username">
          </div>

          <div class=" position-relative">
            <iconify-icon icon="material-symbols:phone-in-talk" class="contactInputIcon"></iconify-icon>
            <input type="text" class="contactInput" placeholder="Phone Number" name="phone">
          </div>

          <div class=" position-relative">
            <iconify-icon icon="ic:baseline-email" class="contactInputIcon"></iconify-icon>
            <input type="text" class="contactInput" placeholder="Email" name="email">
          </div>

          <div class=" position-relative">
            <iconify-icon icon="ic:baseline-message" class="contactInputIcon"></iconify-icon>
            <input type="textarea" class="contactInput" placeholder="Message" name="message">
          </div>

          <div class="sendBtn">
            <button class="p-2" name="send">Send</button>
          </div>
        </form>


      </div>
    </div>


  </div>

  <!-----------------------   Footer   ---------------------------->

  <?php
  include "./resources/shared/footer.php";

  ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper1", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>