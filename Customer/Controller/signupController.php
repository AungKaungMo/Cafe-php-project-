<?php
include "../Model/dbConnection.php";
session_start();
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
        SELECT cus_email FROM m_customer WHERE cus_email = :email
        "
    );
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    if (count($result) == 0) {

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
            VALUES
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
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(":address", $township);
        $sql->execute();

        //
        $sql = $pdo->prepare(
            "
        SELECT cus_id FROM m_customer WHERE cus_email = :email;
        "
        );
        $sql->bindValue(":email", $email);
        $sql->execute();
        $emailResult = $sql->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION = $emailResult[0]["cus_id"];
        header("Location: ../View/h.php");
        $_SESSION["signuperror"] = "";
    } else {
        header("Location: ../View/signup.php");
        $_SESSION["signuperror"] = "User email is taken .Use another email";
    }
}
