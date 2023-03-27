<?php
// session_start();
include "./resources/shared/dashboard.php";
include "../Controller/shop_notificationController.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_profile_notifications.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_profile.php";
    ?>

    <?php
    for ($i = 0; $i < count($result); $i++) {
    ?>

        <div class="notificationsBoxContainer mx-sm-5 mx-3 my-5">
            <div class="notificationsBox p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="fs-4 fw-bold"><?php echo $result[$i]["expire_details_title"] ?><span class="fs-6 opacity-75"> <?php echo ' (' . substr($result[$i]["package_expire_date"], 0, 10)  . ')' ?></span></h1>

                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                        <a href="../Controller/shop_notification_deleteController.php?id=<?= $result[$i]["id"] ?>" class="d-flex align-items-center justify-content-center">
                            <iconify-icon icon="fa6-solid:xmark" class="fs-3"></iconify-icon>
                        </a>

                    </div>
                </div>
                <div class="mt-4 notificationsText">
                    <?php echo $result[$i]["expire_details_paragraph"] ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!--------------  Ending Tab  ---------------->
    </div>
    </div>

    <script src="./resources/js/dashboard_profile.js"></script>
</body>

</html>