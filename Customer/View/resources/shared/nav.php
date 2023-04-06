<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>


<nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">

      <img src="./resources/img/cafeLogo 1.png" height="60px" class="logo">

    </a>
    <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
      <div class="d-flex align-items-center position-relative">
        <div class=" me-3">
          <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
        </div>
        <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
          <!-- <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
          <?php
          if ((empty($_SESSION["userpf"]))) { ?>
            <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon>
          <?php    } else { ?>
            <img src="../../Storages/<?php echo $_SESSION["userpf"] ?>" alt="Los Angeles Skyscrapers" width="50px" height="50px" class="rounded-5 userimage">
          <?php    }
          ?>
          <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon> -->

          <div class="d-flex  align-items-center">
            <p class="mt-3 userText ">
              <?php
              if (!empty($_SESSION["userid"])) {
                echo $_SESSION["username"];
              } else {
                echo "New User";
              }
              ?>

            </p>
            <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>

          </div>
          <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

            <!-----------------   Before Login  ------------------------>

            <?php
            if (!empty($_SESSION["username"])) { ?>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Cart </span>
                  <span class="cartCount">(14)</span>
                </div>
                <div>
                  <form method="post" action="./cart.php" enctype="multipart/form-data">
                    <input type="hidden" class="cartList" name="cartList">
                    <button type="btn" class="bg-transparent border-0" name="cartClick">
                      <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon buyCartIcon"></iconify-icon>
                    </button>
                  </form>
                </div>

              </div>
              <div class="line"></div>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Fav</span>
                  <span>(14)</span>
                </div>
                <div>
                  <!-- <form method="post" action="./cart.php"> -->
                  <!-- <input type="hidden" name="storeItems" id="cartList"> -->
                  <iconify-icon icon="mdi:cards-heart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="fs-3 cartIcon" id="favourite"></iconify-icon>
                  <!-- </form> -->
                </div>

              </div>
              <div class="line"></div>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Profile </span>

                </div>
                <div>
                  <a href="./dashboard_userprofile.php">
                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon></a>
                </div>

              </div>
              <div class="line"></div>

            <?php  } else { ?>
              <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <a href="./login.php">
                  <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </a>
              </div>
              <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <a href="./signup.php">
                  <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </a>
              </div>
            <?php   } ?>


            <!--------------------  End After Login  ------------------------>

          </div>
        </div>

        <iconify-icon icon="fluent:navigation-16-filled" id="responsiveSideBarIcon"></iconify-icon>

      </div>
    </div>

    <!---------------------   dropdown searchBar   --------------------->

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modalDialog mt-4 mb-0">
        <div class="modal-content searchDropdown">
          <div class="modal-header d-flex justify-content-between border-0">

            <input type="text" placeholder="Search" class="ps-2 searchBox" id="searchItems">
            <iconify-icon icon="material-symbols:search" class="fs-3 inputSearchIcon" id="searchIcon"></iconify-icon>
          </div>

          <form action="../Controller/searchController.php" method="POST">
            <input type="hidden" name="inputSearchItems">
            <input type="submit" hidden>
          </form>
        </div>
      </div>

       <!--------------  Search Details  ------------------------>

       <div id="searchProductsContainerBox">
                <!-- <div class="m-auto searchProductContainer">
                  <div class="detailsBox ms-3 pt-3 d-flex justify-content-between">
                    <div class="productImage">
                      <img src="./resources/img/cafeshopone.jpg">
                    </div>
                    <div class="me-4 mb-3">
                      <div class="d-flex justify-content-between">
                      <p class="productName">Coffee</p>
                      <p class="productAmount">1500MMK</p>
                      </div>
                      <p class="cafeName">Shop Name - (<span> <a href="#">Htet Naung Cafe</a></span>)</p>
                      <div class="d-flex justify-content-between">
                      <button class="goShopBtn">Go Shop</button>
                      <iconify-icon icon="ph:shopping-cart-simple-fill" class="buyCart"></iconify-icon>
                      </div>
                    </div>
                  </div> -->
                </div>


                <!-- <div class="m-auto searchProductContainer">
                  <div class="detailsBox ms-3 pt-3 d-flex justify-content-between">
                    <div class="productImage">
                      <img src="./resources/img/cafeshopone.jpg">
                    </div>
                    <div class="me-4 mb-3">
                      <div class="d-flex justify-content-between">
                      <p class="productName">Coffee</p>
                      <p class="productAmount">1500MMK</p>
                      </div>
                      <p class="cafeName">Shop Name - (<span> <a href="#">Htet Naung Cafe</a></span>)</p>
                      <div class="d-flex justify-content-between">
                      <button class="goShopBtn">Go Shop</button>
                      <iconify-icon icon="ph:shopping-cart-simple-fill" class="buyCart"></iconify-icon>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="m-auto searchProductContainer">
                  <div class="detailsBox ms-3 pt-3 d-flex justify-content-between">
                    <div class="productImage">
                      <img src="./resources/img/cafeshopone.jpg">
                    </div>
                    <div class="me-4 mb-3">
                      <div class="d-flex justify-content-between">
                      <p class="productName">Coffee</p>
                      <p class="productAmount">1500MMK</p>
                      </div>
                      <p class="cafeName">Shop Name - (<span> <a href="#">Htet Naung Cafe</a></span>)</p>
                      <div class="d-flex justify-content-between">
                      <button class="goShopBtn">Go Shop</button>
                      <iconify-icon icon="ph:shopping-cart-simple-fill" class="buyCart"></iconify-icon>
                      </div>
                    </div>
                  </div>
                </div> -->

              </div>
    </div>
             


    <div class="collapse navbar-collapse" id="responsiveSideBar">
      <ul class="navbar-nav m-auto ">
        <li class="nav-item">
          <a class="nav-link navtitle" href="./h.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navtitle mx-5" href="./shop.php">SHOP</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link navtitle me-5" href="./promotion.php">PROMOTIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navtitle" href="./buyShop.php">BUYSHOP</a>
        </li>
      </ul>
      <div class="d-flex align-items-center position-relative">
        <div class=" me-4">
          <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
        </div>
        <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
          <!-- <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage"> -->
          <?php
          if (empty($_SESSION["userpf"])) { ?>
            <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon>
          <?php    } else { ?>
            <img src="../../Storages/<?php echo $_SESSION["userpf"] ?>" alt="Los Angeles Skyscrapers" width="50px" height="50px" class="rounded-5 userimage">
          <?php    }
          ?>
          <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon> -->

          <div class="d-flex  align-items-center">
            <p class="mt-3 userText">
              <?php
              // $user = $_SESSION["userid"];
              // $name = $_SESSION["username"];
              if (!empty($_SESSION["userid"])) {
                echo $_SESSION["username"];
              } else {
                echo "New User";
              }
              ?>
            </p>
            <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
          </div>
          <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">


            <?php
            if (!empty($_SESSION["username"])) { ?>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Cart </span>
                  <span class="cartCount">(14)</span>
                </div>
                <div>
                  <form method="post" action="./cart.php" enctype="multipart/form-data">
                    <input type="hidden" class="cartList" name="cartList">
                    <button type="btn" class="bg-transparent border-0" name="cartClick">
                      <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon buyCartIcon"></iconify-icon>
                    </button>
                  </form>
                </div>

              </div>
              <div class="line"></div>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Fav</span>
                  <span>(14)</span>
                </div>
                <div>
                  <iconify-icon icon="mdi:cards-heart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="fs-3 cartIcon" id="favourite"></iconify-icon>
                </div>

              </div>
              <div class="line"></div>

              <div class="d-flex justify-content-between mt-2 afterLogin">
                <div>
                  <span class="cartText">Profile </span>

                </div>
                <div>
                  <a href="./dashboard_userprofile.php">
                    <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 cartIcon"></iconify-icon></a>
                </div>

              </div>
              <div class="line"></div>

            <?php  } else { ?>
              <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <a href="./login.php">
                  <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </a>
              </div>
              <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <a href="./signup.php">
                  <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </a>
              </div>
            <?php   } ?>

            <!--------------------  End After Login  ------------------------>
          </div>

        </div>
      </div>
    </div>
</nav>


<?php
include "./resources/shared/afterLogin.php";
?>


<!---------------  CHECK LOGIN MODAL  ---------------------->

<!-- Modal -->
<div class="modal fade" id="staticBackdropCheckLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body newUser">
        <div>
          <div class="fs-4 text-center ">New User?</div>
          <div class="mt-3">
            <div class="text-center">Dont have an account? <a href="./signup.php">Sign Up</a></div>
          </div>
          <div class="mt-3 mb-4">
            <div class="text-center">Already have an account? <a href="./login.php">Log In</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-----------------------------   RES side bar   --------------------------->
<div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
  <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

  <ul class=" slideBar">
    <li class="nav-item">
      <a class="nav-link navtitle hometitle pb-2" aria-current="page" href="./h.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navtitle shoptitle my-5 pb-2" href="./shop.php">SHOP</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link navtitle promotiontitle pb-2" href="./promotion.php">PROMOTIONS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navtitle buyshoptitle my-5 pb-2" href="./buyShop.php">BUY SHOP</a>
    </li>
  </ul>
</div>
<div class="navLine"></div>