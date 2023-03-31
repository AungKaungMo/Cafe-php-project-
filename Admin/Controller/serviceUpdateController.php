<?php
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $text3 = $_POST["text3"];
    $text4 = $_POST["text4"];
    $text5 = $_POST["text5"];
    $text6 = $_POST["text6"];
    $icon1 = $_POST["icon1"];
    $icon2 = $_POST["icon2"];
    $icon3 = $_POST["icon3"];
    $icon4 = $_POST["icon4"];
    $icon5 = $_POST["icon5"];
    $icon6 = $_POST["icon6"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        UPDATE m_services SET
        text_box1=:t1,text_box2=:t2,text_box3=:t3,text_box4=:t4,text_box5=:t5,text_box6=:t6,
        icon1=:i1, icon2=:i2, icon3=:i3, icon4=:i4, icon5=:i5, icon6=:i6
        WHERE id=1
        "
    );
    $sql->bindValue(":t1", $text1);
    $sql->bindValue(":t2", $text2);
    $sql->bindValue(":t3", $text3);
    $sql->bindValue(":t4", $text4);
    $sql->bindValue(":t5", $text5);
    $sql->bindValue(":t6", $text6);
    $sql->bindValue(":i1", $icon1);
    $sql->bindValue(":i2", $icon2);
    $sql->bindValue(":i3", $icon3);
    $sql->bindValue(":i4", $icon4);
    $sql->bindValue(":i5", $icon5);
    $sql->bindValue(":i6", $icon6);
    $sql->execute();
    header("Location: ../View/dashboard_managePage_Services.php");
}
