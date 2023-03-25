<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        UPDATE m_shop_history SET
        del_noti_flg = 1
        WHERE id = :id
        "
    );
    $sql->bindValue(":id",$_GET["id"]);
    $sql->execute();

    header("location: ../View/dashboard_profile_notifications.php");

?>