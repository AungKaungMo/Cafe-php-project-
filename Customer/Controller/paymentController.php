<?php
session_start();
include "../Model/dbConnection.php";
 $db = new DBConnection();
    $pdo = $db->connect();

    echo "cafe";
         $sql = $pdo->prepare(
                "INSERT INTO m_shop 
                (
                 shop_name,
                 shop_address,
                 shop_email,
                 shop_password,
                 shop_phone,
                 payment_type,
                 package_type,
                 township,
                 package_expiredate
                 )
                 VALUES
                 (
                     :name,
                     :address,
                     :email,
                     :password,
                     :phone,
                     :payment,
                     :package,
                     :township,
                     :expDate
                 )
                "
            );

        $sql->bindValue(":name", $_SESSION["shopName"]);
        $sql->bindValue(":address", $_SESSION["address"]);
        $sql->bindValue(":email",  $_SESSION["email"]);
        $sql->bindValue(":password", password_hash($_SESSION["password"] ,PASSWORD_DEFAULT));
        $sql->bindValue(":phone", $_SESSION["phoneNumber"]);
        $sql->bindValue(":payment", $_SESSION["payment"]);
        $sql->bindValue(":package", $_SESSION["packageType"]);
        $sql->bindValue(":township", $_SESSION["township"]);
        $sql->bindValue(":expDate", date("Y-m-d", strtotime(' + 1 months')));
        $sql->execute();

        include "./shared/mailSender.php";
        $mail = new SendMail();
        $mail->sendMail($_SESSION["email"], "Payment Successful","You got a new shop.<br>
        To log in your dashboard please type 'http://localhost/cafe_Project/ShopOwner/View/shoplogin.php' in your browser tab
        ");

        include "./shop_historyController.php";

        header("location: ../View/wavepay4.php");
?>