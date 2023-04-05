<?php
include "../Model/dbConnection.php";
$db=new DBConnection();
$pdo=$db->connect();
$sql=$pdo->prepare(
    "
    SELECT * FROM  m_product WHERE product_discount != 0 
    "
);
$sql->execute();
$poresult=$sql->fetchAll(PDO::FETCH_ASSOC);
