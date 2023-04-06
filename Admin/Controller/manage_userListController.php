
<?php
ini_set("display_errors", "1");
// session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 1;
$pageStart = ($page-1) * $rowLimit;
$pageStart = ($pageStart<0)? 0 : $pageStart;

include "../Model/dbconnection.php"; 

$db = new DBConnection();
$pdo = $db->connect();

//all data count
$sql = $pdo->prepare(

    "
    SELECT* FROM m_customer 
    WHERE del_flg = 0    
    "
);
$sql->execute();
$totalUser = $sql->fetchAll(PDO::FETCH_ASSOC);

//add userlist
$sql = $pdo->prepare(

    "
    SELECT* FROM m_customer 
    WHERE del_flg = 0
    LIMIT $pageStart ,$rowLimit     
    "  
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$resultU = $result;
$pageList = ceil(count($totalUser))/ $rowLimit;



// echo "<pre>";
// print_r($result);
// $_SESSION["allshop"] = $result;
// header("Location: ../View/dashboard_manageList_ShopList.php");
?>