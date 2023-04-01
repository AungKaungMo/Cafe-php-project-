<?php
session_start();


if (isset($_POST["login"])) {
    //$_SESSION["userpf"] = "";
    $email = $_POST["email"];
    $userpassword = $_POST["password"];

    include  "../Model/dbConnection.php";
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
    $hash_pwd = $result[0]["cus_password"];
    $hash = password_verify($userpassword, $hash_pwd);


    if (count($result) == 0) {
        //fail login
        $_SESSION["error"] = "UserEmail OR Password not match!!";
        header("Location: ../View/login.php");
    } else {
        if (password_verify($userpassword, $result[0]["cus_password"])) {
            $_SESSION["userid"] = $result[0]["cus_id"];
            $_SESSION["username"] = $result[0]["cus_name"];
            header("Location: ../View/h.php");
        } else {
            $_SESSION["error"] = "UserEmail OR Password not match!!";
            header("Location: ../View/login.php");
        }
    }
}
// $dbpasssword = $result[0]["cus_password"];
//         if (password_verify($dbpasssword, $userpassword)) {
//             $_SESSION["error"] = "";
//             echo "right";
            // header("Location: ../View/h.php");
        // } else {
            // $_SESSION["error"] = "UserEmail OR Password not match!!";
            // header("Location: ../View/login.php");
        //     echo "error";
        // }