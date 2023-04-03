<?php

    if(isset($_POST["cartClick"])){
        $cartLists = json_decode($_POST["cartList"], true);
        // $_SESSION["cartLists"] = $cartLists;
        $total = 0;
        
        include "../Model/dbConnection.php";
        $db = new DBConnection();
        $pdo = $db->connect();

        $sql = $pdo->prepare(
            "
                SELECT 
                mp.*,
                ms.shop_name,
                ms.township
                FROM
                m_product AS mp
                INNER JOIN m_shop AS ms
                ON
                mp.shop_id = ms.shop_id
                WHERE ms.del_flg = 0 AND 
                FIND_IN_SET(mp.product_id,:id)
            "
        );

        $ids = [];
        for($i = 0; $i < count($cartLists); $i++){
            array_push($ids,$cartLists[$i]["id"]);
        };
        
        $sql->bindValue(":id", implode(",", $ids));
        $sql->execute();
        $cartItemsLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
