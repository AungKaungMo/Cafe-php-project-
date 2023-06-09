<?php
ini_set("display_errors", "1");
// session_start();

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart < 0) ? 0 : $pageStart;

include "../Model/dbConnection.php";

// $shopID = $_SESSION["shopID"];

$db = new DBConnection();
$pdo = $db->connect();

//all data count
$sql = $pdo->prepare(
    "
    SELECT
    o.shop_id,
    o.order_id, 
    o.total_quantity,
    od.total_price,
    od.payment_id,
    o.created_date
    FROM
        m_orderdetails AS od
    INNER JOIN m_order AS o
    ON
        od.order_token = o.order_token
    WHERE
         o.del_flg = 0 AND od.del_flg = 0
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


//add order
$sql = $pdo->prepare(
    "
    SELECT
    o.shop_id,
    o.order_id, 
    o.total_quantity,
    od.total_price,
    od.payment_id,
    o.created_date
    FROM
        m_orderdetails AS od
    INNER JOIN m_order AS o
    ON
        od.order_token = o.order_token
    WHERE
        o.del_flg = 0 AND od.del_flg = 0
    LIMIT $pageStart ,$rowLimit   
    "
);

// $sql->bindValue(":shopID", $shopID);
$sql->execute();
$order = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageList = count($totalRecord) / $rowLimit;
