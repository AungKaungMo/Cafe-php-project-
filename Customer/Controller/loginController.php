<?php
include  "../Model/dbConnection.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $db = new DBConnection;
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
    SELECT * FROM m_customer WHERE cus_email = :email;
    "
    );

    $sql->bindValue(":email", $email);
    // $sql->bindValue(":password", $password);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
}
