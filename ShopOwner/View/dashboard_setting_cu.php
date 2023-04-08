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
    $data = $result;
    ?>


    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-3">Contact Us</h1>

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
                    <td><?= $co++; ?></td>
                    <td><?= $key["name"] ?></td>
                    <td><?= $key["phone"] ?></td>
                    <td><?= $key["email"] ?></td>
                    <td><?= $key["message"] ?></td>
                    <td><?= $key["create_date"] ?></td>
                    <td class="danger"><a href="../Controller/deCuController.php?id=<?= $key["id"] ?>">Remove</a></td>
                </tr>
            <?php  }  ?>
        </table>
    </div>

    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
</body>

</html>