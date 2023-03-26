<?php


include "../Model/dbconnection.php";

if (isset($_POST["save"])) {
    $paragraph = $_POST["paragraph"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];


    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        UPDATE m_contactus SET
        paragraph=:paragraph,
        address=:address,
        phone=:phone,
        email=:email
        WHERE id=1
        "
    );

    $sql->bindValue(":paragraph", $paragraph);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":email", $email);
    $sql->execute();
    header("Location: ../View/dashboard_managePage_ContactUs.php");
} else {
    echo "error";
}
