 <?php include  "../Controller/mainpromotionController.php"  ?>
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
   <!-- <script src="./promotion.js" defer></script> -->
   <script src="./resources/js/navigation.js"></script>


   <!------------------------   CSS   ----------------------------->
   <link rel="stylesheet" href="./resources/css/root.css">
   <link rel="stylesheet" href="./resources/css/navigationAndFooter.css">
   <link rel="stylesheet" href="./resources/css/cartpopup.css">
   <link rel="stylesheet" href="./resources/css/promotion.css" />
   <style>
     <?php foreach ($result as $persent) { ?>.box_ribbon::after {
       content: "<?= $persent["product_discount"] ?> % Off";
       position: absolute;
       width: 100%;
       height: 2em;
       background-color: var(--mainColor);
       transform: rotate(-45deg) translateY(-4.4em);
       font-family: var(--titleFont);
       font-size: var(--paragraphFontSize);
       display: flex;
       justify-content: center;
       align-items: center;

       text-transform: uppercase;
       color: var(--textColorPrimary);
       font-weight: 600;
       letter-spacing: 0.1em;

       box-shadow: 0 0.3em 0.6em rgba(0, 0, 0, 0.2);
     }

     <?php } ?>
   </style>
 </head>

 <body>

   <?php

    include "./resources/shared/nav.php";
    // include "../Model/dbConnection.php";

    ?>
   <!-- ===========================================Hero section================================ -->

   <div class="herosection">
     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

       <div class="carousel-control">
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
           <iconify-icon icon="grommet-icons:form-previous" class="slidePrev" width="45" height="45"></iconify-icon>
           <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
           <span class="visually-hidden">Previous</span>
         </button>

         <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" style="background-image: url('./resources/img/disitem.png'); background-repeat: no-repeat;" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url('./resources/img/disitem1.png'); background-repeat: no-repeat;"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-image: url('./resources/img/disitem2.png'); background-repeat: no-repeat;"></button>
         </div>

         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
           <iconify-icon icon="material-symbols:navigate-next" class="slideNext" width="45" height="45"></iconify-icon>
           <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
           <span class="visually-hidden">Next</span>
         </button>
       </div>

       <div class="carousel-inner">
         <div class="carousel-item active">
           <div class="row">
             <div class="col-sm-6 col-4">
               <div class="herocontent">
                 <p class="herotitle">10% Off in this month</p>

                 <p>
                   <iconify-icon icon="mdi:shop" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeShopName"> Htet Naung cafe</span>

                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:location-on" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeLoc">No.98, Pazundaung Road, Yangon</span>
                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:shopping-bag" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeName"> Ice tae with cream</span>
                 </p>
               </div>
             </div>

             <div class="col-sm-6 col-8">
               <img src="./resources/img/disitem.png" alt="...">
             </div>
           </div>

         </div>

         <div class="carousel-item">
           <div class="row">
             <div class="col-sm-6 col-4">
               <div class="herocontent">
                 <p class="herotitle">10% Off in this month</p>

                 <p>
                   <iconify-icon icon="mdi:shop" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeShopName">CJ Cafe</span>
                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:location-on" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeLoc">No.98, Pazundaung Road, Yangon</span>
                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:shopping-bag" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeName"> Ice tae with cream</span>
                 </p>
               </div>
             </div>

             <div class="col-sm-6 col-8">
               <img src="./resources/img/disitem1.png" alt="...">
             </div>
           </div>

         </div>

         <div class="carousel-item">
           <div class="row">
             <div class="col-sm-6 col-4">
               <div class="herocontent">
                 <p class="herotitle">10% Off in this month</p>

                 <p>
                   <iconify-icon icon="mdi:shop" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeShopName">The Hide Out cafe</span>
                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:location-on" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeLoc">No.98, Pazundaung Road, Yangon</span>

                 </p>

                 <p>
                   <iconify-icon icon="material-symbols:shopping-bag" class="promotionsHeaderIcons" width="24" height="24"></iconify-icon>
                   <span class="cafeName"> Ice tae with cream</span>
                 </p>
               </div>
             </div>

             <div class="col-sm-6 col-8">
               <img src="./resources/img/disitem2.png" alt="...">
             </div>
           </div>

         </div>
       </div>

     </div>

     <div class="whatwaveimg"></div>
   </div>

   <!-- =============================================what'new=================================== -->
   <!-- <div class="whatnewsection">
    <div class="row">
      <div class="col-4 script">
        <h2>What's new</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Ex inventore cumque adipisci aliquid maxime,
          veritatis tempora delectus fuga dolores ea fugit, ratione rerum
          repellat sed ipsam quod distinctio consequuntur. Odit.
        </p>
      </div>

      <div class="col-4 ">
        <img src="./resources/img/whatnew.png" alt="">
      </div>

      <div class="col-4 script">
        <h2>What's new</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Ex inventore cumque adipisci aliquid maxime,
          veritatis tempora delectus fuga dolores ea fugit, ratione rerum
          repellat sed ipsam quod distinctio consequuntur. Odit.
        </p>
      </div>

    </div>
    <div class="search">
      <input type="text">
      <iconify-icon icon="ic:baseline-search" class="promotionSearchIcon" width="50" height="50"></iconify-icon>
    </div>

  </div>


  </div> -->

   <!-- ===========================================Dis product==================================== -->

   <div class="container">
     <p class="subtitle">Discount Products</p>


     <div class="d-flex justify-content-around w-100 flex-wrap disBox">

       <?php
        foreach ($result as $data) { ?>
         <div class="box">
           <span class="box_ribbon"></span>
           <img src="../../Storages/<?= $data["product_photo"] ?>" alt="">
         </div>
       <?php  } ?>





       <!-- <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp1.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp2.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/disp3.png" alt="">
      </div> -->

     </div>
     <div class="seemore">
       <a href="./promotionmenu.php">see more<iconify-icon icon="material-symbols:arrow-forward" width="35" height="35"></iconify-icon></a>
     </div>
   </div>

   <!-- ===========================================Dis Shop ==================================== -->
   <!-- <div class="container">
    <p class="subtitle">Discount Shops</p>
    <div class="seemore">
      <a href="./Promotionshopmenu.php">see more</a><iconify-icon icon="material-symbols:arrow-forward" width="35" height="35"></iconify-icon>
    </div>

    <div class="d-flex justify-content-between w-100 flex-wrap disBox">

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/shop.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/shop.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/shop.png" alt="">
      </div>

      <div class="box">
        <span class="box_ribbon">
        </span>
        <img src="./resources/img/shop.png" alt="">
      </div>

    </div>
  </div> -->


   <?php
    include "./resources/shared/footer.php";
    ?>
 </body>

 </html>