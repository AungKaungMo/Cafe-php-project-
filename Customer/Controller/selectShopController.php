<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_shop WHERE del_flg = 0 ORDER BY del_flg = 0 DESC LIMIT 3
    "
);
$sql->execute();
$shop = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($shop);
$shop1 = $shop[0]["shop_id"];
$shop2 = $shop[1]["shop_id"];
$shop3 = $shop[2]["shop_id"];
$shopname1 = $shop[0]["shop_name"];
$shopname2 = $shop[1]["shop_name"];
$shopname3 = $shop[2]["shop_name"];
