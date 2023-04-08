<?php
ini_set("display_errors", "1");
include "./resources/shared/dashboard.php";
include "../Controller/dashboard_orderController.php";
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
                    <th>Product Name</th>
                    <th>Payment</th>
                    <th>Price</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="8">
                        <hr class="line">
                    </td>
                </tr>
                <?php
                $count = (($page - 1) * $rowLimit) + 1;
                for ($i = 0; $i < count($orderList); $i++) { ?>
                    <tr>
                        <td data-label="No" scope="row"><?= $count++ ?></td>
                        <td data-label="Name"><?= $orderList[$i]["cus_name"]  ?></td>
                        <td data-label="ProductName"><?= $orderList[$i]["bought_product_name"]  ?></td>
                        <td data-label="PaymentId"><?= $orderList[$i]["payment_id"]  ?></td>
                        <td data-label="Price"><?= number_format($orderList[$i]["product_price"])  ?></td>
                        <td data-label="Phone"><?= $orderList[$i]["cus_phone"]  ?></td>
                        <td data-label="Address"><?= $orderList[$i]["cus_address"]  ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!--Pagination-->
        <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-center">
                <li class="page-item
    <?php
    if ($page <= 1) {
        echo "disabled";
    }
    ?>">
                    <a class="page-link text-black" href="?page=<?= $page - 1 ?>">Previous</a>
                </li>
                <?php
                for ($i = 1; $i <= $pageList; $i++) { ?>
                    <li class="page-item part 
                    <?php
                    if ($page == $i) {
                        echo "active";
                    }
                    ?>
                    ">
                        <a class="page-link text-black" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php }
                ?>
                <li class="page-item
    <?php
    if ($page >= $pageList) {
        echo "disabled";
    }
    ?>">
                    <a class="page-link text-black" href="?page=<?= $page + 1 ?>">Next</a>
                </li>
            </ul>
        </nav>

        <!--Pagination-->

        <!-- <div class="d-flex justify-content-center w-100 mt-5 align-items-center user-select-none">
            <a class="mt-1" href="?page=<?= $page - 1 ?>">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-left" class="fs-1 prev">
                </iconify-icon>
            </a>

            <div class="mx-3">
                <?php
                for ($i = 1; $i <= $pageList; $i++) { ?>
                    <a class="  currentPage" href="?page=<?= $i ?>"><?= ++$i ?></a>
                    <span> / </span>
                    <a class="allPage" href="?page=<?= $i ?>"><?= $i++ ?></a>
                <?php }
                ?>
            </div>

            <a class="mt-1" href="?page=<?= $page + 1 ?>">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-right" class="fs-1 next"></iconify-icon>
            </a>
        </div>
    </div> -->

        <!--------------  Ending Tab for dashboard  ----------------->
    </div>


    <!--------------------------   JS   ------------------------------->
    <!-- <script src="./resources/js/dashboard_order.js"></script> -->
</body>

</html>