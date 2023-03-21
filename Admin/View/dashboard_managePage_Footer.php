<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_Footer.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    ?>
    <form>

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">
                <div class="sliderTitle">Navigation</div>
                <div class="box">
                    <label for="navLinkOne">Link 1</label>
                    <input type="text" id="navLinkOne">
                </div>
                <div class="box">
                    <label for="navLinkTwo">Link 2</label>
                    <input type="text" id="navLinkTwo">
                </div>
                <div class="box">
                    <label for="navLinkThree">Link 3</label>
                    <input type="text" id="navLinkThree">
                </div>
                <div class="box">
                    <label for="navLinkFour">Link 4</label>
                    <input type="text" id="navLinkFour">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Some Links</div>
                <div class="box">
                    <label for="linkOne">Link 1</label>
                    <input type="text" id="linkOne">
                </div>
                <div class="box">
                    <label for="linkTwo">Link 2</label>
                    <input type="text" id="linkTwo">
                </div>
                <div class="box">
                    <label for="linkThree">Link 3</label>
                    <input type="text" id="linkThree">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Social Media</div>
                <div class="box">
                    <label for="linksmOne">Link 1</label>
                    <input type="text" id="linksmOne">
                </div>
                <div class="box">
                    <label for="linksmTwo">Link 2</label>
                    <input type="text" id="linksmTwo">
                </div>
                <div class="box">
                    <label for="linksmThree">Link 3</label>
                    <input type="text" id="linksmThree">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Copyright</div>
                <div class="box">
                    <label for="textCopyright">Text</label>
                    <input type="text" id="textCopyright">
                </div>
                <div class="box">
                    <label for="picturelogo">Picture</label>
                    <input type="file" id="picturelogo" accept="image/png, image/jpeg">
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