<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE product_id = :id AND del_flg = 0
        "
    );
    $sql->bindValue(":id", $_GET["id"]);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>