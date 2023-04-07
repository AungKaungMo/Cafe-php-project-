<?php
ini_set("display_errors", "1");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbConnection.php";

if (isset($_POST["submit"])) {

    $comment = $_POST["message"];
    $idu = $_SESSION["userid"];
    $pf = $_SESSION["userpf"];
    $uname = $_SESSION["username"];
    $bid = $_POST["id"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_blogcomment
        (
            user_pf,user_name,user_id,comment,blog_id
        )
        VALUES
        (
            :pf,:name,:id,:message,:bid 
        )
        "
    );

    $sql->bindValue(":pf", $pf);
    $sql->bindValue(":name", $uname);
    $sql->bindValue(":id", $idu);
    $sql->bindValue(":message", $comment);
    $sql->bindValue(":bid", $bid);


    $sql->execute();
    header("Location: ../View/selectedBlog.php");
} else {
    echo "ERROR";
}
