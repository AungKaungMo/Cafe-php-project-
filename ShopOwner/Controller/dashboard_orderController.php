<?php
ini_set("display_errors", "1");
// session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 3;
$pageStart = ($page-1) * $rowLimit;
$pageStart = ($pageStart<0)? 0 : $pageStart;

include "../Model/dbConnection.php";

// $shopID = $_SESSION["shopID"];

$db = new DBConnection();
$pdo = $db->connect();

//all data count

$sql = $pdo->prepare(
    "
    SELECT
    od.cus_name,
    od.payment_id, 
    od.cus_phone,
    od.cus_address,
    o.bought_product_name,
    o.product_price
    FROM
        m_orderdetails AS od
    INNER JOIN m_order AS o
    ON
        od.order_token = o.order_token
    WHERE
        o.shop_id = 16 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


//add order
$sql = $pdo->prepare(
    "
    SELECT
    od.cus_name,
    od.payment_id, 
    od.cus_phone,
    od.cus_address,
    o.bought_product_name,
    o.product_price
    FROM
        m_orderdetails AS od
    INNER JOIN m_order AS o
    ON
        od.order_token = o.order_token
    WHERE
        o.shop_id = 16
    LIMIT $pageStart ,$rowLimit   
    "
);

// $sql->bindValue(":shopID", $shopID);
$sql->execute();
$orderList = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageList = count($totalRecord)/ $rowLimit;




 













?>