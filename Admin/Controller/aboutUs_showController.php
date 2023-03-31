<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_aboutUs WHERE 1
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>