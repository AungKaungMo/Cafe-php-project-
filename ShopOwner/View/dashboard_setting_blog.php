<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_blog.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>

    <form>
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <div>

                <div class="box">
                    <label for="maintitle">Main Title</label>
                    <input type="text" id="maintitle">
                </div>
                <div class="box">
                    <label for="firsttitle">First Title</label>
                    <input type="text" id="firsttitle">
                </div>
                <div class="box">
                    <label for="secondtitle">Second Title</label>
                    <input type="text" id="secondtitle">
                </div>
                <div class="box">
                    <label for="thirdtitle">Third Title</label>
                    <input type="text" id="thirdtitle">
                </div>
                <div class="box">
                    <label for="firstparagraph">First Paragraph</label>
                    <textarea id="firstparagraph"></textarea>
                </div>
                <div class="box">
                    <label for="secondparagraph">Second Paragraph</label>
                    <textarea id="secondparagraph"></textarea>
                </div>
                <div class="box">
                    <label for="thirdparagraph">Third Paragraph</label>
                    <textarea id="thirdparagraph"></textarea>
                </div>
                <div class="box">
                    <label for="date">Second Title</label>
                    <input type="date" id="date">
                </div>
                <div class="box">
                    <label for="blogpicture">Blog Picture</label>
                    <input type="file" id="blogpicture" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="aurthorname">Aurthor Name</label>
                    <input type="text" id="aurthorname">
                </div>
                <div class="box">
                    <label for="aurthorImage">Aurthor Image</label>
                    <input type="file" id="aurthorImage" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="fblink">FB Link</label>
                    <input type="text" id="fblink">
                </div>
                <div class="box">
                    <label for="instagramlink">Instagram Link</label>
                    <input type="text" id="instagramlink">
                </div>
                <div class="box">
                    <label for="twitterlink">Twitter Link</label>
                    <input type="text" id="twitterlink">
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <button>Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_setting.js"></script>
</body>

</html>