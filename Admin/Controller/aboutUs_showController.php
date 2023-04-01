<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_aboutUs WHERE del_flg = 0
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>