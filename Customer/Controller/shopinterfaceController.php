<?php
include "../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $shopid = $_GET["id"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
    SELECT * FROM m_shop WHERE shop_id=:id
    "
    );
    $sql->bindValue(":id", $shopid);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
}
