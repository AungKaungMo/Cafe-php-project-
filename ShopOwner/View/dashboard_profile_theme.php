<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_profile_Theme.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_profile.php";
    ?>

        <div class="d-flex justify-content-center flex-column align-items-center">

        <div>
            <div class="colorBox mt-5">
                <label for="backgroundPrimary">Background</label>
                <input type="color" id="backgroundPrimary" value="#EEEEEE">
            </div>

            <div class="colorBox">
                <label for="mainColor">sideBar</label>
                <input type="color" id="mainColor" value="#765341">
            </div>

            <div class="colorBox">
                <label for="secondMainColor">subColor</label>
                <input type="color" id="secondMainColor" value="#FFEBCD">
            </div>

            <div class="colorBox">
                <label for="backgroundTertiary">Box</label>
                <input type="color" id="backgroundTertiary" value="#FFFFFF">
            </div>

            <div class="colorBox">
                <label for="textColorPrimary">TextColor(1)</label>
                <input type="color" id="textColorPrimary" value="#FFFFFF">
            </div>

            <div class="colorBox">
                <label for="textColorSecondary">TextColor(2)</label>
                <input type="color" id="textColorSecondary" value="#000000">
            </div>
        </div>

        </div>
        <div class=" d-flex align-items-end flex-column">
            
        <div class="saveBtn my-3">
            <button id="orgColor">Get Original <iconify-icon icon="uim:redo"></iconify-icon></button>
        </div>
        <div class="saveBtn mt-3">
            <button id="saveColor">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
        
        </div>

    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_setting.js"></script>
    <script src="./resources/js/dashboard_profile_theme.js"></script>
</body>

</html>