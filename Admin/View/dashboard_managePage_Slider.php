<?php
ini_set("display_errors", "1");
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_slider.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    include "../Controller/sliderSelectController.php";
    ?>
    <form action="../Controller/sliderUpController.php" method="post" enctype="multiple/form-data">
        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">
                <div class="sliderTitle">Slider 1</div>

                <div class="box">
                    <label for="title1">Title 1</label>
                    <input type="text" id="title1" name="title1" value="<?= $resultslider[0]["titleOne"] ?>">
                </div>

                <div class="box">
                    <label for="paragraph1">Paragraph 1</label>
                    <textarea id="paragraph1" name="para1"><?= $resultslider[0]["paraOne"] ?></textarea>
                </div>

                <div class="text-center  mb-3">
                    <img src="../../Storages/<?= $resultslider[0]["imgOne"] ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="simage1" />
                </div>

                <div class="box">
                    <label for="image1"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                    <input type="file" id="image1" accept="image/png, image/jpeg" name="image1" hidden>
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Slider 2</div>

                <div class="box">
                    <label for="title2">Title 2</label>
                    <input type="text" id="title2" name="title2" value="<?= $resultslider[0]["titleTwo"] ?>">
                </div>

                <div class="box">
                    <label for="paragraph2">Paragraph 2</label>
                    <textarea id="paragraph2" name="para2"><?= $resultslider[0]["paraTwo"] ?></textarea>
                </div>

                <div class="text-center  mb-3">
                    <img src="../../Storages/<?= $resultslider[0]["imgTwo"] ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="simage2" <?= $resultslider[0]["imgTwo"] ?> />
                </div>

                <div class="box">
                    <label for="image2"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                    <input type="file" id="image2" accept="image/png, image/jpeg" name="image2" hidden>
                </div>

            </div>

            <div class="my-3">
                <div class="sliderTitle">Slider 3</div>

                <div class="box">
                    <label for="title3">Title 3</label>
                    <input type="text" id="title3" name="title3" value="<?= $resultslider[0]["titleThree"] ?>">
                </div>

                <div class="box">
                    <label for="paragraph3">Paragraph 3</label>
                    <textarea id="paragraph3" name="para3"><?= $resultslider[0]["paraThree"] ?></textarea>
                </div>

                <div class="text-center  mb-3">
                    <img src="../../Storages/<?= $resultslider[0]["imgThree"] ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="simage3" value="<?= $resultslider[0]["imgThree"] ?>" />
                </div>

                <div class="box">
                    <label for="image3"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                    <input type="file" id="image3" accept="image/png, image/jpeg" name="image3" hidden>
                </div>

            </div>
        </div>
         
        <div class="saveBtn ">
            <button name="saveChange" type="submit">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
    <script>
        image1.addEventListener("change", function() {
            document.getElementById("simage1").src = window.URL.createObjectURL(event.target.files[0]);
        })
        image2.addEventListener("change", function() {
            document.getElementById("simage2").src = window.URL.createObjectURL(event.target.files[0]);
        })
        image3.addEventListener("change", function() {
            document.getElementById("simage3").src = window.URL.createObjectURL(event.target.files[0]);
        })
    </script>
</body>

</html>