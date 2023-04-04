<?php
session_start();
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
            SELECT * FROM 
            m_orderdetails
            WHERE cus_id =:cid AND del_flg = 0
        "
);
$sql->bindValue(":cid", $_SESSION["userid"]);
$sql->execute();
$orderLists = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "
            SELECT * FROM 
            m_orderdetails
            INNER JOIN m_order
            ON 
            m_orderdetails.order_token = m_order.order_token
            WHERE m_orderdetails.cus_id =:id AND m_orderdetails.del_flg = 0
        "
);
$sql->bindValue(":id", $_SESSION["userid"]);
$sql->execute();
$orderHistory = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($orderHistory);
?>
<!-- SELECT 
                mp.*,
                ms.shop_name,
                ms.township
                FROM
                m_product AS mp
                INNER JOIN m_shop AS ms
                ON
                mp.shop_id = ms.shop_id
                WHERE ms.del_flg = 0 AND 
                FIND_IN_SET(mp.product_id,:id)
            " -->