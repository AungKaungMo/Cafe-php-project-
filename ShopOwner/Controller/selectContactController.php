<?php

include "../Model/dbConnection.php";
$shopid = $_SESSION["shopId"];
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_sendshopcontact WHERE del_flg=0 AND shopid = :id
    "
);
$sql->bindValue(":id", $shopid);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
