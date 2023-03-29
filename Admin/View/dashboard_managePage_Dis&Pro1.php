<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_Dis&Pro1n2.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    ?>
    <form>

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" id="imgone">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="one" width="30" height="30"></iconify-icon>
                    <input type="file" name="image1" id="inpone" hidden>
                </div>
                <div class="box">
                    <label for="tit1">Title 1</label>
                    <input type="text" id="tit1">
                </div>
                <div class="box">
                    <label for="cafe1">Cafe Name 1</label>
                    <input type="text" id="cafe1">
                </div>
                <div class="box">
                    <label for="address1">Address 1</label>
                    <input type="text" id="address1">
                </div>
                <div class="box">
                    <label for="promoTextbox1">Product Name 1</label>
                    <input type="text" id="promoTextbox1">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" id="imgtwo">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="two" width="30" height="30"></iconify-icon>
                    <input type="file" name="image2" id="inptwo" hidden>
                </div>
                <div class="box">
                    <label for="tit2">Title 2</label>
                    <input type="text" id="tit2">
                </div>
                <div class="box">
                    <label for="cafe2">Cafe Name 2</label>
                    <input type="text" id="cafe2">
                </div>
                <div class="box">
                    <label for="address2">Address 2</label>
                    <input type="text" id="address2">
                </div>
                <div class="box">
                    <label for="promoTextbox2">Product Name 2</label>
                    <input type="text" id="promoTextbox2">
                </div>
                <div class="m-auto defaultImg d-flex align-items-center">
                    <img src="./resources/img/default.png" id="imgthree">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon upload" id="three" width="30" height="30"></iconify-icon>
                    <input type="file" name="image3" id="inpthree" hidden>
                </div>
                <div class="box">
                    <label for="tit3">Title 3</label>
                    <input type="text" id="tit3">
                </div>
                <div class="box">
                    <label for="cafe3">Cafe Name 3</label>
                    <input type="text" id="cafe3">
                </div>
                <div class="box">
                    <label for="address3">Address 3</label>
                    <input type="text" id="address3">
                </div>
                <div class="box">
                    <label for="promoTextbox3">Product Name 3</label>
                    <input type="text" id="promoTextbox3">
                </div>
            </div>


            <div class="my-3">
                <div class="sliderTitle">Discount Products</div>
                <div class="box">
                    <label for="titleDis1">Dis 1</label>
                    <input type="text" id="titleDis1">
                </div>
                <div class="box">
                    <label for="pictureDis1">Picture 1</label>
                    <input type="file" id="pictureDis1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis2">Dis 2</label>
                    <input type="text" id="titleDis2">
                </div>
                <div class="box">
                    <label for="pictureDis2">Picture 2</label>
                    <input type="file" id="pictureDis2" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis3">Dis 3</label>
                    <input type="text" id="titleDis3">
                </div>
                <div class="box">
                    <label for="pictureDis3">picture 3</label>
                    <input type="file" id="pictureDis3" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis4">Dis 4</label>
                    <input type="text" id="titleDis4">
                </div>
                <div class="box">
                    <label for="pictureDis4">Picture 4</label>
                    <input type="file" id="pictureDis4" accept="image/png, image/jpeg">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Discount Shops</div>
                <div class="box">
                    <label for="titleDis11">Dis 1</label>
                    <input type="text" id="titleDis11">
                </div>
                <div class="box">
                    <label for="pictureDis11">Picture 1</label>
                    <input type="file" id="pictureDis11" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis22">Dis 2</label>
                    <input type="text" id="titleDis22">
                </div>
                <div class="box">
                    <label for="pictureDis22">Picture 2</label>
                    <input type="file" id="pictureDis22" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis33">Dis 3</label>
                    <input type="text" id="titleDis33">
                </div>
                <div class="box">
                    <label for="pictureDis33">picture 3</label>
                    <input type="file" id="pictureDis33" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis44">Dis 4</label>
                    <input type="text" id="titleDis4">
                </div>
                <div class="box">
                    <label for="pictureDis4">Picture 4</label>
                    <input type="file" id="pictureDis44" accept="image/png, image/jpeg">
                </div>
            </div>


        </div>
        <div class="saveBtn mb-5 ">
            <button name="savechange">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
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