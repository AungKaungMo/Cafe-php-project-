<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_Services.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    include "../Controller/serviceController.php";
    ?>
    <form action="../Controller/serviceUpdateController.php" method="post">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3 mt-5">

                <div class="box">
                    <label for="textbox1">Text Box 1</label>
                    <input type="text" id="textbox1" name="text1" value="<?= $result[0]["text_box1"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 1</label>
                    <input type="text" id="icon1" name="icon1" value="<?= $result[0]["icon1"] ?>">
                </div>
                <div class="box">
                    <label for="textbox1">Text Box 2</label>
                    <input type="text" id="textbox1" name="text2" value="<?= $result[0]["text_box2"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 2</label>
                    <input type="text" id="icon2" name="icon2" value="<?= $result[0]["icon2"] ?>">
                </div>
                <div class="box">
                    <label for="textbox1">Text Box 3</label>
                    <input type="text" id="textbox1" name="text3" value="<?= $result[0]["text_box3"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 3</label>
                    <input type="text" id="icon3" name="icon3" value="<?= $result[0]["icon3"] ?>">
                </div>
                <div class="box">
                    <label for="textbox1">Text Box 4</label>
                    <input type="text" id="textbox1" name="text4" value="<?= $result[0]["text_box4"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 4</label>
                    <input type="text" id="icon4" name="icon4" value="<?= $result[0]["icon4"] ?>">
                </div>
                <div class="box">
                    <label for="textbox1">Text Box 5</label>
                    <input type="text" id="textbox1" name="text5" value="<?= $result[0]["text_box5"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 5</label>
                    <input type="text" id="icon5" name="icon5" value="<?= $result[0]["icon5"] ?>">
                </div>
                <div class="box">
                    <label for="textbox1">Text Box 6</label>
                    <input type="text" id="textbox1" name="text6" value="<?= $result[0]["text_box6"] ?>">
                </div>
                <div class="box">
                    <label for="icon1">Icon 6</label>
                    <input type="text" id="icon6" name="icon6" value="<?= $result[0]["icon6"] ?>">
                </div>
            </div>
        </div>
        <div class="saveBtn mb-5">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>

    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>