<?php
    include "../Model/dbconnection.php";

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        SELECT comment FROM m_blogcomment 
        WHERE del_flg = 0 ORDER BY id DESC LIMIT 3;
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); 
?>
