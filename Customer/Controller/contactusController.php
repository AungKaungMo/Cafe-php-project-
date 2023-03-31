<?php

//include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_contactus WHERE id = 1
    "
);

$sql->execute();
$contactR = $sql->fetchAll(PDO::FETCH_ASSOC);
