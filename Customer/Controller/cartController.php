<?php
session_start();
    if(isset($_POST["addtocart"])){
        $location = $_POST["shopinterface"];
        $cartLists = json_decode($_POST["cartItem"], true);
      
        include "../Model/dbConnection.php";
        $db = new DBConnection();
        $pdo = $db->connect();

        $sql = $pdo->prepare(
            "
                SELECT * FROM m_product WHERE del_flg = 0 AND FIND_IN_SET(product_id,:id)
            "
        );

        $ids = [];
        for($i = 0; $i < count($cartLists); $i++){
            array_push($ids,$cartLists[$i]["id"]);
        };
        
        $sql->bindValue(":id", implode(",", $ids));
        $sql->execute();
        $cartItemsLists = $sql->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["cardItemsList"] = $cartItemsLists;
        $_SESSION["cartLists"] = $cartLists;

        header("Location: ../View/$location");
    }
?>