<?php
if (isset($_POST["savechange"])) {
    $titleOne = $_POST["title"];
    $paragraph = $_POST["paragraph"];
    $titleTwo = $_POST["secondTitle"];

    $basic = $_POST["basicPrice"];
    $basicD1 = $_POST["basicDetail1"];
    $basicD2 = $_POST["basicDetail2"];
    $basicD3 = $_POST["basicDetail3"];
    $basicD4 = $_POST["basicDetail4"];
    $basicD5 = $_POST["basicDetail5"];
    $basicD6 = $_POST["basicDetail6"];

    $standard = $_POST["standardPrice"];
    $standardD1 = $_POST["standardDetail1"];
    $standardD2 = $_POST["standardDetail2"];
    $standardD3 = $_POST["standardDetail3"];
    $standardD4 = $_POST["standardDetail4"];
    $standardD5 = $_POST["standardDetail5"];
    $standardD6 = $_POST["standardDetail6"];

    $premium = $_POST["premiumPrice"];
    $premiumD1 = $_POST["premiumDetail1"];
    $premiumD2 = $_POST["premiumDetail2"];
    $premiumD3 = $_POST["premiumDetail3"];
    $premiumD4 = $_POST["premiumDetail4"];
    $premiumD5 = $_POST["premiumDetail5"];
    $premiumD6 = $_POST["premiumDetail6"];

    $file = $_FILES["picture"];

    // print_r($file) ;
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "SELECT * FROM m_option_fill WHERE 1"
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo count($result);
    if (count($result) == 0) {

        $query1 = "(title_one,title_two,";
        $picQuery = "picture,";
        $query2 = "  paragraph,
        basic_price,
        standard_price,
        premium_price,
        basic_detail_one,
        basic_detail_two,
        basic_detail_three,
        basic_detail_four,
        basic_detail_five,
        basic_detail_six,
        standard_detail_one,
        standard_detail_two,
        standard_detail_three,
        standard_detail_four,
        standard_detail_five,
        standard_detail_six,
        premium_detail_one,
        premium_detail_two,
        premium_detail_three,
        premium_detail_four,
        premium_detail_five,
        premium_detail_six)
        VALUES(:titOne,";

        $queryPicVal = ":picture,";
        $query2Val = " :titTwo,
        :paragraph,
        :basic,
        :standard,
        :premium,
        :basicD1,
        :basicD2,
        :basicD3,
        :basicD4,
        :basicD5,
        :basicD6,
        :standardD1,
        :standardD2,
        :standardD3,
        :standardD4,
        :standardD5,
        :standardD6,
        :premiumD1,
        :premiumD2,
        :premiumD3,
        :premiumD4,
        :premiumD5,
        :premiumD6
    )";
        $finalQuery = "";

        if ($file['name'] != "") {
            $location = $file["tmp_name"];
            $extension = pathinfo($file["name"])["extension"];
            if (move_uploaded_file($location, "../../Storages/optionAndFill/optionFillImg." . $extension)) {
                $finalQuery = $query1 . $picQuery . $query2 . $queryPicVal . $query2Val;
                $sql = $pdo->prepare($finalQuery);
                $sql->bindValue(":picture", "optionAndFill/optionFillImg." . $extension);
            }
        } else {
            $finalQuery = $query1 . $query2 . $query2Val;
            $sql = $pdo->prepare($finalQuery);
        }
    } else {

        $query1 = "UPDATE m_option_fill SET title_one = :titOne,title_two = :titTwo,";
        $picQuery = "picture = :picture,";
        $query2 = "            paragraph = :paragraph,
            basic_price = :basic,
            standard_price = :standard,
            premium_price = :premium,
            basic_detail_one = :basicD1,
            basic_detail_two = :basicD2,
            basic_detail_three = :basicD3,
            basic_detail_four = :basicD4,
            basic_detail_five = :basicD5,
            basic_detail_six = :basicD6,
            standard_detail_one = :standardD1,
            standard_detail_two = :standardD2,
            standard_detail_three = :standardD3,
            standard_detail_four = :standardD4,
            standard_detail_five = :standardD5,
            standard_detail_six = :standardD6,
            premium_detail_one = :premiumD1,
            premium_detail_two = :premiumD2,
            premium_detail_three = :premiumD3,
            premium_detail_four = :premiumD4,
            premium_detail_five = :premiumD5,
            premium_detail_six = :premiumD6
            WHERE del_flg = 0";

        $finalQuery = "";
        if ($file['name'] != "") {
            $location = $file["tmp_name"];
            $extension = pathinfo($file["name"])["extension"];
            if (move_uploaded_file($location, "../../Storages/optionAndFill/optionFillImg." . $extension)) {
                $finalQuery = $query1 . $picQuery . $query2;
                $sql = $pdo->prepare($finalQuery);
                $sql->bindValue(":picture", "optionAndFill/optionFillImg." . $extension);
            }
        } else {
            $finalQuery = $query1 . $query2;
            $sql = $pdo->prepare($finalQuery);
        }
    }
    $sql->bindValue(":titOne", $titleOne);
    $sql->bindValue(":titTwo", $titleTwo);
    $sql->bindValue(":paragraph", $paragraph);
    $sql->bindValue(":basic", $basic);
    $sql->bindValue(":standard", $standard);
    $sql->bindValue(":premium", $premium);
    $sql->bindValue(":basicD1", $basicD1);
    $sql->bindValue(":basicD2", $basicD2);
    $sql->bindValue(":basicD3", $basicD3);
    $sql->bindValue(":basicD4", $basicD4);
    $sql->bindValue(":basicD5", $basicD5);
    $sql->bindValue(":basicD6", $basicD6);
    $sql->bindValue(":standardD1", $standardD1);
    $sql->bindValue(":standardD2", $standardD2);
    $sql->bindValue(":standardD3", $standardD3);
    $sql->bindValue(":standardD4", $standardD4);
    $sql->bindValue(":standardD5", $standardD5);
    $sql->bindValue(":standardD6", $standardD6);
    $sql->bindValue(":premiumD1", $premiumD1);
    $sql->bindValue(":premiumD2", $premiumD2);
    $sql->bindValue(":premiumD3", $premiumD3);
    $sql->bindValue(":premiumD4", $premiumD4);
    $sql->bindValue(":premiumD5", $premiumD5);
    $sql->bindValue(":premiumD6", $premiumD6);
    $sql->execute();
    header("Location: ../View/dashboard_setting_option&Fill.php");
}
