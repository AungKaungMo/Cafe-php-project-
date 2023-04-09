<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_promotions.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    include "../Controller/selectContactController.php";
    $key = $result;
    ?>


    <div class="d-flex flex-column justify-content-center align-items-center m-4">
        <h1 class="fs-3">Contact Us</h1>

        <tbody class="tableBody">
            <tr class="lineTable">
                <td colspan="7">
                    <hr class="line">
                </td>
            </tr>

        </tbody>
        </table>

        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">PhoneNumber</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $count = (($page - 1) * $rowLimit) + 1;
            for ($i = 0; $i < count($key); $i++) { ?>
                <tr>
                    <td data-label="No" scope="row"><?= $count++ ?></td>
                    <td data-label="Name"><?= $key[$i]["name"] ?></td>
                    <td data-label="Phone"><?= $key[$i]["phone"] ?></td>
                    <td data-label="Email"><?= $key[$i]["email"] ?></td>
                    <td data-label="Message"><?= $key[$i]["message"] ?></td>
                    <td data-label="Date"><?= $key[$i]["create_date"] ?></td>
                    <td data-label="Action"><a class="text-danger" href="../Controller/deCuController.php?id=<?= $key[$i]["id"] ?>">Remove</a></td>
                </tr>
            <?php  }  ?>
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


    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
</body>

</html>