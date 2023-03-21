<?php
include "../Model/dbConnection.php";

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $township = $_POST["township"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_customer
        (
            cus_name,
            cus_gender,
            cus_email,
            cus_password,
            cus_address
        )

        (
            :name,
            :gender,
            :email,
            :password,
            :address
        );
        "
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":password", $password);
    $sql->bindValue(":address", $township);

    $sql->execute();
}
