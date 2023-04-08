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

$db=new DBConnection();
$pdo=$db->connect();

//all data count
$sql=$pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE del_flg=0
    "
);
$sql->execute();
$totalreview=$sql->fetchAll(PDO::FETCH_ASSOC);


//add reviewlist
$sql = $pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE del_flg=0
    LIMIT $pageStart ,$rowLimit  
    "
);


$sql->execute();
$resultreview=$sql->fetchAll(PDO::FETCH_ASSOC);
$pageList = ceil(count($totalreview)) / $rowLimit;
