<?php

// include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_services WHERE id=1
    "
);
$sql->execute();
$serviceR = $sql->fetchAll(PDO::FETCH_ASSOC);
