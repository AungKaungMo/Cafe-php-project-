<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
};
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $mode = $_POST["select"];
    $userid = $_SESSION["userid"];
    $userpf = $_SESSION["userpf"];
    $username = $_SESSION["username"];
    $comment = $_POST["com"];
    $rate = $_POST["rate"];


    $db = new DBConnection();
    $pdo = $db->connect();
    if ($mode == 1) {
        $sql = $pdo->prepare(
            "
            INSERT INTO m_cusreview 
            (
                user_id,user_name,user_pf,comment,rating
            )
            VALUES
            (
                :id,:name,:pf,:com,:rate
            );
            "
        );

        $sql->bindValue(":id", $userid);
        $sql->bindValue(":name", $username);
        $sql->bindValue(":pf", $userpf);
        $sql->bindValue(":com", $comment);
        $sql->bindValue(":rate", $rate);
        $sql->execute();
        header("Location: ../View/dashboard_review.php");
    } else if ($mode == 2) {
        $sql = $pdo->prepare(
            "
        UPDATE m_cusreview SET user_name=:name,user_pf=:pf,comment=:com,rating=:rate WHERE user_id=:id AND del_flg=0
        "
        );
        $sql->bindValue(":id", $userid);
        $sql->bindValue(":name", $username);
        $sql->bindValue(":pf", $userpf);
        $sql->bindValue(":com", $comment);
        $sql->bindValue(":rate", $rate);
        $sql->execute();
        header("Location: ../View/dashboard_review.php");
    }
}
