<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "
    UPDATE m_sendshopcontact SET del_flg = 1 WHERE id = :id
    "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("Location: ../View/dashboard_setting_cu.php");
}
