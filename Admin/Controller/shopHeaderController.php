<?php
ini_set("display_errors", "1");
session_start();
if (isset($_POST["submit"])) {
    //     echo "<pre>";
    //     print_r($_FILES["profile"]);
    // }
    include "../Model/dbconnection.php";
    $headerTitle = $_POST['headerTitle'];
    $headerText = $_POST['headerText'];  
    $file = $_FILES['headerImage']['name'];
    $db = new DBConnection();
    $pdo = $db->connect();

    if ($file != "") {

        $location = $_FILES['headerImage']['tmp_name'];

if (move_uploaded_file($location, "../../Storages/shopheader/" . $file )) {
            //echo 'File is successfully uploaded.';

            $sql = $pdo->prepare(
                "
            UPDATE m_shopHeader SET 
            header_title = :headerTitle,
            header_text = :headerText,
            header_image = :headerImage
            WHERE id = 1
            "
            );
            $sql->bindValue(":headerImage", "../../Storages/" . $file );
        }
    } else {
//echo 'There was some error moving the file to upload directory.';
        $sql = $pdo->prepare(
            "
            UPDATE m_shopHeader SET 
            header_title = :headerTitle,
            header_text = :headerText
            WHERE id = 1
            "
        );
    }
    $sql->bindValue(":headerTitle", $headerTitle);
    $sql->bindValue(":headerText", $headerText);
    $sql->execute();
    header("Location: ../View/dashboard_managePage_shopHeader.php");
} else {
    echo "NOT";
}