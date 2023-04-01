<?php
include "../Controller/profileController.php";
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_userprofile.css">
</head>

<body>

    <form action="../Controller/UpdatepfController.php" method="post" enctype="multipart/form-data">
        <div class="mt-5 mx-3 d-flex flex-column justify-content-center align-items-center">
            <div class=" position-relative">
                <div class="uploadImage">
                    <?php
                    if ($pf[0]["cus_profile"] == null) { ?>
                        <img src="./resources/img/profile.png" id="acceptImage">
                    <?php    } else { ?>
                        <img src="../../Storages/<?= $pf[0]["cus_profile"] ?>" alt="Los Angeles Skyscrapers" id="acceptImage">
                    <?php    }
                    ?>

                </div>
                <iconify-icon icon="mdi:camera-plus" class="position-absolute bottom-0 fs-3" id="chooseImgFile"></iconify-icon>
                <input type="file" hidden id="chooseFile" name="profile" accept="image/png, image/jpeg">
            </div>

            <div class="mt-5">

                <div class="informtaionBox">
                    <label for="username">UserName</label>
                    <input type="text" id="username" name="uname" value="<?= $pf[0]["cus_name"] ?>">
                </div>

                <div class="informtaionBox">
                    <label for="phone">Phone</label>
                    <input type="phone" id="phone" name="phone" value="<?= $pf[0]["cus_phone"] ?>">
                </div>

                <div class=" informtaionBox">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= $pf[0]["cus_email"] ?>">
                </div>

                <div class=" autentication">Authentiation
                </div>
                <div class="autentication">cafe1234@gmail.com</div>

            </div>
        </div>
        <div class="saveBtn ">
            <button name="upbtn">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>

    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
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