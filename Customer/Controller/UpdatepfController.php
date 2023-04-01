<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["upbtn"])) {
    $name = $_POST["uname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $userid = $_SESSION["userid"];
    $file = $_FILES['profile']['name'];
    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != "") {
        $location = $_FILES['profile']['tmp_name'];
        if (move_uploaded_file($location, "../../Storages/userprofile/" . $file)) {
            $sql = $pdo->prepare(
                "
                UPDATE m_customer SET cus_name=:name,
                cus_phone=:phone,
                cus_email=:email,
                cus_profile=:profile
                WHERE cus_id=:id
                "
            );
            $sql->bindValue(":profile", "userprofile/" . $file);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":phone", $phone);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":id", $userid);
            $sql->execute();
            header("Location: ../View/dashboard_userprofile.php");
            $_SESSION["userpf"] = "userprofile/" . $file;
        }
    } else {
        $sql = $pdo->prepare(
            "
                UPDATE m_customer SET cus_name=:name,
                cus_phone=:phone,
                cus_email=:email
                WHERE cus_id=:id
                "
        );
        $sql->bindValue(":name", $name);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":id", $userid);
        $sql->execute();
        header("Location: ../View/dashboard_userprofile.php");
    }
}
