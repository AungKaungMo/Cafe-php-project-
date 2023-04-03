<?php
ini_set("display_errors", "1");

session_start();
include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "SELECT* FROM m_coins 
    WHERE del_flg = 0;"
);

// the query is wrong, it should be selected from two dbs (the JOIN thing -_-)

$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);



?>