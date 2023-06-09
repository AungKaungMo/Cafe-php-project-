<?php
session_start();
if (isset($_POST["logIn"])) {
    $shopEmail = $_POST["email"];
    $pass = $_POST["password"];
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_shop WHERE shop_email = :shopEmail AND del_flg = 0
            "
    );
    $sql->bindValue(":shopEmail", $shopEmail);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) == 0) {
        $_SESSION["shopEmail"] = "Email is incorrect";
        $_SESSION["shopPassword"] = "";
        header("location: ../View/shoplogin.php");
    } else {
        $_SESSION["shopEmail"] = "";
        $dbPass = $result[0]["shop_password"];
        if (password_verify($pass, $dbPass)) {
            $_SESSION["shopPassword"] = "";
            $_SESSION["shopId"] = $result[0]["shop_id"];
            $_SESSION["ownerImage"] = $result[0]["shop_logo"];
            header("location: ../View/dashboard_profile_informtaions.php");
        } else {
            $_SESSION["shopPassword"] = "Password is incorrect";
            header("location: ../View/shoplogin.php");
        }
    }
}
