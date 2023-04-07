<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM  m_product  WHERE  product_discount != 0  ORDER BY product_discount DESC LIMIT 5
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
