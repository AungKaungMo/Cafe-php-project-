<?php

include "../Model/dbConnection.php";

$code = $_GET["code"];
$db = new DBConnection();

$pdo = $db->connect();

$sql = $pdo->prepare(
    "SELECT * FROM m_customer WHERE code =:code"
);

$sql->bindValue(":code", $code);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {
    echo "Your are wrong verify code!";
} else {
    $sql = $pdo->prepare(
        "
        UPDATE  m_customer SET
        verify = 1
        WHERE code = :code
        "
    );
    $sql->bindValue(":code", $code);
    $sql->execute();
    header("Location: ../View/h.php");
}
