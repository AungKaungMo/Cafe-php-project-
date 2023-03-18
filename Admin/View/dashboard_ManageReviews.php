<?php
            include "./resources/shared/dashboard.php";
        ?>
           <link rel="stylesheet" href="./resources/css/dashboard_ManageReviews.css">

</head>
<body>

    <div class="m-4">
        <div class="fw-bold fs-3 mb-4">Manage Reviews</div>
        
        <table class="table">
        <thead>
            <tr>
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
                <td colspan="7"><hr class="line"></td>
            </tr>


        </tbody>
       </table>
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

    <script src="./resources/js/dashboard_ManageReviews.js"></script>
</body>
</html>