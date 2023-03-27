<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
        SELECT * FROM m_shop_history WHERE shop_id = :shopId AND del_noti_flg = 0
    "
);
$sql->bindValue(":shopId", $_SESSION["shopId"]);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
