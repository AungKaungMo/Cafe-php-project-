 <!---------- nav --------->
 <nav class="navbar navbar-expand-lg mx-sm-5 mx-2 ">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">
             <img src="./resources/img/cafejj-removebg-preview (1) 3.png" height="60px" class="logo">
         </a>
         <div class="d-flex align-items-center mt-1 d-lg-none d-bllock">
             <div class="d-flex align-items-center position-relative">
                 <div class=" me-3">
                     <iconify-icon icon="material-symbols:search" class="p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                 </div>
                 <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                     <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage">
                     <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1"></iconify-icon> -->
                     <div class="d-flex  align-items-center">
                         <p class="mt-3 userText ">New User</p>
                         <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
                     </div>
                     <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

                         <!-----------------   Before Login  ------------------------>

                         <!-- <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div>
                <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div> -->

                         <!------------------  After Login   -------------------------->

                         <div class="d-flex justify-content-between mt-2 afterLogin">
                             <div>
                                 <span class="cartText">Cart </span>
                                 <span>(14)</span>
                             </div>
                             <div>
                                 <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight"></iconify-icon>
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
             <ul class="navbar-nav ms-auto ">
                 <li class="nav-item">
                     <a class="nav-link navtitle navtitleActive" href="./shopinterface.php">HOME</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link navtitle mx-5" href="./shopinterfacemenu.php">Menu</a>
                 </li>
                 <li class="nav-item ">
                     <a class="nav-link navtitle  me-5" href="./booking.php">Booking</a>
                 </li>
             </ul>
             <div class="d-flex align-items-center position-relative">
                 <div class=" me-4">
                     <iconify-icon icon="material-symbols:search" class=" p-1 d-flex justify-content-center align-items-center fs-3 searchIcon" data-bs-toggle="modal" data-bs-target="#exampleModal"></iconify-icon>
                 </div>
                 <div class="w-100 rounded-3 userbox d-flex align-items-center justify-content-center">
                     <img src="./resources/img/user.png" width="50px" height="50px" class="rounded-5 userimage">
                     <!-- <iconify-icon icon="mdi:user-circle" class="userIcon m-1" width="50" height="50"></iconify-icon> -->

                     <div class="d-flex  align-items-center">
                         <p class="mt-3 userText">New User</p>
                         <iconify-icon icon="material-symbols:keyboard-arrow-down" class=" p-1 userdownIcon" width="25" height="25"></iconify-icon>
                     </div>
                     <div class=" w-75 p-3 position-absolute rounded-4 signBox d-none">

                         <!-------------   BEFORE SIGN IN/ SIGN UP   ------------------->

                         <!-- <div class="d-flex justify-content-between mt-2">
                <p class="fw-bold signColor">Sign In</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div>
                <div class="d-flex justify-content-between">
                <p class="fw-bold signColor">Sign Up</p>
                <iconify-icon icon="material-symbols:arrow-circle-right" class="fs-3 signIcon"></iconify-icon>
                </div> -->

                         <!-------------   AFTER SIGN IN/ SIGN UP   ------------------->

                         <div class="d-flex justify-content-between mt-2 afterLogin">
                             <div>
                                 <span class="cartText">Cart </span>
                                 <span>(14)</span>
                             </div>
                             <div>
                                 <iconify-icon icon="ph:shopping-cart-fill" class="fs-3 cartIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight"></iconify-icon>
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

                     </div>

                 </div>
             </div>
         </div>
 </nav>

 <!--------------- favlist ------->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header">
         <div class="d-flex ">
             <h5 id="offcanvasRightLabel" class="favList fs-3">Favourite </h5>
             <iconify-icon icon="mdi:cards-heart" class="mt-2 ms-2 fs-3"></iconify-icon>
         </div>

         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="navLine"></div>
     <div class="offcanvas-body">
         <div class="d-flex">
             <div class="ListImg me-3 col-5">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%">
             </div>
             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                     <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                     <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                 </div>
                 <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>
                 <div class="d-flex justify-content-between">

                     <div class="gowebsite">
                         <button class="p-2"><a href="./shopinterface.php">Go to website</a></button>
                     </div>

                     <div>
                         <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                     </div>

                 </div>
             </div>

         </div>
         <div class="navLine my-4"></div>

         <div class="d-flex">

             <div class="ListImg me-3 col-5">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%">
             </div>

             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                     <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                     <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                 </div>

                 <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>
                 <div class="d-flex justify-content-between">

                     <div class="gowebsite">
                         <button class="p-2"><a href="./shopinterface.php">Go to website</a></button>
                     </div>

                     <div>
                         <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                     </div>

                 </div>

             </div>

         </div>
         <div class="navLine my-4"></div>

         <div class="d-flex">

             <div class="ListImg me-3 col-5">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%">
             </div>

             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                     <iconify-icon icon="mdi:cards-heart" class="fs-3 heartIcon likeIcon"></iconify-icon>
                     <iconify-icon icon="mdi:cards-heart-outline" class="fs-3 heartIcon unLikeIcon d-none"></iconify-icon>
                 </div>

                 <p class="mt-2 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mb-1 favtext">Price - <span class="fw-bold">2000mmk</span></p>

                 <div class="d-flex justify-content-between">

                     <div class="gowebsite">
                         <button class="p-2"><a href="./shopinterface.php">Go to website</a></button>
                     </div>

                     <div>
                         <iconify-icon icon="ph:shopping-cart-fill" class="p-1 buyIcon fs-4 rounded-circle" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></iconify-icon>
                     </div>

                 </div>

             </div>

         </div>
         <div class="navLine my-4"></div>


     </div>
 </div>

 <!--------------cart----------------->

 <div class="offcanvas offcanvas-end cartBox" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header">
         <div class="d-flex ">
             <h5 id="offcanvasRightLabel" class="favList fs-3">Cart </h5>
             <iconify-icon icon="ph:shopping-cart-fill" class=" mt-2 ms-2 fs-3"></iconify-icon>
         </div>

         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="navLine"></div>
     <div class="offcanvas-body">
         <div class="d-flex">
             <div class="plusBox">
                 <iconify-icon icon="ic:baseline-plus" class="plusIcon"></iconify-icon>
                 <p class="mt-2 Num">2</p>
                 <iconify-icon icon="ic:sharp-minus" class="dashIcon"></iconify-icon>
             </div>
             <div class="ListImg me-3 col-5 mt-2">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%" class="dashIcon">
             </div>
             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                 </div>
                 <p class="mt-3 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mt-3 mb-1 favtext">Note - <span class="fw-bold">abcdefghijkl</span></p>
                 <p class="mt-3 mb-1 favtext">Price - <span class="fw-bold">20000mmk</span></p>
                 <div class="d-flex justify-content-between">
                 </div>
             </div>
         </div>
         <div class="navLine my-4"></div>

         <div class="d-flex">
             <div class="plusBox">
                 <iconify-icon icon="ic:baseline-plus" class="plusIcon"></iconify-icon>
                 <p class="mt-2 Num">2</p>
                 <iconify-icon icon="ic:sharp-minus" class="dashIcon"></iconify-icon>
             </div>
             <div class="ListImg me-3 col-5 mt-2">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%" class="dashIcon">
             </div>
             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                 </div>
                 <p class="mt-3 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mt-3 mb-1 favtext">Note - <span class="fw-bold">abcdefghijkl</span></p>
                 <p class="mt-3 mb-1 favtext">Price - <span class="fw-bold">20000mmk</span></p>
                 <div class="d-flex justify-content-between">
                 </div>
             </div>
         </div>
         <div class="navLine my-4"></div>

         <div class="d-flex">
             <div class="plusBox">
                 <iconify-icon icon="ic:baseline-plus" class="plusIcon"></iconify-icon>
                 <p class="mt-2 Num">2</p>
                 <iconify-icon icon="ic:sharp-minus" class="dashIcon"></iconify-icon>
             </div>
             <div class="ListImg me-3 col-5 mt-2">
                 <img src="./resources/img/cake.jpg" width="100%" height="100%" class="dashIcon">
             </div>
             <div class="col-7">
                 <div class="d-flex justify-content-between">
                     <div class="favProductTitle fw-bold">Chocolate Cake</div>
                 </div>
                 <p class="mt-3 mb-1 favtext">Shop Name - <span class="fw-bold">cofree coffee</span></p>
                 <p class="mt-3 mb-1 favtext">Note - <span class="fw-bold">abcdefghijkl</span></p>
                 <p class="mt-3 mb-1 favtext">Price - <span class="fw-bold">20000mmk</span></p>
                 <div class="d-flex justify-content-between">
                 </div>
             </div>
         </div>
         <div class="navLine my-4"></div>


         <div class="calprice mt-4">
             <div class="d-flex">
                 <div class="Sotext fw-bold">Sub total</div>
                 <div class="Toprice">60000 MMK</div>
             </div>
         </div>
         <div class="lineH"></div>
         <div class="calprice mt-4">
             <div class="d-flex">
                 <div class="Sotext fw-bold">Tax 5%</div>
                 <div class="Toprice1">4500 MMK</div>
             </div>
         </div>
         <div class="lineH"></div>
         <div class="calprice mt-4">
             <div class="d-flex">
                 <div class="Sotext fw-bold">Discount</div>
                 <div class="Toprice2">-500 MMK</div>
             </div>
         </div>
         <div class="lineH"></div>
         <div class="calprice mt-4">
             <div class="d-flex">
                 <div class="Sotext fw-bold">Grand Ttal<span class="tax">(incl.tax)</span></div>
                 <div class="Toprice3">64000 MMK</div>
             </div>
         </div>
         <div class="lineH"></div>
         <div class="CheckO">
             <button class="p-1"><a href="./orderconfirm.php">Check out</a></button>
         </div>
     </div>


 </div>

 <!---------- cart popup--------->

 <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title cart" id="staticBackdropLabel">Cart</h5>
                 <iconify-icon icon="ph:shopping-cart-fill" class="carti"></iconify-icon>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row mb-3">
                     <div class="col-6 text-center mt-5">
                         <img src="./resources/img/cake.jpg" alt="" class="image">
                     </div>
                     <div class="col-6 text-center">
                         <h5 class="cake">Cake</h5>
                         <div class="cartbox">
                             <div class="cartbox1">
                                 <iconify-icon icon="bi:dash-circle-fill" id="mine" class=" me-3"></iconify-icon>
                                 <h6 id="changeNum" class="fw-bold me-3">1</h6>
                                 <iconify-icon icon="mdi:plus-circle" id="plus"></iconify-icon>
                             </div>
                             <div class="line"></div>
                         </div>
                         <div class="cartbox">
                             <div class="cartbox1">
                                 <h6 class="fw-bold changeNum">15000MMk</h6>
                             </div>
                             <div class="babyline"></div>
                         </div>
                         <div class="input4 mt-4 text-center">
                             <textarea name="" id="" class="note" placeholder="Note to order"></textarea>
                         </div>
                     </div>
                 </div>
                 <div class="addtocart modal-footer">
                     <button class="p-2" data-bs-dismiss="modal">Add to Cart</button>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-----------------------------   RES side bar   --------------------------->
 <div class="position-absolute top-0 p-5  sideBar d-flex flex-column justify-content-center align-items-center ">
     <iconify-icon icon="fa6-solid:xmark" class="position-absolute" width="30" height="30" id="closeSideBar"></iconify-icon>

     <ul class="">
         <li class="nav-item">
             <a class="nav-link navtitle hometitle pb-2" href="./shopinterface.php">HOME</a>
         </li>
         <li class="nav-item">
             <a class="nav-link navtitle menutitle my-5 pb-2" href="./shopinterfacemenu.php">Menu</a>
         </li>
         <li class="nav-item ">
             <a class="nav-link navtitle bookingtitle pb-2" href="./booking.php">Booking</a>
         </li>
     </ul>
 </div>
 <div class="navLine"></div>