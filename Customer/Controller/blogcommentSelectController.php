<?php
ini_set("display_errors", "1");
    // include "../Model/dbconnection.php";

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        SELECT * FROM m_blogcomment 
        WHERE del_flg = 0 ORDER BY comment_id DESC
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); 
?>
