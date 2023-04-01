<?php
include "../Controller/selectfooterController.php";
?>


<!-- <div class="footerImg mt-5"></div>
<div class="footer">
    <div class="footerContainer d-flex mx-sm-5 mx-2 pt-5 mb-4 justify-content-between flex-wrap">
        <div class="footerLogo">
            <img src="./resources/img/footerlogo.png" width="200px">
        </div>
        <div class="navigation">
            <div class="footerTitle">Navigation</div>
            <div class="mt-4 d-flex flex-column footerDetails">
                <a href="./h.php">Home</a>
                <a href="./shop.php">Shop</a>
                <a href="./promotion.php">Promotions</a>
                <a href="./buyShop.php">Buy Shop</a>
            </div>
        </div>

        <div class="someLinks">
            <div class="footerTitle">Some Links</div>
            <div class="mt-4 d-flex flex-column footerDetails">
                <a href=".//FAQs.php">FAQS</a>
                <a href="">User Guide</a>
                <a href="./PrivacyPolicy.php">Privacy Policy</a>
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
</div> -->





<div class="footerImg mt-5"></div>
<div class="footer">
    <div class="footerContainer d-flex mx-sm-5 mx-2 pt-5 mb-4 justify-content-between flex-wrap">
        <div class="footerLogo">
            <img src="./resources/img/footerlogo.png" width="200px">
            <!-- <img src="../../Stroges/<?= $footer[0]["logo"] ?>" width="200px">-->
        </div>
        <div class="navigation">
            <div class="footerTitle">Navigation</div>
            <div class="mt-4 d-flex flex-column footerDetails">
                <a href="./h.php"><?= $footer[0]["nav_link1"]  ?></a>
                <a href="./shop.php"><?= $footer[0]["nav_link2"]  ?></a>
                <a href="./promotion.php"><?= $footer[0]["nav_link3"]  ?></a>
                <a href="./buyShop.php"><?= $footer[0]["nav_link4"]  ?></a>
            </div>
        </div>

        <div class="someLinks">
            <div class="footerTitle">Some Links</div>
            <div class="mt-4 d-flex flex-column footerDetails">
                <a href=".//FAQs.php"><?= $footer[0]["some_link1"]  ?></a>
                <a href=""><?= $footer[0]["some_link2"]  ?></a>
                <a href="./PrivacyPolicy.php"><?= $footer[0]["some_link3"]  ?></a>
            </div>
        </div>

        <div class="socialMedia">
            <div class="footerTitle">Social Media</div>
            <div class="mt-4 d-flex footerDetails">
                <a href="#"><iconify-icon icon="<?= $footer[0]["sm_link1"]  ?>"></iconify-icon></a>
                <a href="#"><iconify-icon icon="ph:instagram-logo-fill"></iconify-icon></a>
                <a href="#"><iconify-icon icon="mdi:github"></iconify-icon></a>

            </div>
        </div>

    </div>

    <div class="copyRight pb-3">
        <div class="w-75 m-auto mb-2"></div>
        <p class="text-center mb-0"><?= $footer[0]["c_text"]  ?></p>
    </div>
</div>