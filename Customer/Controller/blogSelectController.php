<?php
ini_set("display_errors", "1");
    // include "../Model/dbconnection.php";

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        SELECT * FROM m_blog 
        WHERE del_flg = 0 ORDER BY id DESC
        "
    );
    $sql->execute();
    $resultB = $sql->fetchAll(PDO::FETCH_ASSOC); 
?>
