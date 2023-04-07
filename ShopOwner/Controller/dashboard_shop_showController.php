<?php
// session_start();
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
            SELECT * FROM m_option_fill WHERE del_flg = 0
        "
);

// $sql->bindValue(":id", $_SESSION["shopId"]);
$sql->execute();
$optionResults = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($optionResults);
