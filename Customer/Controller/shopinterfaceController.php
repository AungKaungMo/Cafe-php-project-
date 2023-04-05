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
    $shoplogo = $result[0]["shop_logo"];
    $shopph = $result[0]["shop_phone"];
    $shopemail = $result[0]["shop_email"];
    $address = $result[0]["shop_address"];
    // echo "<pre>";
    // print_r($result);

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_shopgallery WHERE shop_id=:id
        "
    );
    $sql->bindValue(":id", $shopid);
    $sql->execute();
    $imgresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($imgresult);
    $gimg1 = $imgresult[0]["shopgallery_1"];
    $gimg2 = $imgresult[0]["shopgallery_2"];
    $gimg3 = $imgresult[0]["shopgallery_3"];
    $gimg4 = $imgresult[0]["shopgallery_4"];


    //promotion
    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE del_flg = 0 AND product_instock != 0 AND product_discount != 0 AND shop_id=:id
        "
    );
    $sql->bindValue(":id", $shopid);
    $sql->execute();
    $Pmresult = $sql->fetchAll(PDO::FETCH_ASSOC);


    //not promotion Featuredmenu
    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE del_flg = 0 AND product_instock != 0 AND product_discount = 0 AND shop_id=:id ORDER BY del_flg = 0 LIMIT 3
        "
    );
    $sql->bindValue(":id", $shopid);
    $sql->execute();
    $FPmresult = $sql->fetchAll(PDO::FETCH_ASSOC);

    //no promotion Popular menu
    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE del_flg = 0 AND product_instock != 0 AND product_discount = 0 AND shop_id=:id ORDER BY del_flg = 0 DESC LIMIT 3
        "
    );
    $sql->bindValue(":id", $shopid);
    $sql->execute();
    $MPmresult = $sql->fetchAll(PDO::FETCH_ASSOC);
}
