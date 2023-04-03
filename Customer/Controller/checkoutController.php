<?php
session_start();
    if(isset($_POST["checkout"])){
        $totalPrice = $_POST["totalPrice"];
        $cartItems = $_SESSION["cartItemsLists"];
        $userId = $_SESSION["userid"];
        $cartLists = json_decode($_POST["cartLists"], true);
        $_SESSION["cartLists"] = $cartLists;
        
        include "../Model/dbConnection.php";
        $db = new DBConnection();
        $pdo = $db->connect();

        $sql = $pdo->prepare(
            "
                SELECT cus_address FROM m_customer 
                WHERE cus_id = :id
            "
        );
        $sql->bindValue(":id", $userId);
        $sql->execute();
        $userTownship = $sql->fetchAll(PDO::FETCH_ASSOC)[0]["cus_address"];

    }
?>