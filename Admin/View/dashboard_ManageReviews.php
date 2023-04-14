<?php
include "../Controller/selectreviewController.php";
$value = $resultreview;
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_manageReviews.css">

</head>

<body>

    <div class="m-4">
        <div class="fw-bold fs-3 mb-4">Manage Reviews</div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Address</th>
                    <th>Comment</th>
                    <th>Rating</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="7">
                        <hr class="line">
                    </td>
                </tr>
                <?php
                $count = (($page - 1) * $rowLimit) + 1;
                for ($i = 0; $i < count($value); $i++) { ?>
                    <tr>
                        <td scope="row"><?= $count++ ?></td>
                        <td><?= $value[$i]["id"] ?></td>
                        <td><?= $value[$i]["user_name"] ?></td>
                        <td><?= $value[$i]["address"] ?></td>
                        <td><?= $value[$i]["comment"] ?></td>
                        <td><?= $value[$i]["rating"] ?></td>
                        <td><?= $value[$i]["create_date"] ?></td>
                        <td><a href="../Controller/delectreviewController.php?id=<?= $value[$i]["id"] ?>" class="text-danger">Remove</a></td>
                    </tr>

                <?php  }  ?>


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

    <script src="./resources/js/dashboard.js"></script>
    <!-- <script src="./resources/js/dashboard_manageReviews.js"></script> -->
</body>

</html>