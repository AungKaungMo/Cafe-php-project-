<?php
include "./resources/shared/dashboard.php";
include "../Controller/dashboard_shop_showController.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_shop.css">

</head>

<body>

    <div class="payment mx-3 my-5">

        <div class="d-flex justify-content-center m-auto paymentCardContainer flex-wrap">
            <div class="paymentCard p-4 ">
                <h6 class="text-center mb-0 mt-3">Basic</h6>
                <div class="text-center fs-5 mb-5 fw-bold">$<?= $optionResults[0]["basic_price"] ?> per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_one"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_two"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_three"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_four"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_five"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["basic_detail_six"] ?></p>
                    </div>
                </div>
            </div>

            <div class="paymentCard p-4 mx-sm-3">
                <h6 class="text-center mb-0 mt-3">Premium</h6>
                <div class="text-center fs-5 mb-5 fw-bold paymentPrice">$<?= $optionResults[0]["standard_price"] ?> per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_one"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_two"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_three"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_four"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_five"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["premium_detail_six"] ?></p>
                    </div>
                </div>

            </div>

            <div class="paymentCard p-4 ">
                <h6 class="text-center mb-0 mt-3">Standard</h6>
                <div class="text-center fs-5 mb-5 fw-bold">$<?= $optionResults[0]["premium_price"] ?> per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_one"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_two"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_three"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_four"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_five"] ?></p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText"><?= $optionResults[0]["standard_detail_six"] ?></p>
                    </div>
                </div>
            </div>


        </div>

        <form method="post" action="../Controller/dashboard_shop_pCheckController.php">
            <div class="mt-3">
                <label for="package">Package Type</label><br><br>
                <select id="package" name="packageType">
                    <option value="basic">Basic</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="payment">Payment Type</label><br><br>
                <select id="payment" name="paymentType">
                    <!-- <option value="Credit Card">Credit Card</option> -->
                    <!-- <option value="1">KBZ</option> -->
                    <option value="2">Wave</option>
                </select>
            </div>

            <div class="text-center submitBtn my-5">
                <button class="fw-bold px-2 py-3" type="submit" name="buySubmit">Submit</button>
            </div>
        </form>
    </div>

    <!--------------  Ending Tab for dashboard  ----------------->
    </div>
    </div>


</body>

</html>