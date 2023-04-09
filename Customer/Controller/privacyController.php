<?php
ini_set("display_errors", "1");

include "../Model/dbConnection.php";

if (isset($_POST["saveChange"])) {
    $paragraph = $_POST["paragraph"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        SELECT* FROM m_privacy  
        WHERE id=:id;
        "
    );
    $sql->bindValue(":paragraph", $paragraph);

    $sql->execute();
    $result1 = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["saveChange"] = $result1[0]["paragraph"];
} else {
    echo "error";
}
