<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_shop.css">

</head>

<body>

    <div class="payment mx-3 my-5">

        <div class="d-flex justify-content-between w-75 m-auto paymentCardContainer flex-wrap">
            <div class="paymentCard p-4 ">
                <h6 class="text-center mb-0 mt-3">Basic</h6>
                <div class="text-center fs-5 mb-5 fw-bold">$150 per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">have only booking and reserve system.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can booking 100 times each day.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update menu 4 times each day.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update 2 blogs.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">online cash payment system.</p>
                    </div>
                </div>
            </div>

            <div class="paymentCard p-4 ">
                <h6 class="text-center mb-0 mt-3">Premium</h6>
                <div class="text-center fs-5 mb-5 fw-bold paymentPrice">$400 per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">have delivery system and booking system</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">unlimited delivery and booking.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update unlimited menu everyday.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update 6 blog..</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">coin payment.</p>
                    </div>
                </div>

            </div>

            <div class="paymentCard p-4 ">
                <h6 class="text-center mb-0 mt-3">Standard</h6>
                <div class="text-center fs-5 mb-5 fw-bold">$250 per month</div>

                <div class="rule">
                    <div class="d-flex ">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">have delivery system and booking system.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can booking and deliver 100 time each day.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update 20times menu each day.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">can update 3 blogs.</p>
                    </div>
                    <div class="d-flex">
                        <iconify-icon icon="material-symbols:check-circle-rounded" class=" fs-3 ruleIcon"></iconify-icon>
                        <p class=" ruleText">coin payment.</p>
                    </div>
                </div>
            </div>


        </div>

        <form>
            <div class="mt-3">

                <label for="package">Package Type</label><br><br>
                <select id="package">
                    <option value="basic">Basic</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="payment">Payment Type</label><br><br>
                <select id="payment">
                    <option value="Credit Card">Credit Card</option>
                    <option value="KBZ">KBZ</option>
                    <option value="Wave">Wave</option>
                </select>
            </div>

            <div class="text-center submitBtn my-5">
                <button class="fw-bold px-2 py-3">Submit</button>
            </div>
        </form>
    </div>

    <!--------------  Ending Tab for dashboard  ----------------->
    </div>
    </div>

    <!--------------------------   JS   ------------------------------->
    <script src="./resources/js/dashboard.js"></script>
</body>

</html>