<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE del_flg=0 ORDER BY rating=3 DES LIMIT 3
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
