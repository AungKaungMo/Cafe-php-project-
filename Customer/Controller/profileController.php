<?php
include "../Model/dbconnection.php";

session_start();
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "SELECT * FROM cus_customer WHERE id = :id "
    );

    $sql->bindValue(":id", $userid);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["mypf"] = $result;

    header("Location: ../View/dashboard_userprofile.php");
}
