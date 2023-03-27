<?php
include "../Model/dbConnection.php";
if (isset($_POST["send"])) {
    $name = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_sendcontactus 
        (name,
        email,
        phone,
        message)
        VALUES
        (:name,
        :email,
        :ph,
        :message)
        "
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":ph", $phone);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":message", $message);
    $sql->execute();
    header("Location: ../View/h.php");
}
