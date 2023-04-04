
<?php
ini_set("display_errors", "1");

 
session_start();
include "../Model/dbconnection.php"; 

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(

    "SELECT* FROM m_customer 
    WHERE del_flg = 0;"
    
);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// $_SESSION["allshop"] = $result;
// header("Location: ../View/dashboard_manageList_ShopList.php");
?>