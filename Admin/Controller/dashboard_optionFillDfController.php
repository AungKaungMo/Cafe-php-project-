<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_option_fill WHERE 1
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>