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

    <form>
        <div>
            <div>
                <label for="bgcolor">Background</label>
                <input type="color" id="bgcolor">
            </div>

            <div>
                <label for="sideBar">sideBar</label>
                <input type="color" id="sideBar">
            </div>

            <div>
                <label for="subcolor">subColor</label>
                <input type="color" id="subcolor">
            </div>

            <div>
                <label for="saleChartOrder">SaleChart(O)</label>
                <input type="color" id="saleChartOrder" value="">
            </div>

            <div>
                <label for="saleChartBooking">SaleChart(B)</label>
                <input type="color" id="saleChartBooking">
            </div>

            <div>
                <label for="textColorOne">TextColor(1)</label>
                <input type="color" id="textColorOne">
            </div>

            <div>
                <label for="textColorTwo">TextColor(2)</label>
                <input type="color" id="textColorTwo">
            </div>

        </div>
    </form>

    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_setting.js"></script>
</body>

</html>