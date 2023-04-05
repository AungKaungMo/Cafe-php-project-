<?php
ini_set("display_errors", "1");
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_shopHeader WHERE id=1
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $img = $result[0]["header_image"];
?>