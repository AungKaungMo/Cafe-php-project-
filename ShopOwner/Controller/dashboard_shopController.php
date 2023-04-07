<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";  
session_start();


if (isset($_POST["submit"])) 
{
    $package = $_POST["package"];
    $payment = $_POST["payment"]; 
    $shopID = $_SESSION["shopId"];

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        UPDATE m_shop SET
        package_type=:package,
        payment_type=:payment
        WHERE shop_id= :id
        "
    );
    $sql->bindValue(":package", $package);
    $sql->bindValue(":payment", $payment);
    $sql->bindValue(":id", $shopID);

    $sql->execute();
    header("Location: ../View/dashboard_shop.php");

}