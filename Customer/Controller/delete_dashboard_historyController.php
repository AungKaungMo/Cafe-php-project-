<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            UPDATE m_orderdetails SET 
            del_flg = 1
            WHERE order_token = :token
        "
    );
    $sql->bindValue(":token", $_GET["token"]);
    $sql->execute();

    $sql = $pdo->prepare(
        "
            UPDATE m_order SET 
            del_flg = 1
            WHERE order_token = :token
        "
    );
    $sql->bindValue(":token", $_GET["token"]);
    $sql->execute();

    header("Location: ../View/dashboard_history_order.php");
    
?>