<?php
session_start();
include "../Model/dbConnection.php";

if (isset($_POST["send"])) {
    $shopid = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $userid = $_SESSION["userid"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_sendshopcontact
        (
            name,phone,email,message,userid,shopid
        )
        VALUES
        (
            :name,
            :phone,
            :email,
            :message,
            :userid,
            :id
            )
        "
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":id", $shopid);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":message", $message);
    $sql->bindValue(":userid", $userid);
    $sql->execute();
    header("Location: ../View/shopinterface.php?id=$shopid");
}
