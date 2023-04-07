<?php
ini_set("display_errors", "1");


include "../Model/dbConnection.php";

if (isset($_POST["saveChange"])) {
    $paragraph = $_POST["paragraph"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        UPDATE m_privacy SET
        paragraph=:paragraph
        WHERE privacy_id=1
        "
    );
    $sql->bindValue(":paragraph", $paragraph);

    $sql->execute();
    header("Location: ../View/dashboard_setting_Privacy&Policy.php");
} else {
    echo "error";
}
