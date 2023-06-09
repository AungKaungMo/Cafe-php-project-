 <!------------------   Favourite   ------------------------>

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


 <!---------- cart popup--------->

 <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title cart" id="staticBackdropLabel">Cart</h5>
         <iconify-icon icon="ph:shopping-cart-fill" class="carti"></iconify-icon>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="window.location.reload();"></button>
       </div>
       <div class="modal-body">
         <div class="row mb-3">
           <div class="col-6 text-center mt-5">
             <img src="./resources/img/cake.jpg" alt="" class="image orderImage">
           </div>
           <div class="col-6 text-center">
             <h5 class="cake">Cake</h5>
             <div class="cartbox">
               <div class="cartbox1">
                 <iconify-icon icon="bi:dash-circle-fill" id="mine" class=" me-3 minus"></iconify-icon>
                 <h6 id="changeNum" class="fw-bold me-3 countItem">1</h6>
                 <iconify-icon icon="mdi:plus-circle" id="plus" class="plus"></iconify-icon>
               </div>
               <div class="line"></div>
             </div>
             <div class="cartbox">
               <div class="cartbox1">
                 <h6 class="fw-bold changeNum mmk">15000 MMk</h6>
               </div>
               <div class="babyline"></div>
               <!-- <div class="cartbox1">
                 <h6 class="fw-bold changeNum coin">15000 Coins</h6>
               </div> -->
               <!-- <div class="babyline"></div> -->
             </div>
             <div class="input4 mt-4 text-center">
               <textarea name="" id="noteToOrder" class="note" placeholder="Note to order"></textarea>
             </div>
           </div>
         </div>
         <div class="addtocart modal-footer">
           <button class="p-2 addCart" data-bs-dismiss="modal" name="addtocart">Add to Cart</button>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Confirm Modal -->
 <div class="modal fade " id="staticBackdropConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered  ">
     <div>
       <div class="modal-content text-center subPop">
         <div class=" text-end">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div>
           <div><iconify-icon class="circleClick" icon="mdi:question-mark-circle-outline"></iconify-icon></div>
         </div>
         <div class="modal-body text-center">
           <div class="mainPop">
             <div class="h2 mb-3 fw-bold">Confirm Title</div>
             <div class="mb-5 thankPurchase">Confirm Message</div>
             <button type="button" class="btn text-white Back2Home me-5">Cancel </button>
             <button type="button" class="btn text-white Back2Home ms-5">Confirm</button>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 </div>