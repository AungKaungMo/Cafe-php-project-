<?php
include "./resources/shared/dashboard.php";
include "../Controller/dashboard_saleChartController.php";

?>
<link rel="stylesheet" href="./resources/css/dashboard_salechart.css">

</head>

<body>
    <!---------------  Chart  ------------------->

    <div class="m-5 d-flex justify-content-between chartGp">
        <div class="barChart">
            <div class=" text-center fs-4 my-2">Weekly Selling Amount</div>
            <canvas id="myChart"></canvas>
        </div>

        <div class="pieChart">
            <div class=" text-center fs-4 my-2">Weekly Selling Products</div>
            <canvas id="myChart2"></canvas>
        </div>

    </div>

    <!-----------  top selling  -------------->
    <div>
        <div class="fs-4 ms-4 mb-4">Top Selling Products</div>
        <div class="mx-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ProductName</th>
                        <th>Sold</th>
                        <th>Instock</th>
                        <th>Price</th>
                    </tr>

                </thead>

                <tbody class="tableBody">
                    <tr class="lineTable">
                        <td colspan="7">
                            <hr class="line">
                        </td>
                    </tr>
    <?php $count = 1; for($i =0; $i < count($top_selling); $i++) { ?>
                    <tr>
                        <td data-label="No."><?= $count++; ?></td>
                        <td data-label="ProductName"><?= $top_selling[$i]["product_name"]; ?></td>
                        <td data-label="Sold"><?= $top_selling[$i]["sold_quantity"]; ?></td>
                        <td data-label="Instock"><?= $top_selling[$i]["product_instock"]; ?></td>
                        <td data-label="Price"><?= $top_selling[$i]["sold_quantity"] * $top_selling[$i]["product_price"]; ?> MMK</td>
                    </tr>
<?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <!--------------  Ending Tab for dashboard  ----------------->
    </div>
    </div>

    <!--------------------------   JS   ------------------------------->

    <script src="./resources/js/dashboard.js"></script>
    <script src="./lib/ChartJs/chart.js"></script>
    <script src="./resources/js/dashboard_salechart.js"></script>


    <script>
        let sever_data = <?= json_encode($monthly); ?>;
        let product_type_data = <?= json_encode($productsType); ?>;
    </script>
</body>

</html>