<?php
ini_set("display_errors", "1");
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_order.css">

</head>

<body>



    <div class="bookingContainer m-4">


        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Product</th>
                    <th>Payment</th>
                    <th>Price</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>

            </thead>

            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="7">
                        <hr class="line">
                    </td>
                </tr>
                <?php foreach ($checkresult as $shop) {   ?>
                <tr>
                    <td><?= $shop["shop_id"]  ?></td>
                    <td><?= $shop["shop_name"]  ?></td>
                    <td><?= $shop["shop_address"]  ?></td>
                    <td><?= $shop["shop_email"]  ?></td>
                    <td><?= $shop["shop_phone"]  ?></td>
                    <td><?= $shop["package_type"]  ?></td>
                    <td><?= $shop["package_createdate"]  ?></td>
                    <td><?= $shop["package_expiredate"]  ?></td>
                    <td class="danger"><a href="../Controller/delete_shopListController.php?id= <?= $shop["shop_id"] ?>">Remove</a></td>
                </tr>
            <?php } ?>


            </tbody>
        </table>


        <!--Pagination-->

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

    <!--------------  Ending Tab for dashboard  ----------------->
    </div>
    </div>

    <!--------------------------   JS   ------------------------------->
    <script src="./resources/js/dashboard_order.js"></script>
</body>

</html>