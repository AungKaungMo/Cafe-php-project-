<?php
ini_set("display_errors", "1");
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_blog.css">
</head>

<body>
    <?php
    include "./resources/shared/dashboard_setting.php";
    include "../Controller/shop_setting_blogInsertController.php";
    ?>

    <form action="../Controller/shop_setting_blogInsertController.php" method="post"  enctype="multipart/form-data">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <div>

                <div class="box">
                    <label for="maintitle">Main Title</label>
                    <input type="text" id="maintitle" name="mTitle">
                </div>
                <div class="box">
                    <label for="firsttitle">First Title</label>
                    <input type="text" id="firsttitle" name="fTitle">
                </div>
                <div class="box">
                    <label for="secondtitle">Second Title</label>
                    <input type="text" id="secondtitle" name="sTitle">
                </div>
                <div class="box">
                    <label for="thirdtitle">Third Title</label>
                    <input type="text" id="thirdtitle" name="tTitle">
                </div>
                <div class="box">
                    <label for="firstparagraph">First Paragraph</label>
                    <textarea id="firstparagraph" name="fPara"></textarea>
                </div>
                <div class="box">
                    <label for="secondparagraph">Second Paragraph</label>
                    <textarea id="secondparagraph" name="sPara"></textarea>
                </div>
                <div class="box">
                    <label for="thirdparagraph">Third Paragraph</label>
                    <textarea id="thirdparagraph" name="tPara"></textarea>
                </div>
                <!-- <div class="box">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date">
                </div> -->
                <!-- <div class="box">
                    <label for="blogpicture">Blog Picture</label>
                    <input type="file" id="blogpicture" accept="image/png, image/jpeg">
                </div> -->
                <div class="box">
                    <div class="m-auto aboutImg picture"> Blog Image
                        <img src=""  id="acceptImage" name="bImage" width="200px">
                        <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon" width="30" height="30" id="upload"></iconify-icon>
                    </div>
                    <input type="file" hidden id="picture" class="pic" accept="image/png, image/jpeg" name="bImage">
                </div>

                <div class="box">
                    <label for="authorname">Aurthor Name</label>
                    <input type="text" id="authorname" name="auName">
                </div>
                <div class="box">
                    <div class="m-auto aboutImg picture"> Author Image
                        <img src=""  id="acceptImage1" name="aImage" width="200px">
                        <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon" width="30" height="30" id="upload1"></iconify-icon>
                    </div>
                    <input type="file" hidden id="picture1" accept="image/png, image/jpeg" name="aImage">
                </div>
                <div class="box">
                    <label for="fblink">FB Link</label>
                    <input type="text" id="fblink" name="fbLink">
                </div>
                <div class="box">
                    <label for="instagramlink">Instagram Link</label>
                    <input type="text" id="instagramlink" name="igLink">
                </div>
                <div class="box">
                    <label for="twitterlink">Twitter Link</label>
                    <input type="text" id="twitterlink" name="twtLink">
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <button name="submit">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
    <script>
        $("#upload").click(() => {
            $("#picture").click();
            $("#picture").change(() => {
                document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]);
            })
        })

        $("#upload1").click(() => {
            $("#picture1").click();
            $("#picture1").change(() => {
                document.getElementById("acceptImage1").src = window.URL.createObjectURL(event.target.files[0]);
            })
        })
    </script>
</body>

</html>