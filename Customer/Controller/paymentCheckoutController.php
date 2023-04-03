<?php
session_start();
if (isset($_POST["order"])) {
    $_SESSION["cusTownship"] = $_POST["township"];
    $_SESSION["cusAddress"] = $_POST["address"];
    $_SESSION["cusNote"] = $_POST["note"];
    $_SESSION["cusPhone"] = $_POST["phone"];
    $_SESSION["cusName"] = $_POST["name"];
    $_SESSION["cusPayment"] = number_format($_POST["payment"]);
    $_SESSION["cusDeliFee"] = number_format($_POST["deliveryFee"]);
    $_SESSION["cusTotalPrice"] = number_format($_POST["totalPrice"]);
    $_SESSION["order"] = 1;

    if ($_SESSION["cusPayment"] == 1) {
        header("Location: ../View/kbzQR.php");
    } else if ($_SESSION["cusPayment"] == 2) {
        header("Location: ../View/wavepay1.php");
    } else if ($_SESSION["cusPayment"] == 3) {
        header("Location: ./orderconfirmController.php");
    }
}
