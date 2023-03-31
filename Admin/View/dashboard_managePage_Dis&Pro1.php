<?php
session_start();
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_Dis&Pro1n2.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    include "../Controller/dashboard_dis&promotion_showController.php";
    ?>


    <div class="d-flex flex-column justify-content-center align-items-center">
        <form method="post" action="../Controller/dasbboard_manage_disAndproController1.php" enctype="multipart/form-data">
            <div class="my-3">
                <input type="hidden">
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="../../Storages/<?= $result[0]["slide_image1"] ?>" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="one" width="30" height="30"></iconify-icon>
                    <input type="file" name="slideImg1" class="inpFile" hidden>
                </div>
                <div class="box">
                    <label for="tit1">Title 1</label>
                    <input type="text" id="tit1" name="title1" value="<?= $result[0]["title1"] ?>">
                </div>
                <div class="box">
                    <label for="cafe1">Cafe Name 1</label>
                    <input type="text" id="cafe1" name="cafe1" value="<?= $result[0]["cafe_shop1"] ?>">
                </div>
                <div class="box">
                    <label for="address1">Address 1</label>
                    <input type="text" id="address1" name="add1" value="<?= $result[0]["address1"] ?>">
                </div>
                <div class="box">
                    <label for="promoTextbox1">Product Name 1</label>
                    <input type="text" id="promoTextbox1" name="product1" value="<?= $result[0]["product_name1"] ?>">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="../../Storages/<?= $result[0]["slide_image2"] ?>" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="two" width="30" height="30"></iconify-icon>
                    <input type="file" name="slideImg2" class="inpFile" hidden>
                </div>
                <div class="box">
                    <label for="tit2">Title 2</label>
                    <input type="text" id="tit2" name="title2" value="<?= $result[0]["title2"] ?>">
                </div>
                <div class="box">
                    <label for="cafe2">Cafe Name 2</label>
                    <input type="text" id="cafe2" name="cafe2" value="<?= $result[0]["cafe_shop2"] ?>">
                </div>
                <div class="box">
                    <label for="address2">Address 2</label>
                    <input type="text" id="address2" name="add2" value="<?= $result[0]["address2"] ?>">
                </div>
                <div class="box">
                    <label for="promoTextbox2">Product Name 2</label>
                    <input type="text" id="promoTextbox2" name="product2" value="<?= $result[0]["product_name2"] ?>">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="../../Storages/<?= $result[0]["slide_image3"] ?>" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="three" width="30" height="30"></iconify-icon>
                    <input type="file" name="slideImg3" class="inpFile" hidden>
                </div>
                <div class="box">
                    <label for="tit3">Title 3</label>
                    <input type="text" id="tit3" name="title3" value="<?= $result[0]["title3"] ?>">
                </div>
                <div class="box">
                    <label for="cafe3">Cafe Name 3</label>
                    <input type="text" id="cafe3" name="cafe3" value="<?= $result[0]["cafe_shop3"] ?>">
                </div>
                <div class="box">
                    <label for="address3">Address 3</label>
                    <input type="text" id="address3" name="add3" value="<?= $result[0]["address3"] ?>">
                </div>
                <div class="box">
                    <label for="promoTextbox3">Product Name 3</label>
                    <input type="text" id="promoTextbox3" name="product3" value="<?= $result[0]["product_name3"] ?>">
                </div>
            </div>

            <div class="saveBtn mb-5 ">
                <button name="savechange1">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
            </div>
        </form>

        <form>

            <div class="my-3">
                <div class="sliderTitle">Discount Products</div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis1">Dis 1</label>
                    <input type="text" id="titleDis1" name="dis">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis2">Dis 2</label>
                    <input type="text" id="titleDis2">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis3">Dis 3</label>
                    <input type="text" id="titleDis3">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis4">Dis 4</label>
                    <input type="text" id="titleDis4">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Discount Shops</div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis11">Dis 1</label>
                    <input type="text" id="titleDis11">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis22">Dis 2</label>
                    <input type="text" id="titleDis22">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis33">Dis 3</label>
                    <input type="text" id="titleDis33">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" class="uploadImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" width="30" height="30"></iconify-icon>
                    <input type="file" class="inpFile" name="" hidden>
                </div>
                <div class="box">
                    <label for="titleDis44">Dis 4</label>
                    <input type="text" id="titleDis4">
                </div>
            </div>


    </div>
    <div class="saveBtn mb-5 ">
        <button name="savechange2">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
    </div>

    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
    <script src="./resources/js/dashboard_manage_dis&pro.js"></script>

</body>

</html>