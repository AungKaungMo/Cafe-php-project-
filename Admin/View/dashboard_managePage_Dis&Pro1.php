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
            <div class="sliderTitle">Page 1</div>
                <div class="box">
                    <label for="promoTitle">Title</label>
                    <input type="text" id="promoTitle">
                </div>
                <div class="box">
                    <label for="promoTextbox1">Text Box 1</label>
                    <input type="text" id="promoTextbox1">
                </div>
                <div class="box">
                    <label for="promoIcon1">Icon 1</label>
                    <input type="text" id="promoIcon1">
                </div>
                <div class="box">
                    <label for="promoTextbox2">Text Box 2</label>
                    <input type="text" id="promoTextbox2">
                </div>
                <div class="box">
                    <label for="promoIcon2">Icon 2</label>
                    <input type="text" id="promoIcon2">
                </div>
                <div class="box">
                    <label for="promoTextbox3">Text Box 3</label>
                    <input type="text" id="promoTextbox3">
                </div>
                <div class="box">
                    <label for="promoIcon3">Icon 3</label>
                    <input type="text" id="promoIcon3">
                </div>
                <div class="box">
                    <label for="LinkSm1">Social Media Link 1</label>
                    <input type="text" id="LinkSm1">
                </div>
                <div class="box">
                    <label for="LinkSm2">Social Media Link 1</label>
                    <input type="text" id="LinkSm2">
                </div>
                <div class="box">
                    <label for="LinkSm3">Social Media Link 3</label>
                    <input type="text" id="LinkSm3">
                </div>
                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg">
                </div>             
            </div>

            <div class="my-3">
                <div class="sliderTitle">Slider 1 </div>
                <div class="box">
                    <label for="pictureSlide1">Picture 1</label>
                    <input type="file" id="pictureSlide1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pictureSlide2">Picture 2</label>
                    <input type="file" id="pictureSlide2" accept="image/png, image/jpeg">
                </div>  
                <div class="box">
                    <label for="pictureSlide3">Picture 3</label>
                    <input type="file" id="pictureSlide3" accept="image/png, image/jpeg">
                </div>    
                <div class="box">
                    <label for="pictureSlide4">Picture 4</label>
                    <input type="file" id="pictureSlide4" accept="image/png, image/jpeg">
                </div> 
            </div>

            <div class="my-3">
                <div class="sliderTitle">Section</div>
                <div class="box">
                    <label for="titleSection1">Title 1</label>
                    <input type="text" id="titleSection1">
                </div>
                <div class="box">
                    <label for="paragraphSection1">Paragraph 1</label>
                    <textarea id="paragraphSection1"></textarea>
                </div>
                <div class="box">
                    <label for="titleSection2">Title 2</label>
                    <input type="text" id="titleSection2">
                </div>
                <div class="box">
                    <label for="paragraphSection2">Paragraph 2</label>
                    <textarea id="paragraphSection2"></textarea>
                </div>
                <div class="box">
                    <label for="pictureSection1">Picture</label>
                    <input type="file" id="pictureSection1" accept="image/png, image/jpeg">
                </div>               
            </div>

            <div class="my-3">
                <div class="sliderTitle">Discount Shops</div>
                <div class="box">
                    <label for="titleDis1">Title 1</label>
                    <input type="text" id="titleDis1">
                </div>
                <div class="box">
                    <label for="pictureDis1">Picture 1</label>
                    <input type="file" id="pictureDis1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis2">Title 2</label>
                    <input type="text" id="titleDis2">
                </div>
                <div class="box">
                    <label for="pictureDis2">Picture 2</label>
                    <input type="file" id="pictureDis2" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis3">Title 3</label>
                    <input type="text" id="titleDis3">
                </div>
                <div class="box">
                    <label for="pictureDis3">Picture 3</label>
                    <input type="file" id="pictureDis3" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="titleDis4">Title 4</label>
                    <input type="text" id="titleDis4">
                </div>
                <div class="box">
                    <label for="pictureDis4">Picture 4</label>
                    <input type="file" id="pictureDis4" accept="image/png, image/jpeg">
                </div>
            </div>
        </div>
        <div class="saveBtn mb-5 ">
            <button>Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>

    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>