<?php
include "../Model/dbConnection.php";
$shopid = $_SESSION["shopId"];
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_shopgallery WHERE shop_id=:shopid
    "
);
$sql->bindValue(":shopid", $shopid);
$sql->execute();
$imglist = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($imglist) == 0) {
    $mode = 1;
} else {
    $mode = 2;
}
