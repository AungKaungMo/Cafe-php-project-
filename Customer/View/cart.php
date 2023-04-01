<?php
    include "../Controller/cartController.php";
    // echo "<pre>";
    // print_r($cartItemsLists);
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
    <div class="mt-4 mx-sm-5 mx-2 fs-1 backIcon">
        <a href=""><iconify-icon icon="material-symbols:arrow-back-rounded" class="backIcon"></iconify-icon></a>
    </div>
    <div class="navLine"></div>

    <div class="mx-4 mt-5">
        <table class="table">

            <tbody class="tableBody">


            <?php for($i=0; $i < count($cartItemsLists); $i++ ) { $total +=  ($cartItemsLists[$i]["product_price"] - ($cartItemsLists[$i]["product_price"] * ($cartItemsLists[$i]["product_discount"]/100))) * $cartLists[$i]["quantity"];
                ?>
                <tr>
                    <td data-label="productImg">
                        <div class="productImg">
                            <img src="../../Storages/<?= $cartItemsLists[$i]["product_photo"] ?>">
                        </div>
                    </td>
                    <td data-label="ProductName">
                        <?= $cartItemsLists[$i]["product_name"] ?>
                    </td>
                    <td data-label="Shop Name">
                        <a href="#"><?= $cartItemsLists[$i]["shop_name"] ?></a>
                    </td>
                    <td data-label="Quantity" class="d-flex align-items-center justify-content-end user-select-none quantityControl">
                    <iconify-icon icon="bi:dash-circle-fill" class="me-2 minus" width="23" height="23"></iconify-icon>
                    <span class="countItem"><?= $cartLists[$i]["quantity"] ?></span>
                    <iconify-icon icon="mdi:plus-circle" class="ms-2 plus" width="25" height="25"></iconify-icon>
                    </td>
                    <td data-label="Notes order">
                        Please add a little sugar.
                    </td>
                    <td data-label="Discount">
                    <?= $cartItemsLists[$i]["product_discount"] ?> %
                    </td>
                    <td data-label="Price" class="price">
                    <?= $cartItemsLists[$i]["product_price"] ?> MMK
                    </td>
                    <td data-label="Coin Price">
                    <?= $cartItemsLists[$i]["product_price"] ?> Coins
                    </td>
                    <td data-label="Total Price" class="totalPrice">
                        <?=
                           ($cartItemsLists[$i]["product_price"] - ($cartItemsLists[$i]["product_price"] * ($cartItemsLists[$i]["product_discount"]/100))) * $cartLists[$i]["quantity"] . " MMK";
                        ?>
                    </td>
                    <td data-label="Total Coin Price" class="totalCoinPrice">
                        <?=
                           ($cartItemsLists[$i]["product_price"] - ($cartItemsLists[$i]["product_price"] * ($cartItemsLists[$i]["product_discount"]/100))) * $cartLists[$i]["quantity"] . " Coins";
                        ?>
                    </td>
                </tr>

<?php } ?>

            </tbody>
        </table>


                <div class="d-flex flex-column align-items-end mb-5 mt-4">
                    <form>
                        
                    <div class="d-flex">
                    <div>Sub Total</div>
                    <div class="fw-bold ms-3 subTotal"> <?= $total ?> MMK(Coins)</div>
                    </div>
                    <div class="btline my-3"></div>
                    <div class="d-flex">
                    <div>Tax 5%</div>
                    <div class="fw-bold ms-5 taxFee"><?php $tax = $total * 5/100; echo $tax; ?> MMK(Coins)</div>
                    </div>
                    <div class="btline my-3"></div>
                    <div class="d-flex">
                    <div>Grand Total</div>
                    <div class="fw-bold ms-5 grandTotal"><?= $tax + $total ?> MMK(Coins)</div>
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        
                    <button class="p-2 rounded-1 checkOutBtn">
                        Check Out
                    </button>
                    </div>
                    </form>
                </div>

    </div>


</body>

</html>