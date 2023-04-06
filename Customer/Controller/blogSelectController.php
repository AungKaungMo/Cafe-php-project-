<?php
ini_set("display_errors", "1");
// include "../Model/dbconnection.php";

if (isset($_GET["bid"])) {
    $bid = $_GET["bid"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        SELECT * FROM m_blog WHERE del_flg = 0 AND id=:id
        "
    );
    $sql->bindValue(":id", $bid);
    $sql->execute();
    $resultB = $sql->fetchAll(PDO::FETCH_ASSOC);
}
