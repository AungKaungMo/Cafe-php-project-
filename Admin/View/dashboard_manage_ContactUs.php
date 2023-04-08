<?php
include "./resources/shared/dashboard.php";
include "../Controller/contactController.php";
$key = $result;
?>
<link rel="stylesheet" href="./resources/css/dashboard_manage.css">
<link rel="stylesheet" href="./resources/css/dashboard_manage_ContactUs.css">

</head>

<body>
    <div class="m-4">
        <div class="fw-bold fs-3 mb-4">Contact Us</div>
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
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">PhoneNumber</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>

            <?php  
            $count = (($page - 1) * $rowLimit) + 1;
            for ($i = 0; $i < count($key); $i++) { ?>
                <tr>
                <td scope="row"><?= $count++ ?></td>
                    <td><?= $key[$i]["name"] ?></td>
                    <td><?= $key[$i]["phone"] ?></td>
                    <td><?= $key[$i]["email"] ?></td>
                    <td><?= $key[$i]["message"] ?></td>
                    <td><?= $key[$i]["create_date"] ?></td>
                    <td class="danger"><a href="../Controller/delectCuController.php?id=<?= $key[$i]["id"] ?>">Remove</a></td>
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
         
    </div>

    <!-- <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_ManageList.js"></script> -->
</body>

</html>