<?php
include "./resources/shared/dashboard.php";
session_start();
$userid = $_SESSION["userid"];
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_userprofile.css">
</head>

<body>


    <form>
        <div class="mt-5 mx-3 d-flex flex-column justify-content-center align-items-center">
            <div class=" position-relative">
                <div class="uploadImage">
                    <img src="./resources/img/profile.jpg">
                </div>
                <input type="file" hidden id="chooseFile" accept="image/png, image/jpeg">
                <iconify-icon icon="mdi:camera-plus" class="position-absolute bottom-0 fs-3" id="chooseImgFile"></iconify-icon>
            </div>

            <div class="mt-5">

                <div class="informtaionBox">
                    <label for="username">UserName</label>
                    <input type="text" id="username" value="1">
                </div>

                <div class="informtaionBox">
                    <label for="phone">Phone</label>
                    <input type="phone" id="phone" value="2">
                </div>

                <div class=" informtaionBox">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="3">
                </div>

                <div class=" autentication">Authentiation
                </div>
                <div class="autentication">cafe1234@gmail.com</div>

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