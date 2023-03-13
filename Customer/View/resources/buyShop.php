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

  <!-----------------------    Jquery   ---------------------------->
  <script src="../lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   JS   -------------------------------->
    <script src="./javascript/navigation.js"></script>

  <!------------------------   CSS   ----------------------------->
  <link rel="stylesheet" href="./css/root.css">
  <link rel="stylesheet" href="./css/navigationAndFooter.css">
  <link rel="stylesheet" href="./css/buyShop.css">
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
            <a class="nav-link navtitle" href="./home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navtitle mx-5" href="#">SHOP</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link navtitle me-5" href="#">PROMOTIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navtitle navtitleActive" href="./buyShop.php">BUY SHOP</a>
          </li>
        </ul>
        <div class="d-flex align-items-center position-relative">
          <div class=" me-4">
            <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
          </div>
          <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
            <!-- <img src="../img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
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
        <a class="nav-link navtitle pb-2" href="./home.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navtitle my-5 pb-2" href="#">SHOP</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navtitle pb-2" href="#">PROMOTIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navtitle my-5 pb-2 navtitleActive" href="./buyShop.php">BUY SHOP</a>
      </li>
    </ul>
  </div>
  <div class="navLine"></div>

        <!------------------------------    Get your own shop   ---------------------------------->
        <div class="mt-5 row mx-sm-5 mx-2 d-flex flex-lg-row flex-column-reverse">
            <div class="col-lg-6 col-12">
            <h1 class="title my-5 fw-bold position-relative pb-2">Get Your Own Shop</h1>
            <p class="buyText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ab tempora laborum. Eveniet  sit amet consectetur olor sit amet consectetur adipisicing elit. Numquam ab tempora laborum. Eveniet  sit amet consecte adipisicing elit.t  sit amet consectetu Numquam ab t fugiat deserunt culpa deleniti dolorum architecto ab?
            <span class="collapse" id="collapseExample4">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</span>
            </p>
            <div class="mt-5">
        <button class="btn px-2 py-3 fw-bold seemoreBtn" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">See More</button>
      </div>
            </div>
            <div class="col-lg-6 col-md-8 col-10 m-auto">
              <img src="./img/buyShop.png" width="100%">
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
              <button class="p-2">Buy Now</button>
            </div>
          </div>
          
          <div class="paymentCard p-4 ">
            <h6 class="text-center mb-0 mt-3">Premium</h6>
            <div class="text-center fs-5 mb-5 fw-bold paymentPrice" >$400 per month</div>

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
              <button class="p-2">Buy Now</button>
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
              <button class="p-2">Buy Now</button>
            </div>
          </div>


          </div>
        </div>

          <!-----------------------   Footer   ---------------------------->

  <div class="footerImg mt-5"></div>
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
</body>
</html>