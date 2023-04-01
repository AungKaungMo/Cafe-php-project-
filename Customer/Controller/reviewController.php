<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
};
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $userid = $_SESSION["userid"];
    $username = $_SESSION["username"];
    $comment = $_POST["com"];
    $rate1 = $_POST["rate1"];
    $rate2 = $_POST["rate2"];
    $rate3 = $_POST["rate3"];
    $rate4 = $_POST["rate4"];
    $rate5 = $_POST["rate5"];

    //     $db = new DBConnection();
    //     $pdo = $db->connect();
    //     $sql = $pdo->prepare(
    //         "
    //         INSERT INTO m_cusreview 
    //         (
    //             user_id,user_name,comment,rating
    //         )
    //         VALUES
    //         (
    //             :id,:name,:com,:rate
    //         );
    //         "
    //     );

    //     $sql->bindValue(":id", $userid);
    //     $sql->bindValue(":name", $username);
    //     $sql->bindValue(":com", $comment);
    //     $sql->bindValue(":rate", $rate);
    //     $sql->execute();
}
