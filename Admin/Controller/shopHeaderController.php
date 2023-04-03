<?php
ini_set("display_errors", "1");
if (isset($_POST["submit"])) {
    $file = $_FILES["headerImage"]["name"];
    $headerTitle = $_POST["headerTitle"];
    $headerText = $_POST["headerText"];

    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_shopHeader WHERE 1
        "
    );

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        if ($file != "") {
            $location = $_FILES["headerImage"]["tmp_name"];
            $extension = pathinfo($file)["extension"];
            if (move_uploaded_file($location, "../../Storages/shopheader/" . "headerImage." . $extension)) {
                $sql = $pdo->prepare(
                    "
                    INSERT INTO m_shopHeader
                    (
                        header_image,
                        header_title,
                        header_text
                    )
                    VALUES
                    (
                        :headerImage,
                        :headerTitle,
                        :headerText
                    )
                    "
                );
                $sql->bindValue(":headerImage", "shopheader/headerImage." . $extension);
                $sql->bindValue(":headerTitle", $headerTitle);
                $sql->bindValue(":headerText", $headerText);
                $sql->execute();
                header("Location: ../View/dashboard_managePage_shopHeader.php");
            }
        } else {
            $sql = $pdo->prepare(
                "
                INSERT INTO m_shopHeader
                (
                    header_title,
                    header_text
                )
                VALUES
                (
                    :headerTitle,
                    :headerText
                )
                "
            );
            $sql->bindValue(":headerTitle", $headerTitle);
            $sql->bindValue(":headerText", $headerText);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_shopHeader.php");
        }
    } else {
        if ($file != "") {
            $location = $_FILES["headerImage"]["tmp_name"];
            $extension = pathinfo($file)["extension"];
            if (move_uploaded_file($location, "../../Storages/shopheader/headerImage." . $extension)) {
                $sql = $pdo->prepare(
                    "
                        UPDATE m_shopHeader
                        SET 
                        header_image = :headerImage,
                        header_title = :headerTitle,
                        header_text = :headerText
                        WHERE del_flg = 0
                    "
                );
                
                $sql->bindValue(":headerImage", "shopheader/headerImage." . $extension);
                echo "$headerText";
                $sql->bindValue(":headerText", $headerText);
                echo "1234";
                $sql->execute();
                header("Location: ../View/dashboard_managePage_shopHeader.php");
            }
        } else {
            $sql = $pdo->prepare(
                "
                    UPDATE m_shopHeader
                    SET 
                    header_title = :headerTitle,
                    header_text = :headerText
                    WHERE del_flg = 0
                "
            );
            $sql->bindValue(":headerText", $headerText);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_shopHeader.php");
        }
    }
}
