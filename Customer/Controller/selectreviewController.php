<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbConnection.php";
$id = $_SESSION["userid"];

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE user_id=:id
    "
);
$sql->bindValue(":id", $id);
$sql->execute();
$Result = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($Result) == 0) {
    $mode = 1;
} else {
    $mode = 2;
}
