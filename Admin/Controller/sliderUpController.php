<?php
ini_set("display_errors", "1");

// session_start();
include "../Model/dbConnection.php";

if (isset($_POST["saveChange"])) {
    // print_r($_POST);

    $titleOne = $_POST["title1"];
    $paraOne = $_POST["para1"];
    $file1 = $_FILES['image1'];
    $titleTwo = $_POST["title2"];
    $paraTwo = $_POST["para2"];
    $file2 = $_FILES['image2'];
    $titleThree = $_POST["title3"];
    $paraThree = $_POST["para3"];
    $file3 = $_FILES['image3'];
    $file = [$file1, $file2, $file3];
    print_r($file);

    $db = new DBConnection();
    $pdo = $db->connect();

    if ($file != []) {
        echo "1";
        $query = "UPDATE m_slideradmin SET";
        $query1 = "imgOne = :img1";
        $query2 = "imgTwo = :img2";
        $query3 = "imgThree = :img3";
        $location1 = $file[0]['tmp_name'];
        $location2 = $file[1]['tmp_name'];
        $location3 = $file[2]['tmp_name'];
        $queryend = "WHERE id = 1";
        if (move_uploaded_file($location1, "../../Storages/adminslider/" . $file[0]['name'])) {
            echo "2";
            $finalquery = $query . $query1 . $queryend;
            $sql = $pdo->prepare(
                $finalquery
            );

            $sql->bindValue(":img1", "adminslider/" . $file1['name']);
            $sql->execute();
        }
        if (move_uploaded_file($location2, "../../Storages/adminslider/" . $file[1]['name'])) {
            echo "3";
            $finalquery = $query . $query2 . $queryend;
            $sql = $pdo->prepare(
                $finalquery
            );

            $sql->bindValue(":img2", "adminslider/" . $file2['name']);
            $sql->execute();
        }
        if (move_uploaded_file($location3, "../../Storages/adminslider/" . $file[2]['name'])) {
            echo "4";
            $finalquery = $query . $query3 . $queryend;
            $sql = $pdo->prepare(
                $finalquery
            );

            $sql->bindValue(":img3", "adminslider/" . $file2['name']);
            $sql->execute();
        }
    }
}


 


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//     $sql = $pdo->prepare(
//         "
//             UPDATE m_slideradmin SET
//             titleOne=:title1,
//             paraOne=:para1,
//             imgOne=:image1,
//             titleTwo=:title2,
//             paraTwo=:para2,
//             imgTwo=:image2,
//             titleThree=:title3,
//             paraThree=:para3,
//             imgThree=:image3
//             WHERE id=1
//         "
//     );

//     $sql->bindValue(":para1", $paraOne);
//     $sql->bindValue(":image1", "adminslider/" . $file1['name']);
//     $sql->bindValue(":title2", $titleTwo);
//     $sql->bindValue(":para2", $paraTwo);
//     $sql->bindValue(":image2", "adminslider/" . $file2['name']);
//     $sql->bindValue(":title3", $titleThree);
//     $sql->bindValue(":para3", $paraThree);
//     $sql->bindValue(":image3", "adminslider/" . $file3['name']);
//     $sql->execute();
//     echo $file1;
//     header("Location: ../View/dashboard_managePage_Slider.php");
// }





































   // if ($file != []) {
    //     $query = "UPDATE m_slideradmin SET ";
    //     $query1 = "titleOne=:title1,paraOne=:para1,titleTwo=:title2,paraTwo=:para2,titleThree=:title3,paraThree=:para3, ";
    //     $newquery1 = "titleOne=:title1,paraOne=:para1,titleTwo=:title2,paraTwo=:para2,titleThree=:title3,paraThree=:para3 ";
    //     $query2 = "imgOne=:image1,";
    //     $query3 = "imgTwo=:image2,";
    //     $query4 = "imgThree=:image3";
    //     $queryend = "WHERE id=1";

    //     $location1 = $file[0]['tmp_name'];
    //     $location2 = $file[1]['tmp_name'];
    //     $location3 = $file[2]['tmp_name'];
    //     if (move_uploaded_file($location1, "../../Storages/adminslider/" . $file[0]['name'])) {
    //         $finalquery = $query . $query1 . $query2 . $queryend;
    //         $sql = $pdo->prepare(
    //             $finalquery
    //         );
    //         $sql->bindValue(":title1", $titleOne);
    //         $sql->bindValue(":para1", $paraOne);
    //         $sql->bindValue(":title2", $titleTwo);
    //         $sql->bindValue(":para2", $paraTwo);
    //         $sql->bindValue(":title3", $titleThree);
    //         $sql->bindValue(":para3", $paraThree);
    //         $sql->bindValue(":image1", "adminslider/" . $file1['name']);
    //         $sql->execute();
    //         header("Location: ../View/dashboard_managePage_Slider.php");
    //     } else if (move_uploaded_file($location2, "../../Storages/adminslider/" . $file[1]['name'])) {
    //         $finalquery = $query . $query1 .  $query3  . $queryend;
    //         $sql = $pdo->prepare(
    //             $finalquery
    //         );
    //         $sql->bindValue(":title1", $titleOne);
    //         $sql->bindValue(":para1", $paraOne);
    //         $sql->bindValue(":title2", $titleTwo);
    //         $sql->bindValue(":para2", $paraTwo);
    //         $sql->bindValue(":title3", $titleThree);
    //         $sql->bindValue(":para3", $paraThree);
    //         $sql->bindValue(":image2", "adminslider/" . $file2['name']);
    //         $sql->execute();
    //         header("Location: ../View/dashboard_managePage_Slider.php");
    //     } else if (move_uploaded_file($location3, "../../Storages/adminslider/" . $file[2]['name'])) {
    //         $finalquery = $query . $query1 . $query4 . $queryend;
    //         $sql = $pdo->prepare(
    //             $finalquery
    //         );
    //         $sql->bindValue(":title1", $titleOne);
    //         $sql->bindValue(":para1", $paraOne);
    //         $sql->bindValue(":title2", $titleTwo);
    //         $sql->bindValue(":para2", $paraTwo);
    //         $sql->bindValue(":title3", $titleThree);
    //         $sql->bindValue(":para3", $paraThree);
    //         $sql->bindValue(":image3", "adminslider/" . $file3['name']);
    //         $sql->execute();
    //         header("Location: ../View/dashboard_managePage_Slider.php");
    //     } else {
    //         $finalquery = $query . $newquery1 . $queryend;
    //         $sql = $pdo->prepare(
    //             $finalquery
    //         );
    //         $sql->bindValue(":title1", $titleOne);
    //         $sql->bindValue(":para1", $paraOne);
    //         $sql->bindValue(":title2", $titleTwo);
    //         $sql->bindValue(":para2", $paraTwo);
    //         $sql->bindValue(":title3", $titleThree);
    //         $sql->bindValue(":para3", $paraThree);
    //         $sql->execute();
    //         header("Location: ../View/dashboard_managePage_Slider.php");
    //     }
    // }