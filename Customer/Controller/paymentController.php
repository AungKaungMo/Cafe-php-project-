<?php
session_start();
include "../Model/dbConnection.php";

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

        header("location: ../View/wavepay4.php");
    
?>