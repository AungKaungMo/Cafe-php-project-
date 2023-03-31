<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["savechange"])) {
    $shopName = $_POST["shopname"];
    $address = $_POST["shopaddress"];
    $shopPhone = $_POST["shopphone"];
    $contactEmail = $_POST["contactemail"];
    $fb = $_POST["fblink"];
    $insta = $_POST["instalink"];
    $twitter = $_POST["twitterlink"];
    $file = $_FILES["shopLogo"]["name"];
    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != "") {



        $location = $_FILES["shopLogo"]["tmp_name"];
        if (move_uploaded_file($location, "../../Storages/profile/" . $file)) {
            $sql = $pdo->prepare(
                "
            UPDATE m_shop SET 
            shop_name = :shopName,
            shop_address = :shopAddress,
            contact_email = :shopEmail,
            fb_link = :shopFB,
            insta_link = :shopInsta,
            twitter_link = :shopTwitter,
            shop_logo = :shopLogo
            WHERE shop_id = :shopid
        "
            );

            $sql->bindValue(":shopName", $shopName);
            $sql->bindValue(":shopAddress", $address);
            $sql->bindValue(":shopEmail", $contactEmail);
            $sql->bindValue(":shopFB", $fb);
            $sql->bindValue(":shopInsta", $insta);
            $sql->bindValue(":shopTwitter", $twitter);
            $sql->bindValue(":shopLogo", "profile/" . $file);
            $sql->bindValue(":shopid", $_SESSION["shopId"]);
            $sql->execute();
            $_SESSION["ownerImage"] = "profile/" . $file;
            header("Location: ../View/dashboard_profile_informtaions.php");
        }
    } else {
        $sql = $pdo->prepare(
            "
        UPDATE m_shop SET 
        shop_name = :shopName,
        shop_address = :shopAddress,
        contact_email = :shopEmail,
        fb_link = :shopFB,
        insta_link = :shopInsta,
        twitter_link = :shopTwitter
        WHERE shop_id = :shopid
    "
        );

        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":shopAddress", $address);
        $sql->bindValue(":shopEmail", $contactEmail);
        $sql->bindValue(":shopFB", $fb);
        $sql->bindValue(":shopInsta", $insta);
        $sql->bindValue(":shopTwitter", $twitter);
        $sql->bindValue(":shopid", $_SESSION["shopId"]);
        $sql->execute();
        header("Location: ../View/dashboard_profile_informtaions.php");
    }
}
