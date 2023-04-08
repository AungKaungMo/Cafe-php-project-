<?php
include "./resources/shared/dashboard.php";
include "../Controller/contactController.php";
$data = $result;
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

            <?php $co = 1;

            foreach ($data as $key) { ?>

                <tr>
                    <td><?= $co++ ?></td>
                    <td><?= $key["name"] ?></td>
                    <td><?= $key["phone"] ?></td>
                    <td><?= $key["email"] ?></td>
                    <td><?= $key["message"] ?></td>
                    <td><?= $key["create_date"] ?></td>
                    <td class="danger"><a href="../Controller/delectCuController.php?id=<?= $key["id"] ?>">Remove</a></td>
                </tr>

            <?php  }  ?>





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