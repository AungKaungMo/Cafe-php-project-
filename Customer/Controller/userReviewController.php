<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE del_flg=0 AND rating=3  ORDER BY DES LIMIT 3
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
