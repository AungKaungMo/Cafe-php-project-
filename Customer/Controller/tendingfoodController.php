<?php
//include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_product WHERE del_flg=0 AND product_instock != 0 AND product_discount = 0 ORDER By product_id DESC LIMIT 6
    "
);
$sql->execute();
$Tfood = $sql->fetchAll(PDO::FETCH_ASSOC);
