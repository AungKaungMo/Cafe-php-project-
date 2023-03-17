<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_profile_informtaions.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_profile.php";
    ?>
    <form>
        <div class="mt-5 mx-3 d-flex flex-column justify-content-center align-items-center">
            <div class=" position-relative">
                <div class="uploadImage">
                    <img src="./resources/img/shopOwner.jpg">
                </div>
                <input type="file" hidden id="chooseFile" accept="image/png, image/jpeg">
                <iconify-icon icon="mdi:camera-plus" class="position-absolute bottom-0 fs-3" id="chooseImgFile"></iconify-icon>
            </div>

            <div class="mt-5">


                <div class="informtaionBox">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" accept="image/png, image/jpeg">
                </div>

                <div class="informtaionBox">
                    <label for="name">Name</label>
                    <input type="text" id="name">
                </div>

                <div class="informtaionBox">
                    <label for="password">Password</label>
                    <input type="password" id="password">
                </div>

                <div class="informtaionBox">
                    <label for="location">Location</label>
                    <input type="text" id="location">
                </div>

                <div class="informtaionBox">
                    <label for="phone">Phone</label>
                    <input type="phone" id="phone">
                </div>

                <div class="informtaionBox">
                    <label for="email">Contact Email</label>
                    <input type="email" id="email">
                </div>

                <div class="informtaionBox">
                    <label for="facebook">Facebook</label>
                    <input type="text" id="facebook">
                </div>

                <div class="informtaionBox">
                    <label for="instagram">Instagram</label>
                    <input type="text" id="instagram">
                </div>

                <div class="informtaionBox">
                    <label for="twitter">Twitter</label>
                    <input type="text" id="twitter">
                </div>

            </div>
        </div>
        <div class="saveBtn ">
            <button>Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
        <form>

            </div>
            </div>
            <script src="./resources/js/dashboard.js"></script>
            <script src="./resources/js/dashboard_profile.js"></script>
</body>

</html>