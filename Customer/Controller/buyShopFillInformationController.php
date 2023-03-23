<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $shopName = $_POST["shopName"];
    $phoneNumber = $_POST["phoneNumber"];
    $address = $_POST["address"];
    $packageType = $_POST["packageType"];
    $township = $_POST["township"];
    $payment = $_POST["payment"];


    if ($password != $confirmPassword) {
        header("location: ../View/buyShopFillInformation.php");
    } else {

        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["shopName"] = $shopName;
        $_SESSION["phoneNumber"] = $phoneNumber;
        $_SESSION["address"] = $address;
        $_SESSION["packageType"] = $packageType;
        $_SESSION["township"] = $township;
        $_SESSION["payment"] = $payment;

        if ($payment == 1) {
            header("location: ../View/kbzQR.php");
        } else if ($payment == 2) {
            header("location: ../View/wavepay1.php");
        }
    }
} else {
    header("location: ../View/buyShopFillInformation.php");
}
