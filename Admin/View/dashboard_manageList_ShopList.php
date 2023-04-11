<?php
ini_set("display_errors", "1");
include "../Controller/manage_shopListController.php";
// session_start();
// if (isset($_SESSION["allshop"])) {
//     $checkresult = $_SESSION["allshop"];
// }
?>

<?php
include "./resources/shared/dashboard.php";

?>

<link rel="stylesheet" href="./resources/css/dashboard_manageList.css">
<link rel="stylesheet" href="./resources/css/dashboard_manageList_ShopList.css">

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
                <th scope="col">ID</th>
                <th scope="col">ShopName</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Package</th>
                <th scope="col">created_date</th>
                <th scope="col">expired_date</th>
                <th scope="col">Action</th>

            </tr>
            <tr class="lineTable">
                <td colspan="9">
                    <hr class="line">
                </td>
            </tr>
            <?php 
            $count = (($page-1) * $rowLimit) +1;
            for ($i = 0; $i < count ($shop); $i++) {   ?>
                <tr>
                    <td scope="row"><?= $count++ ?></td>
                    <td><?= $shop[$i]["shop_id"]  ?></td>
                    <td><?= $shop[$i]["shop_name"]  ?></td>
                    <td><?= $shop[$i]["shop_address"]  ?></td>
                    <td><?= $shop[$i]["shop_email"]  ?></td>
                    <td><?= $shop[$i]["shop_phone"]  ?></td>
                    <td><?= $shop[$i]["package_type"]  ?></td>
                    <td><?= $shop[$i]["package_createdate"]  ?></td>
                    <td><?= $shop[$i]["package_expiredate"]  ?></td>
                    <td class="danger"><a href="../Controller/delete_shopListController.php?id=<?= $shop[$i]["shop_id"] ?>">Remove</a></td>
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
                    if ($page == $i){
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











        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <?php
                for ($i = 1; $i <= $pageList; $i++) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> -->
    
    </div>

    <!-- <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_ManageList.js"></script> -->
</body>

</html>