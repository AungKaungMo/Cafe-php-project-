<?php
// session_start();
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_profile_informtaions.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_profile.php";
    include "../Controller/shop_informationController.php";
    ?>
    <form method="post" action="../Controller/shop_information_updateController.php" enctype="multipart/form-data">
        <div class="mt-5 mx-3 d-flex flex-column justify-content-center align-items-center">
            <div class=" position-relative">
                <div class="uploadImage">
                    <img src="../../Storages/<?= $result[0]["shop_logo"] ?>" id="acceptImage">
                    <input type="file" id="chooseFile" name="shopLogo" accept="image/png, image/jpeg" hidden>
                </div>
              
                <iconify-icon icon="mdi:camera-plus" class="position-absolute bottom-0 fs-3" id="chooseImgFile"></iconify-icon>
            </div>

            <div class="mt-5">

                <div class="informtaionBox">
                    <label for="name">Shop Name</label>
                    <input type="text" id="name" name="shopname" value="<?= $result[0]["shop_name"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="location">Address</label>
                    <input type="text" id="location" name="shopaddress" value="<?= $result[0]["shop_address"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="phone">Phone</label>
                    <input type="phone" id="phone" name="shopphone" value="<?= $result[0]["shop_phone"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="email">Contact Email</label>
                    <input type="email" id="email" name="contactemail" value="<?= $result[0]["contact_email"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="facebook">Facebook</label>
                    <input type="text" id="facebook" name="fblink" value="<?= $result[0]["fb_link"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="instagram">Instagram</label>
                    <input type="text" id="instagram" name="instalink" value="<?= $result[0]["insta_link"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="twitter">Twitter</label>
                    <input type="text" id="twitter" name="twitterlink" value="<?= $result[0]["twitter_link"] ?>">
                </div>

            </div>
        </div>
        <div class="saveBtn ">
            <button type="submit" name="savechange">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>

            </div>
            </div>

            <script src="./resources/js/dashboard_profile.js"></script>
            <script>
                $("#chooseImgFile").click(() => {
                    $("#chooseFile").click();
                    $("#chooseFile").change(() => {
                        document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]);
                    })
                })
            </script>
</body>

</html>