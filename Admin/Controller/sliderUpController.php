<?php
ini_set("display_errors", "1");

// session_start();
include "../Model/dbConnection.php"; 

if(isset($_POST["saveChange"])){
    print_r($_POST); 

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

    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != []){
        $error = false;
        for ($i = 0; $i < count($file); $i++) {
            $location = $file[$i]['tmp_name'];
            echo "<pre>";
            print_r($location);
            if (!move_uploaded_file($location, 
            "../../Storages/adminslider/" . $file[$i]['name'])) {
                $error = true;
            }
        }
    }

    $sql = $pdo->prepare(
        "
            UPDATE m_slideradmin SET
            titleOne=:title1,
            paraOne=:para1,
            imgOne=:image1,
            titleTwo=:title2,
            paraTwo=:para2,
            imgTwo=:image2,
            titleThree=:title3,
            paraThree=:para3,
            imgThree=:image3
            WHERE id=1
        "
    );
    $sql->bindValue(":title1", $titleOne );
    $sql->bindValue(":para1", $paraOne);
    $sql->bindValue(":image1","adminslider/" . $file1['name']);
    $sql->bindValue(":title2", $titleTwo );
    $sql->bindValue(":para2", $paraTwo);
    $sql->bindValue(":image2","adminslider/" . $file2['name']);
    $sql->bindValue(":title3", $titleThree );
    $sql->bindValue(":para3", $paraThree);
    $sql->bindValue(":image3","adminslider/" . $file3['name']);
    $sql->execute();
    echo $file1;
    header("Location: ../View/dashboard_managePage_Slider.php");
}

?>