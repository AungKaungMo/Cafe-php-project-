<?php
include "../Model/dbConnection.php";
include "./shared/generatedCode.php";
include "./shared/mailSender.php";
session_start();
if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $township = $_POST["township"];
    $generate = new Generate();
    $code = $generate->genCode(256);

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
            cus_address,
            code
        )
            VALUES
        (
            :name,
            :gender,
            :email,
            :password,
            :address,
            :code
        );
        "
        );
        $sql->bindValue(":name", $name);
        $sql->bindValue(":gender", $gender);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(":address", $township);
        $sql->bindValue(":code", $code);
        $sql->execute();

        $sql = $pdo->prepare(
            "
                SELECT * FROM m_customer WHERE cus_email = :email;
                "
        );
        $sql->bindValue(":email", $email);
        $sql->execute();

        $emailResult = $sql->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["userid"] = $emailResult[0]["cus_id"];
        $_SESSION["username"] = $emailResult[0]["cus_name"];
        $mail = new SendMail();
        $mail->sendMail(
            $email,
            "Your Account Has Been Created!",
            "<a href='localhost/cafe_Project/Customer/Controller/VerifyController.php?code=$code'>Verify</a>"
        );
        header("Location: https://mail.google.com/");
        $_SESSION["signuperror"] = "";
    } else {
        header("Location: ../View/signup.php");
        $_SESSION["signuperror"] = "User email is taken .Use another email";
    }
}
