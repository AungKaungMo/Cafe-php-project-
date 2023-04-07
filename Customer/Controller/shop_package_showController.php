<?php

include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
            SELECT * FROM m_option_fill WHERE del_flg=0
        "
);
$sql->execute();
$shopInfoResults = $sql->fetchAll(PDO::FETCH_ASSOC);
