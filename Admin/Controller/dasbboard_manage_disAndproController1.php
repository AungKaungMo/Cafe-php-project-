<?php
session_start();
    if(isset($_POST["savechange1"])){
        $file1 = $_FILES["slideImg1"];
        $file2 = $_FILES["slideImg2"];
        $file3 = $_FILES["slideImg3"];

        $title1 = $_POST["title1"];
        $title2 = $_POST["title2"];
        $title3 = $_POST["title3"];

        $cafe1 = $_POST["cafe1"];
        $cafe2 = $_POST["cafe2"];
        $cafe3 = $_POST["cafe3"];

        $product1 = $_POST["product1"];
        $product2 = $_POST["product2"];
        $product3 = $_POST["product3"];

        $address1 = $_POST["add1"];
        $address2 = $_POST["add2"];
        $address3 = $_POST["add3"];

        $file = [$file1, $file2, $file3];

        $result = $_SESSION["dis_result"];
        include "../Model/dbConnection.php";
        $db = new DBConnection();
        $pdo = $db->connect();
        if(count($result) == 0) {
            $sql = $pdo->prepare(
                "
                    INSERT INTO m_discount_promotions 
                    (
                        title1,
                        title2,
                        title3,
                        cafe_shop1,
                        cafe_shop2,
                        cafe_shop3,
                        address1,
                        address2,
                        address3,
                        product_name1,
                        product_name2,
                        product_name3
                    )
                    VALUES
                    (
                        :title1,
                        :title2,
                        :title3,
                        :cafe1,
                        :cafe2,
                        :cafe3,
                        :add1,
                        :add2,
                        :add3,
                        :pname1,
                        :pname2,
                        :pname3
                    )
                "
                );

                $img = [0, 0, 0];

                for($i =0; $i < count($file); $i++){
                    $location = $file[$i]['tmp_name'];
                    if (!move_uploaded_file($location, "../../Storages/dis&promotion/" . $file[$i]['name'])) {
                        $img[$i] = 1;
                    }
                }

                if($img[0] == 0){
                    $extension1 = pathinfo($file1["name"])["extension"];
                    $sql = $pdo->prepare(
                        "INSERT INTO m_discount_promotions (slide_image1) VALUES (:img1)"
                    );
                    $sql->bindValue(":img1", "dis&promotion/discountImage1.". $extension1);
                }
                if($img[1] == 0){
                    $extension2 = pathinfo($file2["name"])["extension"];
                    $sql = $pdo->prepare(
                        "INSERT INTO m_discount_promotions (slide_image2) VALUES (:img2)"
                    );
                    $sql->bindValue(":img2", "dis&promotion/discountImage2.". $extension2);
                }
                if($img[2] == 0){
                    $extension3 = pathinfo($file3["name"])["extension"];
                    $sql = $pdo->prepare(
                        "INSERT INTO m_discount_promotions (slide_image3) VALUES (:img3)"
                    );
                    $sql->bindValue(":img3", "dis&promotion/discountImage3.". $extension3);
                }

                $sql->bindValue(":title1", $title1);
                $sql->bindValue(":title2", $title2);
                $sql->bindValue(":title3", $title3);
                $sql->bindValue(":cafe1", $cafe1);
                $sql->bindValue(":cafe2", $cafe2);
                $sql->bindValue(":cafe3", $cafe3);
                $sql->bindValue(":add1", $address1);
                $sql->bindValue(":add2", $address2);
                $sql->bindValue(":add3", $address3);
                $sql->bindValue(":pname1", $product1);
                $sql->bindValue(":pname2", $product2);
                $sql->bindValue(":pname3", $product3);
                $sql->execute();

        }else {
            $sql = $pdo->prepare(
                "
                    UPDATE m_discount_promotions SET
                        title1 = :title1,
                        title2 = :title2,
                        title3 = :title3,
                        cafe_shop1 = :cafe1,
                        cafe_shop2 = :cafe2,
                        cafe_shop3 = :cafe3,
                        address1 = :add1,
                        address2 = :add2,
                        address3 = :add3,
                        product_name1 = :pname1,
                        product_name2 = :pname2,
                        product_name3 = :pname3
                    WHERE del_flg = 0
                "
                );

                $img = [0, 0, 0];
    
                for($i =0; $i < count($file); $i++){
                    $location = $file[$i]['tmp_name'];
                    if (!move_uploaded_file($location, "../../Storages/dis&promotion/" . $file[$i]['name'])) {
                        $img[$i] = 1;
                    }
                }
                echo "<pre>";
print_r($img);
                if($img[0] == 0){
                    $extension1 = pathinfo($file1["name"])["extension"];
                    $sql = $pdo->prepare(
                        "UPDATE m_discount_promotions SET slide_image1 = :img1 WHERE del_flg = 0 "
                    );
                    $sql->bindValue(":img1", "dis&promotion/discountImage1.". $extension1);
                }
                if($img[1] == 0){
                    $extension2 = pathinfo($file2["name"])["extension"];
                    echo "dis&promotion/discountImage2.". $extension2;
                    $sql = $pdo->prepare(
                        "UPDATE m_discount_promotions SET slide_image2 = :img2 WHERE del_flg = 0 "
                    );
                    $sql->bindValue(":img2", "dis&promotion/discountImage2.". $extension2);
                }
                if($img[2] == 0){
                    $extension3 = pathinfo($file3["name"])["extension"];
                    $sql = $pdo->prepare(
                        "UPDATE m_discount_promotions SET slide_image3 = :img3 WHERE del_flg = 0 "
                    );
                    $sql->bindValue(":img3", "dis&promotion/discountImage3.". $extension3);
                }
                $sql->bindValue(":title1", $title1);
                $sql->bindValue(":title2", $title2);
                $sql->bindValue(":title3", $title3);
                $sql->bindValue(":cafe1", $cafe1);
                $sql->bindValue(":cafe2", $cafe2);
                $sql->bindValue(":cafe3", $cafe3);
                $sql->bindValue(":add1", $address1);
                $sql->bindValue(":add2", $address2);
                $sql->bindValue(":add3", $address3);
                $sql->bindValue(":pname1", $product1);
                $sql->bindValue(":pname2", $product2);
                $sql->bindValue(":pname3", $product3);
                $sql->execute();
        }
        header("Location: ../View/dashboard_managePage_Dis&Pro1.php");

    }
