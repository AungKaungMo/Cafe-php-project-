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
        
        <!-- <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ShopName</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Package</th>
                <th>Action</th>
            </tr>         
        </thead>
        
        
        <tbody class="tableBody"> 
            <tr class="lineTable">
                <td colspan="7"><hr class="line"></td>
            </tr> 


        </tbody>
       </table> -->

       <table class="table"> 
            <tr >
                <th scope="col">ID</th>
                <th scope="col">ShopName</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Package</th>
                <th scope="col">Action</th>
                
            </tr> 
            <?php foreach ($docresult as $doc) {   ?>
                <tr>
                    <td><?= $doc["Doctorname"]  ?></td>
                    <td><?= $doc["Doctorroom"]  ?></td>
                    <td><?= $doc["Doctorname"]  ?></td>
                    <td><?= $doc["Doctorroom"]  ?></td>
                    <td><?= $doc["Date"]  ?></td>
                    <td><?= $doc["Time"]  ?></td>
                    <td><?= $doc["Doctorroom"]  ?></td>
                    <td class="danger"><a href="../Controller/deleteDocController.php?id= <?= $doc["id"] ?>">Delete</a></td>
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