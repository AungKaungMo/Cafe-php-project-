<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_footer.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    include "../Controller/footerController.php";
    $text = $result;
    ?>
    <form action="../Controller/footerUpdateController.php" method="post" enctype="multipart/form-data">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">
                <div class="sliderTitle">Navigation</div>
                <div class="box">
                    <label for="navLinkOne">Link 1</label>
                    <input type="text" name="nav1" id="navLinkOne" value="<?= $text[0]["nav_link1"]  ?>">
                </div>
                <div class="box">
                    <label for="navLinkTwo">Link 2</label>
                    <input type="text" name="nav2" id="navLinkTwo" value="<?= $text[0]["nav_link2"]  ?>">
                </div>
                <div class="box">
                    <label for="navLinkThree">Link 3</label>
                    <input type="text" id="navLinkThree" name="nav3" value="<?= $text[0]["nav_link3"]  ?>">
                </div>
                <div class="box">
                    <label for="navLinkFour">Link 4</label>
                    <input type="text" id="navLinkFour" name="nav4" value="<?= $text[0]["nav_link4"]  ?>">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Some Links</div>
                <div class="box">
                    <label for="linkOne">Link 1</label>
                    <input type="text" id="linkOne" name="some1" value="<?= $text[0]["some_link1"]  ?>">
                </div>
                <div class="box">
                    <label for="linkTwo">Link 2</label>
                    <input type="text" id="linkTwo" name="some2" value="<?= $text[0]["some_link2"]  ?>">
                </div>
                <div class="box">
                    <label for="linkThree">Link 3</label>
                    <input type="text" id="linkThree" name="some3" value="<?= $text[0]["some_link3"]  ?>">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Social Media</div>
                <div class="box">
                    <label for="linksmOne">Link 1</label>
                    <input type="text" id="linksmOne" name="sm1" value="<?= $text[0]["sm_link1"] ?>">
                </div>
                <div class="box">
                    <label for="linksmTwo">Link 2</label>
                    <input type="text" id="linksmTwo" name="sm2" value="<?= $text[0]["sm_link2"]  ?>">
                </div>
                <div class="box">
                    <label for="linksmThree">Link 3</label>
                    <input type="text" id="linksmThree" name="sm3" value="<?= $text[0]["sm_link3"]  ?>">
                </div>
            </div>

            <div class="my-3">
                <div class="sliderTitle">Copyright</div>
                <div class="box">
                    <label for="textCopyright">Text</label>
                    <input type="text" id="textCopyright" name="ctext" value="<?= $text[0]["c_text"]  ?>">
                </div>
                <div class="productImg">
                    <img id="profileimg" src="../../Storages/<?php echo $text[0]["logo"] ?>" width="200px">
                </div>
                <div class="box">
                    <label for="picturelogo"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></label>
                    <input type="file" id="picturelogo" name="logo" accept="image/png, image/jpeg" hidden>
                </div>
            </div>
        </div>
        <div class="saveBtn mb-5 ">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>

    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
    <script>
        picturelogo.addEventListener("change", function() {
            document.getElementById("profileimg").src = window.URL.createObjectURL(event.target.files[0]);
        })
    </script>
</body>

</html>