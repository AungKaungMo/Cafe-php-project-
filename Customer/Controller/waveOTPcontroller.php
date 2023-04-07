<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";
include "./shared/generatedCode.php";
include "./shared/mailSender.php";
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["useremail"];
    // $password = $_POST["password"]; 
    // $_SESSION["otp_pwd"] = $_POST["pwd"]; 

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        SELECT * FROM m_customer WHERE cus_email=:email AND del_flg=0
        "
    );
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        $_SESSION["otpemail_error"] = "Wrong email! Try Again..";
        header("Location: ../View/wavepay1.php");
    } else {
        $_SESSION["otpemail_error"] = "";
        $generate = new Generate();
        $wOtp = $generate->genCode(4);
        // echo $wOtp;
        $sql = $pdo->prepare(
            "
            UPDATE m_customer SET
            wave_otp = :otp
            WHERE cus_email = :email
            "
        );
        $sql->bindValue(":otp", $wOtp);
        $sql->bindValue(":email", $email);
        $sql->execute();

        $_SESSION["wave_otp"] = $wOtp;
        $_SESSION["email"] = $email;

        $mail = new SendMail();
        $mail->sendMail(
            $email,
            "Get code.",
            "<h1>Code: $wOtp </h1>"
        );
        header("Location: ../View/wavepay1.php");
    }
}
