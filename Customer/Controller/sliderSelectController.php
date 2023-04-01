<?php
ini_set("display_errors", "1");

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_slideradmin WHERE id = 1
    "
);

$sql->execute();
$resultS = $sql->fetchAll(PDO::FETCH_ASSOC);
