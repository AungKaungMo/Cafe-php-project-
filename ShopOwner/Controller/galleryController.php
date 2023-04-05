<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $mode = $_POST["select"];
    //echo $mode;
    $shopid = $_SESSION["shopId"];
    $file1 = $_FILES['img1'];
    $file2 = $_FILES['img2'];
    $file3 = $_FILES['img3'];
    $file4 = $_FILES['img4'];
    $file = [$file1, $file2, $file3, $file4];
    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != []) {
        //echo "1";
        $query = "UPDATE m_shopgallery SET ";
        $query1 = "shopgallery_1=:img1";
        $query2 = "shopgallery_2=:img2";
        $query3 = "shopgallery_3=:img3";
        $query4 = "shopgallery_4=:img4 ";
        $location1 = $file[0]['tmp_name'];
        $location2 = $file[1]['tmp_name'];
        $location3 = $file[2]['tmp_name'];
        $location4 = $file[3]['tmp_name'];
        $queryend = " WHERE shop_id= :id ";

        if ($mode == 2) {
            if (move_uploaded_file($location1, "../../Storages/shopslider/"  . $file[0]['name'])) {
                // echo "2";
                $finalquery = $query . $query1 . $queryend;
                $sql = $pdo->prepare(
                    $finalquery
                );

                $sql->bindValue(":id", $shopid);
                $sql->bindValue(":img1", "shopslider/" . $file1['name']);
                $sql->execute();
            }

            if (move_uploaded_file($location2, "../../Storages/shopslider/" . $file[1]['name'])) {
                // echo "3";
                $finalquery = $query . $query2 . $queryend;
                $sql = $pdo->prepare(
                    $finalquery
                );

                $sql->bindValue(":id", $shopid);
                $sql->bindValue(":img2", "shopslider/" . $file2['name']);
                $sql->execute();
            }

            if (move_uploaded_file($location3, "../../Storages/shopslider/" . $file[2]['name'])) {
                // echo "4";
                $finalquery = $query . $query3 . $queryend;
                $sql = $pdo->prepare(
                    $finalquery
                );

                $sql->bindValue(":id", $shopid);
                $sql->bindValue(":img3", "shopslider/" . $file3['name']);
                $sql->execute();
            }

            if (move_uploaded_file($location4, "../../Storages/shopslider/" . $file[3]['name'])) {
                // echo "5";
                $finalquery = $query . $query4 . $queryend;
                $sql = $pdo->prepare(
                    $finalquery
                );

                $sql->bindValue(":id", $shopid);
                $sql->bindValue(":img4", "shopslider/" . $file4['name']);
                $sql->execute();
            }
            header("Location: ../View/dashboard_setting_gallery.php");
        }

        $newquery = "INSERT INTO m_shopgallery (shop_id, ";
        $newquery1 = "shopgallery_1, ";
        $newquery2 = "shopgallery_2,";
        $newquery3 = "shopgallery_3, ";
        $newquery4 = "shopgallery_4 ";
        $queryvalue1 = "VALUES";
        $idquery = ":id,";
        $queryvalue2 = ":img1,";
        $queryvalue3 = ":img2,";
        $queryvalue4 = ":img3,";
        $queryvalue5 = ":img4";
        for ($i = 0; $i < count($file); $i++) {
            $location = $file[$i]['tmp_name'];
            if (move_uploaded_file($location, "../../Storages/shopslider/" . $file[$i]['name'])) {
                $error = true;
            }
        }

        if ($mode == 1) {
            $finalquery = $newquery . $newquery1 . $newquery2 . $newquery3 .  $newquery4 . ")" . $queryvalue1 . "(" . $idquery  . $queryvalue2 . $queryvalue3 . $queryvalue4 . $queryvalue5 . ")";
            $sql = $pdo->prepare(
                $finalquery
            );
            $sql->bindValue(":id", $shopid);
            $sql->bindValue(":img1", "shopslider/" . $file1['name']);
            $sql->bindValue(":img2", "shopslider/" . $file2['name']);
            $sql->bindValue(":img3", "shopslider/" . $file3['name']);
            $sql->bindValue(":img4", "shopslider/" . $file4['name']);
            $sql->execute();
            header("Location: ../View/dashboard_setting_gallery.php");
        }
    }
}


            // if (move_uploaded_file($location1, "../../Storages/shopslider/" . $file[0]['name'])) {
            //     $finalquery = $newquery . $newquery1 . ")" . $queryvalue1 . "(" . $idquery . "," . $queryvalue2 . ")";
            //     $sql = $pdo->prepare(
            //         $finalquery
            //     );
            //     $sql->bindValue(":id", $shopid);
            //     $sql->bindValue(":img1", "shopslider/" . $file1['name']);
            //     $sql->execute();
            // }

            // if (move_uploaded_file($location2, "../../Storages/shopslider/" . $file[1]['name'])) {
            //     $finalquery = $newquery . $newquery1 . ")" . $queryvalue1 . "(" . $idquery . "," . $queryvalue3 . ")";
            //     $sql = $pdo->prepare(
            //         $finalquery
            //     );
            //     $sql->bindValue(":id", $shopid);
            //     $sql->bindValue(":img2", "shopslider/" . $file2['name']);
            //     $sql->execute();
            // }

            // if (move_uploaded_file($location3, "../../Storages/shopslider/" . $file[2]['name'])) {
            //     $finalquery = $newquery . $newquery1 . ")" . $queryvalue1 . "(" . $idquery . "," . $queryvalue4 . ")";
            //     $sql = $pdo->prepare(
            //         $finalquery
            //     );
            //     $sql->bindValue(":id", $shopid);
            //     $sql->bindValue(":img3", "shopslider/" . $file3['name']);
            //     $sql->execute();
            // }
            // if (move_uploaded_file($location4, "../../Storages/shopslider/" . $file[3]['name'])) {
            //     $finalquery = $newquery . $newquery1 . ")" . $queryvalue1 . "(" . $idquery . "," . $queryvalue5 . ")";
            //     $sql = $pdo->prepare(
            //         $finalquery
            //     );
            //     $sql->bindValue(":id", $shopid);
            //     $sql->bindValue(":img4", "shopslider/" . $file4['name']);
            //     $sql->execute();
            // }

 
 // $newfile = date("Y-m-d H:i:s") . $file[0]['name'];
        // //echo $newlocation1;
        // echo move_uploaded_file($newlocation1, "../../Storages/shopslider/$newfile");
        // // echo  date("Y-m-d H:i:s");
        // // echo $file[0]['name'];
 //     for ($i = 0; $i < count($file); $i++) {
        //     $location = $file[$i]['tmp_name'];
        //     echo "<pre>";
        //     print_r($location);
        //     if (!move_uploaded_file($location, "../../Storages/shopslider/" . $file[$i]['name'])) {
        //         $error = true;
        //     }
        // }
        // if ($error == false && $mode == 1) {
        //     $sql = $pdo->prepare(
        //         "
        //         INSERT INTO m_shopgallery
        //     (
        //         shop_id,shopgallery_1,shopgallery_2,shopgallery_3,shopgallery_4
        //     )
        //     VALUES(
        //         :id,:img1,:img2,:img3,:img4
        //     )
        //     "
        //     );
        //     $sql->bindValue(":id", $shopid);
        //     $sql->bindValue(":img1", "shopslider/" . $file1['name']);
        //     $sql->bindValue(":img2", "shopslider/" . $file2['name']);
        //     $sql->bindValue(":img3", "shopslider/" . $file3['name']);
        //     $sql->bindValue(":img4", "shopslider/" . $file4['name']);
        //     $sql->execute();
        // } else if ($error == false && $mode == 2) {
        //     $sql = $pdo->prepare(
        //         "
        //         UPDATE m_shopgallery SET
        //         shopgallery_1=:img1,
        //         shopgallery_2=:img2,
        //         shopgallery_3=:img3,
        //         shopgallery_4=:img4
        //         WHERE shop_id= :id
        //         "
        //     );
        //     $sql->bindValue(":id", $shopid);
        //     $sql->bindValue(":img1", "shopslider/" . $file1['name']);
        //     $sql->bindValue(":img2", "shopslider/" . $file2['name']);
        //     $sql->bindValue(":img3", "shopslider/" . $file3['name']);
        //     $sql->bindValue(":img4", "shopslider/" . $file4['name']);
        //     $sql->execute();
        //     header("Location: ../View/dashboard_setting_gallery.php");
        // }


        //echo $shopid;