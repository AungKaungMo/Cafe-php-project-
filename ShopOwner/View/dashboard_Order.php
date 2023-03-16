<?php
            include "./resources/shared/dashboard.php";
        ?>
           <link rel="stylesheet" href="./resources/css/dashboard_Order.css">

</head>

<body>



    <div class="bookingContainer m-4">

    
       <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Product</th>
                <th>Payment</th>
                <th>Price</th>
                <th>Phone</th>
                <th>Address</th>
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

<!--------------  Ending Tab for dashboard  ----------------->
</div>
    </div>

<!--------------------------   JS   ------------------------------->
<script src="./resources/js/dashboard.js"></script>
<script src="./resources/js/dashboard_Order.js"></script>
</body>
</html> 