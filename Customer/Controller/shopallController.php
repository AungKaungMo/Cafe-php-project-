<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_shop AS shop INNER
    JOIN m_shopgallery AS gallery ON 
    shop.shop_id = gallery.shop_id WHERE shop.del_flg = 0 
    "
);
$sql->execute();
$idresult = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($idresult);
// $sql = $pdo->prepare(
//     "
//     SELECT * FROM m_shopgallery WHERE del_flg =0 
//     "
// );
// $sql->execute();
// $Sgallery = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($Sgallery);
