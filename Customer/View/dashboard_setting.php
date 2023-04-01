<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
</head>

<body>

    <form action="../Controller/changepasswordController.php" method="post">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="password mt-5">
                <input type="password" placeholder="Old password" name="old"><br><br>
                <input type="password" placeholder="New password" name="new1"><br><br>
                <input type="password" placeholder="Confirm new password" name="new2">
            </div>
        </div>

        <div class="saveBtn ">
            <button name="change">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>

    <!----------------  End Tab  ------------------>
    </div>
    </div>

</body>

</html>