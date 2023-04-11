<?php
ini_set("display_errors", "1");
include "../Controller/manage_userListController.php";
include "./resources/shared/dashboard.php";
?>

<link rel="stylesheet" href="./resources/css/dashboard_manageList.css">
<link rel="stylesheet" href="./resources/css/dashboard_manageList_UserList.css">

</head>

<body>
    <?php
    include "./resources/shared/dashboard_manageList.php";
    ?>

    <div class="m-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <!-- <th scope="col">Coins</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="9">
                        <hr class="line">
                    </td>
                </tr>
                <?php
                $count = (($page - 1) * $rowLimit) + 1;
                for ($i = 0; $i < count($resultU); $i++) { ?>
                    <tr>
                        <td scope="row"><?= $count++ ?></td>
                        <td><?= $resultU[$i]["cus_id"]  ?></td>
                        <td><?= $resultU[$i]["cus_name"]  ?></td>
                        <td><?= $resultU[$i]["cus_address"]  ?></td>
                        <td><?= $resultU[$i]["cus_email"]  ?></td>
                        <td><?= $resultU[$i]["cus_phone"]  ?></td>
                        <td><?= $resultU[$i]["created_date"]  ?></td>
                        <!-- <td class="primary"><a href="">Coins</a></td> -->
                        <td><a class="text-danger" href="../Controller/delete_userListController.php?id=<?= $resultU[$i]["cus_id"] ?>">Remove</a></td>
                    </tr>
                <?php } ?>
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
    </div>
</body>

</html>