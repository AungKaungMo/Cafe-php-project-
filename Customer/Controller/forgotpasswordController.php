<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["send"])) {
    $db = new DBConnection();
    $pdo = $db->connect();
    $email = $_SESSION["email"];
    $otpcode = $_SESSION["otp"];
    $enterotp = $_POST["code"];

    // echo $email;

    $sql = $pdo->prepare(
        "
            SELECT fg_code FROM  m_customer WHERE cus_email=:email AND del_flg=0;
            "
    );

    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($result[0]["fg_code"] == $enterotp) {
        $_SESSION["otperror"] = "";
        header("Location: ../View/changepw.php");
    } else {
        // echo "hello";
        $_SESSION["otperror"] = "Wrong Otp Code! Try Again..";
        header("Location: ../View/forgotpwGetotp.php");
    }
} else {
    echo "error";
}
