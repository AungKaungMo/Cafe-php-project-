<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $_SESSION["Sid"] = $_GET["id"];
    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE del_flg = 0 AND product_instock != 0  AND shop_id =:id
        "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
}
