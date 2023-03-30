<?php
include "../Model/dbConnection.php";
session_start();
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        SELECT * FROM cus_customer WHERE cus_id = :id AND del_flg=0;
        "
    );
    $sql->bindValue(":id",$);
}
