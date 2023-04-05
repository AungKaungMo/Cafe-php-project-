<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_faqs WHERE id=2;
    "
);
$sql->execute();
$resultF = $sql->fetchAll(PDO::FETCH_ASSOC);