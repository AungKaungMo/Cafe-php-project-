<?php
include "../Controller/checkoutController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirm</title>

    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-----------------------    Jquery   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/confirmpopup.css">
    <link rel="stylesheet" href="./resources/css/orderconfirm.css">

    <!------------------------  JS  ---------------------------->
    <script src="./resources/js/orderconfirm.js"></script>

</head>

<body>
    <!-- <div class="mt-4 mx-sm-5 mx-2 fs-1 backIcon">
        <a href="./cart.php"><iconify-icon icon="material-symbols:arrow-back-rounded" class="backIcon"></iconify-icon></a>
    </div>
    <div class="navLine"></div> -->
    <!-- </div> -->
    <!-- action="../Controller/buyShopFillInformationController.php"  -->
    <form method="post" action="../Controller/paymentCheckoutController.php">

        <div class="mx-sm-5 mx-2">
            <div class="mt-5 fw-bold fs-4">Please fill the following informations.</div>
            <div class="mt-5 row informations">
                <div class="col-md-6 col-12">

                    <div>
                        <input type="text" placeholder="Name" class="inputFill" name="name" required>
                    </div>

                    <div>
                        <input type="phone" placeholder="Phone Number" class="inputFill" name="phone" required>
                    </div>

                    <div>
                        <textarea class="inputFill" placeholder="Address" name="address"></textarea>
                    </div>
                    <div>
                        <textarea class="inputFill" placeholder="note" name="note"></textarea>
                    </div>
                    <div>
                        <label for="payment" class="payment">
                            Payment Type
                        </label><br><br>
                        <select id="payment" name="payment">
                            <!-- <option value="1">KBZ</option> -->
                            <option value="2">Wave</option>
                            <option value="3">COD</option>
                            <!-- <option value="4">Coin</option> -->
                        </select>
                    </div>

                </div>

                <div class="col-md-6 col-12">


                    <div>
                        <label for="township" class="township">
                            Township
                        </label><br><br>
                        <select aria-label="Default select example" id="township" name="township">
                            <option selected value="1">Ahlon</option>
                            <option value="2">Bahan</option>
                            <option value="3">Dagon</option>
                            <option value="4">Hlaing</option>
                            <option value="5">Kamayut</option>
                            <option value="6">Kyauktada</option>
                            <option value="7">Kyimyindaing</option>
                            <option value="8">Lanmadaw</option>
                            <option value="9">Latha</option>
                            <option value="10">Mayangon</option>
                            <option value="11">Pabedan</option>
                            <option value="12">Sanchaung</option>
                            <option value="13">Botataung</option>
                            <option value="14">Dagon Seikkan</option>
                            <option value="15">Dawbon</option>
                            <option value="16">Mingala Taungnyunt</option>
                            <option value="17">East(New Dagon)</option>
                            <option value="18">West(New Dagon)</option>
                            <option value="19">North(New Dagon)</option>
                            <option value="20">South(New Dagon)</option>
                            <option value="21">North Okkalapa</option>
                            <option value="22">South Okkalapa</option>
                            <option value="23">Pazundaung</option>
                            <option value="24">Tamwe</option>
                            <option value="25">Thaketa</option>
                            <option value="26">Thingangyun</option>
                            <option value="27">Yankin</option>
                            <option value="28">Insein</option>
                            <option value="29">Hlaingthaya</option>
                            <option value="30">Mingaladon</option>
                            <option value="31">Yankin</option>
                            <option value="32">Insein</option>
                        </select>
                    </div>

                    <div class="d-flex flex-column mt-5 align-items-center">
                        <div class="d-flex">
                            <div>Grand Total</div>
                            <div class="fw-bold ms-5 "><?= $totalPrice ?>
                            </div>
                        </div>

                        <?php $shopTwonshipArray = array();
                        $deliveryFee = 0;
                        for ($i = 0; $i < count($cartItems); $i++) {
                            if (!in_array($cartItems[$i]["township"], $shopTwonshipArray)) {
                        ?>
                                <div class="btline my-3"></div>
                                <div class="d-flex">
                                    <div>Delivery For(<?= $cartItems[$i]["shop_name"] ?>)</div>
                                    <div class="fw-bold ms-5  townshipVal" data-township="<?= $cartItems[$i]["township"] ?>">
                                        <?php

                                        $deliveryFee = abs($cartItems[$i]["township"] - 1) * 500;
                                        echo $deliveryFee . " MMK";

                                        ?>
                                    </div>
                                </div>
                                <?php array_push($shopTwonshipArray, $cartItems[$i]["township"]) ?>
                        <?php }
                        } ?>

                        <div class="btline my-3"></div>
                        <div class="d-flex">
                            <div>Total</div>
                            <div class="fw-bold ms-5 grandTotal"><?php echo (int)substr($totalPrice, 0, -4) + $deliveryFee . " MMK";  ?> </div>
                            <input type="hidden" value="<?= $deliveryFee ?>" name="deliveryFee" id="deli">
                            <input type="hidden" value="<?= (int)substr($totalPrice, 0, -4) + $deliveryFee ?>" name="totalPrice" id="inputTotal">

                        </div>

                    </div>
                </div>
                <div class="text-center submitBtn my-5">
                    <!-- <a href="./wavepay1.php" target="_blank"> -->
                    <button class="fw-bold px-2 py-3" name="order" id="">Order</button>
                    <!-- </a> -->
                </div>

            </div>
        </div>
    </form>



    <!-- Payment Successful Modal -->
    <!-- <div class="modal fade " id="staticBackdropPaymentSuccessful" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  ">
            <div>
                <div class="modal-content text-center subPop">
                    <div class=" text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <div><iconify-icon class="circleClick" icon="material-symbols:check-circle"></iconify-icon></div>
                    </div>
                    <div class="modal-body text-center">
                        <div class="mainPop">
                            <div class="h2 mb-3 fw-bold">Payment Successful</div>
                            <div class="mb-4 thankPurchase">Thank you for purchasing.
                                Your payment was successful.</div>
                            <button type="button" class="btn text-white Back2Home"><a href="./h.php">Back to Home Page</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <script>
        let tv = document.getElementsByClassName("townshipVal");

        const grandTotalPrice = "<?= substr($totalPrice, 0, -4) ?>";
        let tvalue;
        let deliTotal = 0;


        $('#township').on("change", function() {
            deliTotal = 0;
            var chooseTownship = $("option:selected", this).val();
            for (let i = 0; i < tv.length; i++) {
                tvalue = Number(tv[i].getAttribute("data-township"));
                if (chooseTownship == tvalue) {
                    tv[i].innerText = "0 MMK";
                } else {
                    tv[i].innerText = Math.abs(Number(chooseTownship) - tvalue) * 300 + " MMK";
                    deliTotal += Math.abs(Number(chooseTownship) - tvalue) * 300;

                }
            }

            $(".grandTotal").text((deliTotal + Number(grandTotalPrice)) + " MMK");
            $("#deli").val(deliTotal);
            $("#inputTotal").val(deliTotal + Number(grandTotalPrice));
        });
    </script>
</body>

</html>