<?php
//include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_shop AS shop INNER JOIN m_product AS 
    product ON shop.shop_id = product.shop_id
    WHERE product_discount !=0 
    ORDER BY product.shop_id  LIMIT 3
    "
);
$sql->execute();
$pgresult = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($pgresult);
