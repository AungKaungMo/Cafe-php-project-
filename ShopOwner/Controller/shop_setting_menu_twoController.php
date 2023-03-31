<?php
session_start();
    if(isset($_POST["add"])){
        
        $productName = $_POST["pname"];
        $productPrice = $_POST["pprice"];
        $productInstock = $_POST["pinstock"];
        $productDis = $_POST["pdis"];
        $shopId = $_SESSION["shopId"];
        $productType = $_POST["ptype"];
        $file = $_FILES["pphoto"]["name"];

        include "../Model/dbConnection.php";
        $db = new DBConnection();
        $pdo = $db->connect();

        if($file !== ""){

            $location = $_FILES["pphoto"]["tmp_name"];
            if(move_uploaded_file($location, "../../Storages/products/". $file)){
    $sql = $pdo->prepare(
        "
            INSERT INTO m_product
            (
                product_name,
                product_price,
                product_instock,
                product_discount,
                product_photo,
                shop_id,
                coin_price,
                product_type
            )
            VALUES
            (
                :productName,
                :productPrice,
                :productInstock,
                :productDiscount,
                :productPhoto,
                :shopid,
                :coinprice,
                :productType
            )
        "
            );

            $sql->bindValue(":productName", $productName);
            $sql->bindValue(":productPrice", $productPrice);
            $sql->bindValue(":productInstock", $productInstock);
            $sql->bindValue(":productDiscount", $productDis);
            $sql->bindValue(":productPhoto", "products/". $file);
            $sql->bindValue(":shopid", $shopId);
            $sql->bindValue(":coinprice", $productPrice);
            $sql->bindValue(":productType", $productType);

              $sql->execute();
              header("location: ../View/dashboard_setting_menu_two.php");
            }
        }else {
            header("location: ../View/dashboard_setting_menu_two.php");
        }
   
    }

  
