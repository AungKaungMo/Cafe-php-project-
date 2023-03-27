<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
           UPDATE m_product SET del_flg = 1 WHERE product_id = :id
        "
    );
    $sql->bindValue(":id",$_GET["id"]);
    $sql->execute();

    header("location: ../View/dashboard_setting_menu_two.php");
?>