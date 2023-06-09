<?php
include "../Model/dbConnection.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        SELECT * FROM m_customer WHERE cus_id = :id AND del_flg=0;
        "
    );
    $sql->bindValue(":id", $userid);
    $sql->execute();
    $pf = $sql->fetchAll(PDO::FETCH_ASSOC);
    $userpf = $pf[0]["cus_profile"];
    $_SESSION["userpf"] = $userpf;
}
