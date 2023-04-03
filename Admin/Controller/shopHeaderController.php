<?php

session_start();
if (isset($_POST["update"])) {
    //     echo "<pre>";
    //     print_r($_FILES["profile"]);
    // }
    include "../Model/dbconnection.php";
    $headerTitle = $_POST['headerTitle'];
    $headerText = $_POST['headerText'];  


    $file = $_FILES['headerImage']['name'];

    if ($file != "") {

        $location = $_FILES['headerImage']['tmp_name'];
        $extension = pathinfo($file)['extension'];
if (move_uploaded_file($location, "../stroages/shopheader/" . $file . "." . $extension)) {
            //echo 'File is successfully uploaded.';

            $sql = $pdo->prepare(
                "
            UPDATE m_shopHeader SET 
            header_title = :headerTitle,
            header_text = :headerText
            WHERE id = :id
            "
            );
            $sql->bindValue(":profile", "../stroages/shopheader/" . $file . "." . $extension);
        }
    } else {
        //echo 'There was some error moving the file to upload directory.';
        $sql = $pdo->prepare(
            "
            UPDATE m_shopHeader SET 
            header_title = :headerTitle,
            header_text = :headerText
            WHERE id = :id
            "
        );
    }
    $sql->bindValue(":headerTitle", $headerTitle);
    $sql->bindValue(":headerText", $headerText);
    $sql->execute();
    header("Location: ./View/dashbaord_managePage_shopHeader.php");
} else {
    echo "NOT";
}