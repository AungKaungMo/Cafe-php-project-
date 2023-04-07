<?php
include "../Controller/dashboard_order_historyController.php";
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_history.css">
<link rel="stylesheet" href="./resources/css/dashboard_history_order.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_history.php";
    ?>

    <div class="historyBoxContainer mx-sm-5 mx-3 my-5">

        <?php $eachPprice = 0;
        $totalpprice = 0;
        for ($i = 0; $i < count($orderLists); $i++) {
            $totalpprice = 0; ?>
            <div class="historyBox p-4 mt-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="fs-4 fw-bold">Pay With <?php if ($orderLists[$i]["payment_id"] == 1) {
                                                                echo "KBZ Pay.";
                                                            } else if ($orderLists[$i]["payment_id"] == 2) {
                                                                echo "Wave Pay.";
                                                            } else if ($orderLists[$i]["payment_id"] == 3) {
                                                                echo "COD.";
                                                            }  ?><span class="fs-6 opacity-75"> (<?= substr($orderLists[$i]["created_date"], 0, 10) ?>)</span></h1>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                        <a href="../Controller/delete_dashboard_historyController.php?token=<?= $orderLists[$i]["order_token"] ?>">
                            <iconify-icon icon="fa6-solid:xmark" class="fs-3 d-flex align-items-center"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center">

                    <?php for ($j = 0; $j < count($orderHistory); $j++) {
                        $eachPprice = 0;
                        if ($orderLists[$i]["order_token"] == $orderHistory[$j]["order_token"]) { ?>

                            <div class="mt-3 historyText d-flex">
                                <div><?= $orderHistory[$j]["bought_product_name"] . "(" . $orderHistory[$j]['total_quantity'] . ")" ?></div>
                                <div class="ms-4"><?php $eachPprice = $orderHistory[$j]["product_price"] * $orderHistory[$j]['total_quantity'];
                                                    echo $eachPprice . " MMK";
                                                    $totalpprice += $eachPprice; ?></div>
                            </div>

                    <?php }
                    } ?>
                    <div class="closeLine my-3"></div>
                    <div class="d-flex">
                        <div>Total</div>
                        <div class="ms-4"><?= $totalpprice  . " MMK" ?></div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <!-- <div class="historyBox p-4 mt-3 mb-3">
             <div class="d-flex justify-content-between">
                 <div>
                     <h1 class="fs-4 fw-bold">Booking at CJ Cafe<span class="fs-6 opacity-75"> (17:30)(2023/03/14)</span></h1>
                 </div>
                 <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                     <iconify-icon icon="fa6-solid:xmark" class="fs-3 "></iconify-icon>
                 </div>
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
         </div>

         <div class="historyBox p-4 mt-3 mb-3">
             <div class="d-flex justify-content-between">
                 <div>
                     <h1 class="fs-4 fw-bold">Booking at CJ Cafe<span class="fs-6 opacity-75"> (17:30)(2023/03/14)</span></h1>
                 </div>
                 <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                     <iconify-icon icon="fa6-solid:xmark" class="fs-3 "></iconify-icon>
                 </div>
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
         </div>

         <div class="historyBox p-4 mt-3 mb-3">
             <div class="d-flex justify-content-between">
                 <div>
                     <h1 class="fs-4 fw-bold">Booking at CJ Cafe<span class="fs-6 opacity-75"> (17:30)(2023/03/14)</span></h1>
                 </div>
                 <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                     <iconify-icon icon="fa6-solid:xmark" class="fs-3 "></iconify-icon>
                 </div>
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
             <div class="mt-4 historyText">
                  VIP Seat  (7 person)
             </div>
         </div> -->




    </div>


    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_profile.js"></script>
</body>

</html>