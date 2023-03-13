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
  <link rel="stylesheet" href="../lib/Bootstrap/css/bootstrap.min.css">
  <script src="../lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-----------------------    Jquery   ---------------------------->
  <script src="../lib/Jquery/jquery3.6.0.js"></script>

  <!------------------------   JS   -------------------------------->
  <script src="./javascript/navigation.js"></script>

  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./css/root.css">
  <link rel="stylesheet" href="./css/navigationAndFooter.css">
  <link rel="stylesheet" href="./css/home.css">
</head>

<body>

  <!------------------  Header Navigation   --------------------->
  <nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">

        <img src="./img/cafeLogo 1.png" height="60px" class="logo">

      </a>
      <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
        <div class="d-flex align-items-center position-relative">
          <div class=" me-3">
            <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
          </div>
          <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
            <!-- <img src="./img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
            <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon>

            <div class="d-flex  align-items-center">
              <p class="mt-3 userText ">New User</p>
              <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>

            </div>
            <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">
              <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
              </div>
              <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
              </div>
            </div>
          </div>

          <iconify-icon icon="fluent:navigation-16-filled" id="responsiveSideBarIcon"></iconify-icon>

        </div>
      </div>

      <!---------------------   dropdown searchBar   --------------------->

      <!-- Modal -->
      <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content searchDropdown">
            <div class="modal-header d-flex justify-content-between border-0">

              <input type="text" placeholder="Search" class="ps-2 searchBox">
              <iconify-icon icon="material-symbols:search" class="fs-3 inputSearchIcon"></iconify-icon>
            </div>

          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="responsiveSideBar">
        <ul class="navbar-nav m-auto ">
          <li class="nav-item">
            <a class="nav-link navtitle navtitleActive" href="./home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navtitle mx-5" href="#">SHOP</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link navtitle me-5" href="#">PROMOTIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navtitle" href="./buyShop.php">BUY SHOP</a>
          </li>
        </ul>
        <div class="d-flex align-items-center position-relative">
          <div class=" me-4">
            <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
          </div>
          <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
            <!-- <img src="./img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
            <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon>

            <div class="d-flex  align-items-center">
              <p class="mt-3 userText">New User</p>
              <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
            </div>
            <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">
              <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
              </div>
              <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>

  <!-----------------------------   RES side bar   --------------------------->
  <div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
    <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

    <ul class="">
      <li class="nav-item">
        <a class="nav-link navtitle navtitleActive pb-2" aria-current="page" href="./home.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navtitle my-5 pb-2" href="#">SHOP</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navtitle pb-2" href="#">PROMOTIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navtitle my-5 pb-2" href="./buyShop.php">BUY SHOP</a>
      </li>
    </ul>
  </div>
  <div class="navLine"></div>

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
            <span class="collapse" id="collapseExample"> Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
          </p>
          <div class="mt-5">
            <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">See More</button>
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
            <span class="collapse" id="collapseExample2"> Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
          </p>
          <div class="mt-5">
            <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">See More</button>
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
            <span class="collapse" id="collapseExample3"> Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
          </p>
          <div class="mt-5">
            <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">See More</button>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>


  <!------------------------   About US  -------------------------------->

  <div class="mx-sm-5 mx-2 pt-5 row aboutSection ">
    <div class="col-lg-6 ">
      <h1 class="title my-5 fw-bold position-relative pb-2">About Us</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad?
        ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
        ipsum dolor sit, amet consectetur adipisicing elit. Nisi itaque odio cupiditate odit accusamus ad
        <span class="collapse" id="collapseExample4">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>

      </p>
      <div class="mt-5">
        <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">See More</button>
      </div>
    </div>
    <div class="col-lg-6 ">
      <div class="h-75 ">
        <img class="aboutImage" src="./img/about.png" height="100%" width="100%">
      </div>
    </div>
  </div>

  <!-------------------  Our Services  ------------------------->

  <div class="serviceSection position-relative mt-3 mx-sm-5 mx-2 pt-5">
    <div>
      <h1 class=" text-center title fw-bold pb-2 position-relative">Our Services</h1>
    </div>

    <div class=" position-absolute w-100 mt-5 pt-lg-5 d-flex flex-md-row justify-content-md-between flex-column justify-content-center align-items-center">

      <div>
        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

      </div>

      <div>
        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

        <div class="serviceBox">
          <iconify-icon icon="mdi:truck-delivery"></iconify-icon>
          <span>The Best Delivery System</span>
        </div>

      </div>

    </div>

    <div class="mt-5 d-flex align-items-center justify-content-center">
      <img src="./img/service.png" width="40%" class="serviceImage">
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
                      <img class=" rounded-circle " src="./img/cust1.jpg" width="100%" height="100%">
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
        <img class=" rounded-circle " src="./img/cust2.jpg" width="100%" height="100%">
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
        <img class=" rounded-circle " src="./img/cust3.jpg" width="100%" height="100%">
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
            <img src="./img/customerReview.png" height="170%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!------------------------   Contact Us   ------------------------>

  <div class="mt-3 mx-sm-5 mx-2 pt-5 contactSection">
    <div class="text-center">

      <h1 class="position-relative pb-2 fw-bold title">Contact Us</h1>
      <h6 class=" w-25 m-auto subTitle">Lorem ip dolor sit amet cconsectRecusandae, temporibus!r adipisicing elit. Recusandae</h6>
    </div>

    <div class="row mt-5 w-75 m-auto contactBox ">
      <div class="col-md-6 text-center mt-3  ">

        <div class=" p-3 rounded-circle contactImage m-auto">
          <img src="./img/contactImage.png">
        </div>

        <div class="ms-5">
          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="material-symbols:location-on-rounded" class="fs-3"></iconify-icon>
            </div>
            <p class="mt-3 text-start">No.135, Min ma haw lane, Yangon,
              Myanmar</p>
          </div>

          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="material-symbols:phone-in-talk" class="fs-3"></iconify-icon>
            </div>
            <p class="mt-3 text-start">+959 123 456 789</p>
          </div>

          <div class="d-flex mt-3 align-items-center">
            <div class="me-3 p-2 rounded-circle d-flex justify-content-center align-items-center contactIcons">
              <iconify-icon icon="ic:baseline-email" class="fs-3"></iconify-icon>
            </div>
            <p class="mt-3 text-start">GroupTwo@gmail.com</p>
          </div>
        </div>

      </div>

      <div class="col-md-6 ps-md-0 ps-5">
        <div class=" position-relative">
          <iconify-icon icon="mdi:user" class="contactInputIcon"></iconify-icon>
          <input type="text" class="contactInput" placeholder="Name">
        </div>

        <div class=" position-relative">
          <iconify-icon icon="material-symbols:phone-in-talk" class="contactInputIcon"></iconify-icon>
          <input type="text" class="contactInput" placeholder="Phone Number">
        </div>

        <div class=" position-relative">
          <iconify-icon icon="ic:baseline-email" class="contactInputIcon"></iconify-icon>
          <input type="text" class="contactInput" placeholder="Email">
        </div>

        <div class=" position-relative">
          <iconify-icon icon="ic:baseline-message" class="contactInputIcon"></iconify-icon>
          <input type="textarea" class="contactInput" placeholder="Message">
        </div>

        <div class="sendBtn">
          <button class="p-2">Send</button>
        </div>

      </div>
    </div>


  </div>

  <!-----------------------   Footer   ---------------------------->

  <div class="footerImg"></div>
  <div class="footer">
    <div class="footerContainer d-flex mx-sm-5 mx-2 pt-5 mb-4 justify-content-between flex-wrap">
      <div class="footerLogo">
        <img src="./img/footerlogo.png" width="200px">
      </div>
      <div class="navigation">
        <div class="footerTitle">Navigation</div>
        <div class="mt-4 d-flex flex-column footerDetails">
          <a href="#">Home</a>
          <a href="#">Shop</a>
          <a href="#">Promotions</a>
          <a href="#">Buy Shop</a>
        </div>
      </div>

      <div class="someLinks">
        <div class="footerTitle">Some Links</div>
        <div class="mt-4 d-flex flex-column footerDetails">
          <a href="#">FAQS</a>
          <a href="#">User Guide</a>
          <a href="#">Privacy Policy</a>

        </div>
      </div>

      <div class="socialMedia">
        <div class="footerTitle">Social Media</div>
        <div class="mt-4 d-flex footerDetails">
          <a href="#"><iconify-icon icon="ic:baseline-facebook"></iconify-icon></a>
          <a href="#"><iconify-icon icon="ph:instagram-logo-fill"></iconify-icon></a>
          <a href="#"><iconify-icon icon="mdi:github"></iconify-icon></a>

        </div>
      </div>

    </div>

    <div class="copyRight pb-3">
      <div class="w-75 m-auto mb-2"></div>
      <p class="text-center mb-0">Copyright @ design by GroupTwo</p>
    </div>
  </div>

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