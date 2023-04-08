<?php
ini_set("display_errors", "1");
include "../Controller/manage_orderlistController.php";
// session_start();
// if (isset($_SESSION["allshop"])) {
//     $checkresult = $_SESSION["allshop"];
// }
?>

<?php
include "./resources/shared/dashboard.php";

?>

<link rel="stylesheet" href="./resources/css/dashboard_manageList.css">
<link rel="stylesheet" href="./resources/css/dashboard_manageList_OrderList.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_manageList.php";
    ?>

    <div class="m-4">
        <tbody class="tableBody">
            </table>

            <table class="table">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ShopID</th>
                    <th scope="col">OrderID</th>
                    <th scope="col">Totalquantity</th>
                    <th scope="col">Totalprice</th>
                    <th scope="col">PaymentID</th>
                    <th scope="col">created_date</th>
                </tr>
                <tr class="lineTable">
                    <td colspan="8">
                        <hr class="line">
                    </td>
                </tr>
                <?php
                $count = 1;
                for ($i = 0; $i < count($order); $i++) {   ?>
                    <tr>
                        <td scope="row"><?= $count++ ?></td>
                        <td><?= $order[$i]["shop_id"]  ?></td>
                        <td><?= $order[$i]["order_id"]  ?></td>
                        <td><?= $order[$i]["total_quantity"]  ?></td>
                        <td><?= number_format($order[$i]["total_price"])  ?></td>
                        <td><?= $order[$i]["payment_id"]  ?></td>
                        <td><?= $order[$i]["created_date"]  ?></td>
                    </tr>
                <?php }
                ?>
        </tbody>
        </table>
        <!-- Pagination -->
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

</body>

</html>