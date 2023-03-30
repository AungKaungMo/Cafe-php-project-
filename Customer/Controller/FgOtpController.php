<?php
session_start();
include "../Model/dbConnection.php";
include "./shared/generatedCode.php";
include "./shared/mailSender.php";
$db = new DBConnection();
$pdo = $db->connect();
if (isset($_POST["getC"])) {
    $email = $_POST["email"];

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_customer WHERE cus_email=:email AND del_flg=0
        "
    );
    $sql->bindValue(":email", $email);
    $sql->execute();
    $emailR = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["email"] = $emailR[0]["cus_email"];

    if (count($emailR) == 0) {
        $_SESSION["fg_error"] = "Wrong Email Address! Try Again..";
        header("Location: ../View/forgotpwGetotp.php");
    } else {
        $_SESSION["fg_error"] = "";
        $generate = new Generate();
        $Otp = $generate->genCode(4);

        $sql = $pdo->prepare(
            "
            UPDATE m_customer SET
            fg_code = :code
            WHERE cus_email = :email
            "
        );
        $sql->bindValue(":code", $Otp);
        $sql->bindValue(":email", $email);
        $sql->execute();

        $_SESSION["otp"] = $Otp;
        $_SESSION["email"] = $email;

        $mail = new SendMail();
        $mail->sendMail(
            $email,
            "Get code.",
            "<h1>Code: $Otp </h1>"
        );
        header("Location: ../View/forgotpwGetotp.php");
    }
}
