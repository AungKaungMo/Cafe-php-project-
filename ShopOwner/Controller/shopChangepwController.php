<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbConnection.php";

if (isset($_POST["send"])) {
    $email = $_SESSION["shopemail"];
    $newpw1 = $_POST["newpw1"];
    $newpw2 = $_POST["newpw2"];

    if ($newpw1 == $newpw2) {
        $db = new DBConnection();
        $pdo = $db->connect();
        $sql = $pdo->prepare(
            "
            UPDATE m_shop SET shop_password = :password WHERE shop_email = :email AND del_flg=0;
            "
        );
        $sql->bindValue(":password", password_hash($newpw2, PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->execute();
        header("Location: ../View/login.php");
    } else {
        echo "not";
    }
}
