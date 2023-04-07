<?php
include "../Controller/lib/phpqrcode";
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_admin WHERE del_flg=0
    "
);
$sql->execute();
$emailAdmin = $sql->fetchAll(PDO::FETCH_ASSOC)[0]["admin_email"];
