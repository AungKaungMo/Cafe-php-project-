<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_shop WHERE shop_id = :id 
        "
    );
    $sql->bindValue(":id", $_SESSION["shopId"]);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["ownerImage"] =  $result[0]["shop_logo"] ;
