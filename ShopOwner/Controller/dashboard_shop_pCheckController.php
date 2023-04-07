<?php
session_start();
if (isset($_POST["buySubmit"])) {
    $shopPayment = $_POST["paymentType"];
    $shopPackage = $_POST["packageType"];
    $_SESSION["shopPackage"] = $shopPackage;
    $_SESSION["shopPayment"] = $shopPayment;
    // echo $payment;
    if ($shopPayment == 1) {
        header("Location: ../View/kbzQR.php");
    } else if ($shopPayment == 2) {
        header("Location: ../View/wavepay1.php");
    }
}
