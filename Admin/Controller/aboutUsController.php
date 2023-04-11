<?php
ini_set("display_errors", "1");
if (isset($_POST["submit"])) {
    $file = $_FILES["aboutImage"]["name"];
    $aboutText = $_POST["aboutText"];

    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_aboutus WHERE 1
        "
    );

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        if ($file != "") {
            $location = $_FILES["aboutImage"]["tmp_name"];
            $extension = pathinfo($file)["extension"];
            if (move_uploaded_file($location, "../../Storages/aboutUs/" . "aboutImage." . $extension)) {
                $sql = $pdo->prepare(
                    "
                        INSERT INTO m_aboutus 
                        (
                            about_image,
                            about_text
                        )
                        VALUES
                        (
                            :aboutImage,
                            :aboutText
                        )
                        "
                );

                $sql->bindValue(":aboutImage", "aboutUs/aboutImage." . $extension);
                $sql->bindValue(":aboutText", $aboutText);
                $sql->execute();
                header("Location: ../View/dashboard_managePage_AboutUs.php");
            }
        } else {
            $sql = $pdo->prepare(
                "
                    INSERT INTO m_aboutus 
                    (
                        about_text
                    )
                    VALUES
                    (
                        :aboutText
                    )
                    "
            );
            $sql->bindValue(":aboutText", $aboutText);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_AboutUs.php");
        }
    } else {
        if ($file != "") {
            $location = $_FILES["aboutImage"]["tmp_name"];
            $extension = pathinfo($file)["extension"];
            if (move_uploaded_file($location, "../../Storages/aboutUs/aboutImage." . $extension)) {
                $sql = $pdo->prepare(
                    "
                            UPDATE m_aboutus 
                            SET 
                            about_image = :aboutImage,
                            about_text = :aboutText
                            WHERE del_flg = 0
                        "
                );

                $sql->bindValue(":aboutImage", "aboutUs/aboutImage." . $extension);
                $sql->bindValue(":aboutText", $aboutText);
                $sql->execute();
                header("Location: ../View/dashboard_managePage_Aboutus.php");
            }
        } else {

            $sql = $pdo->prepare(
                "
                        UPDATE m_aboutus 
                        SET 
                        about_text = :aboutText
                        WHERE del_flg = 0
                    "
            );
            $sql->bindValue(":aboutText", $aboutText);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_AboutUs.php");
        }
    }
}
