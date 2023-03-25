<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_PrivacyPolicy.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>
    <form action="../Controller/privacyController.php" method="post">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="my-3">
                <div class="sliderTitle">Rule</div>
                <div class="box">
                    <textarea id="paragraph" name="paragraph"></textarea>
                </div>
            </div>
        </div>
        <div class="saveBtn mb-5 ">
            <button name="saveChange">Save Change 
                <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>