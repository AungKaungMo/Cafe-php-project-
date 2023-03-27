<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["send"])) {
    $name = $_POST["name"];
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
            name,phone,email,message,userid
        )
        VALUES
        (
            :name,
            :phone,
            :email,
            :message,
            :userid
            )
        "
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":message", $message);
    $sql->bindValue(":userid", $userid);
    $sql->execute();
    header("Location: ../View/shopinterface.php");
}
