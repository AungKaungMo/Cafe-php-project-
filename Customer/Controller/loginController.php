<?php
include  "../Model/dbConnection.php";
session_start();
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $userpassword = $_POST["password"];

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_customer WHERE cus_email = :email;
        "
    );

    $sql->bindValue(":email", $email);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);

    $pwd = password_hash($userpassword, PASSWORD_DEFAULT);

    echo  $pwd;
    echo "<pre>";

    if (count($result) == 0) {
        //fail login
        $_SESSION["error"] = "UserEmail OR Password not match!!";
        header("Location: ../View/login.php");
    } else {
        $dbpasssword = $result[0]["cus_password"];
        if (password_verify($userpassword, $dbpasssword)) {
            $_SESSION["error"] = "";
            header("Location: ../View/h.php");
        } else {
            // $_SESSION["error"] = "UserEmail OR Password not match!!";
            // header("Location: ../View/login.php");
            echo "error";
        }
    }
}
