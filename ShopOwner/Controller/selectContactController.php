<?php
ini_set("display_errors", "1");


if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart < 0) ? 0 : $pageStart;

include "../Model/dbConnection.php";

$shopid = $_SESSION["shopId"];
$db = new DBConnection();
$pdo = $db->connect();

//all count
$sql = $pdo->prepare(
    "
    SELECT * FROM m_sendshopcontact WHERE del_flg=0 AND shopid = :id
    "
);
$sql->bindValue(":id", $shopid);
$sql->execute();
$totalresult = $sql->fetchAll(PDO::FETCH_ASSOC);

//all list
$sql = $pdo->prepare(
    "
    SELECT * FROM m_sendshopcontact WHERE del_flg=0 
    AND shopid = :id ORDER BY id
    LIMIT $pageStart ,$rowLimit 
    
    "
);

$sql->bindValue(":id", $shopid);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$pageList = ceil(count($totalresult)) / $rowLimit;
