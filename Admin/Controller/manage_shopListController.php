
<?php
ini_set("display_errors", "1");
session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;

include "../Model/dbconnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(

    "SELECT* FROM m_shop 
    WHERE del_flg = 0 
    LIMIT $pageStart, $rowLimit;"

);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$shop = $result;
$pageList = ceil(count($shop) / $rowLimit);
// echo "<pre>";
// print_r($shop);
// $_SESSION["allshop"] = $result;
// header("Location: ../View/dashboard_manageList_ShopList.php");
?>