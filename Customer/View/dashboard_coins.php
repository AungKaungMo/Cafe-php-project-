
<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_coins.css"> 

</head>

<body>

    <div class="m-4">
        <tbody class="tableBody">
            <tr class="lineTable">
                <td colspan="7">
                    <hr class="line">
                </td>
            </tr>

        </tbody>
        </table>

        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Earn</th>
                <th scope="col">Spend</th>
                <th scope="col">Total</th>
                <th scope="col">Cus ID</th>
                <th scope="col">Shop ID</th>
                <th scope="col">Order ID</th>
                <th scope="col">Date</th> 

            </tr>
            <?php foreach ($checkresult as $shop) {   ?>
                <tr>
                    <td><?= $shop["coin_id"]  ?></td>
                    <td><?= $shop["earn_coins"]  ?></td>
                    <td><?= $shop["spend_coins"]  ?></td>
                    <td><?= $shop["total_coins"]  ?></td>
                    <td><?= $shop["cus_id"]  ?></td>
                    <td><?= $shop["shop_id"]  ?></td>
                    <td><?= $shop["order_id"]  ?></td>
                    <td><?= $shop["created_date"]  ?></td>
                </tr>
            <?php } ?>

        </table>


        <!-- Pagination -->

        <div class="d-flex justify-content-center w-100 mt-5 align-items-center user-select-none">
            <div class="mt-1">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-left" class="fs-1 prev"></iconify-icon>
            </div>
            <div class="mx-3">
                <span class="currentPage">1</span><span> / </span><span class="allPage">2</span>
            </div>
            <div class="mt-1">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-right" class="fs-1 next"></iconify-icon>
            </div>
        </div>
    </div>

    <!-- <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_ManageList.js"></script> -->
</body>

</html>