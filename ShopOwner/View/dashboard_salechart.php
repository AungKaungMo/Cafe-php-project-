<?php

    include "./resources/shared/dashboard.php";

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
                    <th>Remain</th>
                </tr>

            </thead>

            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="7">
                        <hr class="line">
                    </td>
                </tr>


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
</body>

</html>