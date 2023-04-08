<?php
ini_set("display_errors", "1");
//drug
include "../Model/dbConnection.php";

if (isset($_GET["id"])) { 
    // $_SESSION = $_GET["cus_id"];
    $delete = $_GET["id"];

    // echo $delete;
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        UPDATE m_customer SET
        del_flg = 1
        WHERE cus_id=:id;
        "
    ); 
    $sql->bindValue(":id", $delete);
    

    $sql->execute(); 
    header("Location: ../View/dashboard_manageList_UserList.php");
    
}   