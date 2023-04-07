<?php
session_start();
include "../Controller/cartController.php";
// echo "<pre>";
// print_r($cartItemsLists);
$_SESSION["cartItemsLists"] = $cartItemsLists;
// $cartItemsLists = $_SESSION["cartItemsLists"] 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!-----------------------    Jquery   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!-------------------------   CSS   ---------------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/cart.css">

    <!----------------------   JS   ------------------------------>
    <script src="./resources/js/cartCheck.js"></script>

</head>

<body>
    <!-- <div class="mt-4 mx-sm-5 mx-2 fs-1 backIcon">
        <a href=""><iconify-icon icon="material-symbols:arrow-back-rounded" class="backIcon"></iconify-icon></a>
    </div>
    <div class="navLine"></div> -->

    <?php if (count($_SESSION["cartItemsLists"]) != 0) { ?>

        <div class="mx-4 mt-5">
            <table class="table">

                <tbody class="tableBody">


                    <?php $itemsPrice = [];
                    for ($i = 0; $i < count($cartLists); $i++) {

                    ?>
                        <?php for ($j = 0; $j < count($_SESSION["cartItemsLists"]); $j++) {
                            if ($cartLists[$i]["id"] == $_SESSION["cartItemsLists"][$j]["product_id"]) {
                                $total +=  ($_SESSION["cartItemsLists"][$j]["product_price"] - ($_SESSION["cartItemsLists"][$j]["product_price"] * ($_SESSION["cartItemsLists"][$j]["product_discount"] / 100))) * $cartLists[$j]["quantity"]; ?>


                                <tr class="table_row">
                                    <td data-label="productImg">
                                        <div class="productImg">
                                            <img src="../../Storages/<?= $_SESSION["cartItemsLists"][$j]["product_photo"] ?>">
                                        </div>
                                    </td>
                                    <td data-label="ProductName">
                                        <?= $_SESSION["cartItemsLists"][$j]["product_name"] ?>
                                    </td>
                                    <td data-label="Shop Name">
                                        <a href="#"><?= $_SESSION["cartItemsLists"][$j]["shop_name"] ?></a>
                                    </td>
                                    <td data-label="Quantity" class="d-flex align-items-center justify-content-end user-select-none quantityControl">
                                        <iconify-icon icon="bi:dash-circle-fill" class="me-2 minus" width="23" height="23"></iconify-icon>
                                        <span class="countItem"><?= $cartLists[$i]["quantity"]; ?>
                                        </span>
                                        <iconify-icon icon="mdi:plus-circle" class="ms-2 plus" width="25" height="25"></iconify-icon>
                                    </td>
                                    <td data-label="Notes order"><?= $cartLists[$i]["orderNote"]; ?>

                                    </td>
                                    <td data-label="Discount">
                                        <?= $_SESSION["cartItemsLists"][$j]["product_discount"] ?> %
                                    </td>
                                    <td data-label="Price" class="price priceChange">
                                        <?= $_SESSION["cartItemsLists"][$j]["product_price"] ?> MMK
                                    </td>
                                    <!-- <td data-label="Coin Price">
                                        
                                        // $_SESSION["cartItemsLists"][$j]["product_price"]
                                        //  ?> Coins
                                    </td> -->
                                    <td data-label="Total Price" class="totalPrice">
                                        <?=
                                        ($_SESSION["cartItemsLists"][$j]["product_price"] - ($_SESSION["cartItemsLists"][$j]["product_price"] * ($_SESSION["cartItemsLists"][$j]["product_discount"] / 100))) * $cartLists[$j]["quantity"] . " MMK";
                                        ?>
                                    </td>
                                    <!-- <td data-label="Total Coin Price" class="totalCoinPrice">
                                       
                                        // ($_SESSION["cartItemsLists"][$j]["product_price"] - ($_SESSION["cartItemsLists"][$j]["product_price"] * ($_SESSION["cartItemsLists"][$j]["product_discount"] / 100))) * $cartLists[$j]["quantity"] . " Coins";
                                        // ?>
                                    </td> -->
                                </tr>

                    <?php
                                array_push($itemsPrice, $_SESSION["cartItemsLists"][$j]["product_price"]);
                            }
                        }
                    } ?>

                </tbody>
            </table>


            <div class="d-flex flex-column align-items-end mb-5 mt-4">

                <div class="d-flex">
                    <div>Sub Total</div>
                    <div class="fw-bold ms-3 subTotal"> <?= $total ?> MMK</div>
                </div>
                <div class="btline my-3"></div>
                <div class="d-flex">
                    <div>Tax 5%</div>
                    <div class="fw-bold ms-5 taxFee"><?php $tax = $total * 5 / 100;
                                                        echo $tax; ?> MMK</div>
                </div>
                <div class="btline my-3"></div>
                <div class="d-flex">
                    <div>Grand Total</div>
                    <div class="fw-bold ms-5 grandTotal"><?= $tax + $total ?> MMK</div>

                </div>
                <form method="post" action="./orderconfirm.php">
                    <div class="mt-4 d-flex justify-content-center">
                        <input type="hidden" name="totalPrice" id="totalPriceCheck">
                        <input type="hidden" name="cartLists" class="cartList">
                        <input type="hidden" name="itemsPrice" value="<?= json_encode($itemsPrice) ?>">
                        <button class="p-2 rounded-1 checkOutBtn" type="submit" name="checkout">
                            Check Out
                        </button>
                    </div>
                </form>
            </div>

        </div>
    <?php } ?>


</body>

</html>