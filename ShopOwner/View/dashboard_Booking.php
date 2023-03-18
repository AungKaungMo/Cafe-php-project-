<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_booking.css">

</head>

<body>

    <div class="m-4">
        <div class="fw-bold fs-3 mb-4">Pending</div>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Person</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody class="tableBody">
                <tr class="lineTable">
                    <td colspan="7">
                        <hr class="line">
                    </td>
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


        <div class="fw-bold fs-3 mb-4">Confirm</div>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Person</th>
                </tr>

            </thead>

            <tbody class="confirmBody">
                <tr class="lineTable">
                    <td colspan="7">
                        <hr class="line">
                    </td>
                </tr>


            </tbody>
        </table>
        <div class="d-flex justify-content-center w-100 mt-5 align-items-center user-select-none">
            <div class="mt-1">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-left" class="fs-1 prev1"></iconify-icon>
            </div>
            <div class="mx-3">
                <span class="currentPage1">1</span><span> / </span><span class="allPage1">2</span>
            </div>
            <div class="mt-1">
                <iconify-icon icon="material-symbols:keyboard-double-arrow-right" class="fs-1 next1"></iconify-icon>
            </div>
        </div>

    </div>


    </div>
    </div>
    <script src="./resources/js/dashboard_booking.js"></script>
</body>

</html>