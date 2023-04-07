<?php
session_start();
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
       SELECT package_expiredate FROM m_shop WHERE shop_id =:shopId AND del_flg = 0
        "
);
$sql->bindValue(":shopId", $_SESSION["shopId"]);
$sql->execute();
$expDate = $sql->fetchAll(PDO::FETCH_ASSOC)[0]["package_expiredate"];

$dateExp = strtotime($expDate);
$newExpDate = date("Y-m-d", strtotime(' + 1 months', $dateExp));

$sql = $pdo->prepare(
    "
            UPDATE m_shop SET
            package_type = :ptype,
            payment_type = :payType,
            package_expiredate = :pexp
            WHERE shop_id = :shopId AND del_flg =0
        "
);
$sql->bindValue(":ptype", $_SESSION["shopPayment"]);
$sql->bindValue(":payType", $_SESSION["shopPackage"]);
$sql->bindValue(":pexp", $newExpDate);
$sql->bindValue(":shopId", $_SESSION["shopId"]);

header("Location: ../View/wavepay4.php");
