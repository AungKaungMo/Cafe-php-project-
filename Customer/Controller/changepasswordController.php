<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbConnection.php";
if (isset($_POST["change"])) {
    $old = $_POST["old"];
    $new1 = $_POST["new1"];
    $new2 = $_POST["new2"];
    $id =  $_SESSION["userid"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        SELECT * FROM m_customer WHERE cus_id=:id AND del_flg=0
        "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    $Dbpasssword = $result[0]["cus_password"];

    if (password_verify($old, $Dbpasssword)) {
        $sql = $pdo->prepare(
            "
            UPDATE m_customer SET cus_password = :password WHERE cus_id=:id AND del_flg=0
            "
        );
        $sql->bindValue(":password", password_hash($new2, PASSWORD_DEFAULT));
        $sql->bindValue(":id", $id);
        $sql->execute();
        // echo "ok";
        header("Location: ../View/login.php");
    } else {
        echo "not";
    }
}
