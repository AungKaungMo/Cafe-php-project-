<?php
ini_set("display_errors", "1");
//drug
include "../Model/dbconnection.php";

if (isset($_GET["shop_id"])) { 
    $delete = $_GET["shop_id"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        UPDATE m_shop SET
        del_flg = 1
        WHERE shop_id=:id;
        "
    ); 
    $sql->bindValue(":id", $delete);

    $sql->execute(); 
    header("Location: ../View/dashboard_manageList_ShopList.php");
    
} else {
    echo "error";
}


?>