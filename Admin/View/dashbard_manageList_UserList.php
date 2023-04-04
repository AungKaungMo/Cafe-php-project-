<?php
ini_set("display_errors", "1");

// session_start();
// if (isset($_SESSION["allshop"])) {
//     $checkresult = $_SESSION["allshop"];
// }

include "../Controller/manage_userListController.php";
$checkresult = $result;
?>

<?php
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
    <tbody class="tableBody">
            

        </tbody>
        </table>

        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">UserName</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>  
                <th scope="col">Coins</th>  
                <th scope="col">Action</th>

            </tr>
            <tr class="lineTable">
                <td colspan="8">
                    <hr class="line">
                </td>
            </tr>
            <?php foreach ($checkresult as $user) {   ?>
                <tr>
                    <td><?= $user["cus_id"]  ?></td>
                    <td><?= $user["cus_name"]  ?></td>
                    <td><?= $user["cus_address"]  ?></td>
                    <td><?= $user["cus_email"]  ?></td>
                    <td><?= $user["cus_phone"]  ?></td>
                    <td><?= $user["created_date"]  ?></td>
                    <td class="primary"><a href="">Coins</a></td>
                    <td class="danger"><a href="../Controller/delete_userListController.php?id= <?= $user["cus_id"] ?>">Remove</a></td>
                </tr>
            <?php } ?>

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