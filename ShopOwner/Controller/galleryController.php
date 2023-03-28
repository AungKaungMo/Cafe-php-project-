<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $mode = $_POST["select"];
    $shopid = $_SESSION["shopId"];
    $file1 = $_FILES['img1'];
    $file2 = $_FILES['img2'];
    $file3 = $_FILES['img3'];
    $file4 = $_FILES['img4'];
    $file = [$file1, $file2, $file3, $file4];
    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != []) {
        $error = false;
        for ($i = 0; $i < count($file); $i++) {
            $location = $file[$i]['tmp_name'];
            echo "<pre>";
            print_r($location);
            if (!move_uploaded_file($location, "../../Storages/shopslider/" . $file[$i]['name'])) {
                $error = true;
            }
        }
        if ($error == false && $mode == 1) {
            $sql = $pdo->prepare(
                "
                INSERT INTO m_shopgallery
            (
                shop_id,shopgallery_1,shopgallery_2,shopgallery_3,shopgallery_4
            )
            VALUES(
                :id,:img1,:img2,:img3,:img4
            )
            "
            );
            $sql->bindValue(":id", $shopid);
            $sql->bindValue(":img1", "shopslider/" . $file1['name']);
            $sql->bindValue(":img2", "shopslider/" . $file2['name']);
            $sql->bindValue(":img3", "shopslider/" . $file3['name']);
            $sql->bindValue(":img4", "shopslider/" . $file4['name']);
            $sql->execute();
        } else if ($error == false && $mode == 2) {
            $sql = $pdo->prepare(
                "
                UPDATE m_shopgallery SET
                shopgallery_1=:img1,
                shopgallery_2=:img2,
                shopgallery_3=:img3,
                shopgallery_4=:img4
                WHERE shop_id= :id
                "
            );
            $sql->bindValue(":id", $shopid);
            $sql->bindValue(":img1", "shopslider/" . $file1['name']);
            $sql->bindValue(":img2", "shopslider/" . $file2['name']);
            $sql->bindValue(":img3", "shopslider/" . $file3['name']);
            $sql->bindValue(":img4", "shopslider/" . $file4['name']);
            $sql->execute();
        }
    }









    //echo $shopid;
}
