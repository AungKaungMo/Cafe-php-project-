<?php

include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
        SELECT 
        *
        FROM
        m_product AS mp
        INNER JOIN m_shop AS ms
        ON
        mp.shop_id = ms.shop_id
        WHERE mp.del_flg = 0 AND mp.product_instock != 0 AND mp.product_discount = 0
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>