<?php
session_start();
    //  $paymentDate = '2023/04/03';
    //  echo $day = date('l', strtotime($paymentDate));
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product
            WHERE shop_id = :shopid
        "
    );
    $sql->bindValue(":shopid", $_SESSION["shopId"]);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
?>