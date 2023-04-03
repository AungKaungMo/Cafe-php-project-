<?php
include "../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $delect = $_GET["id"];
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        UPDATE m_cusreview SET del_flg=1 WHERE id=:id
        "
    );
    $sql->bindValue(":id", $delect);
    $sql->execute();
    header("Location: dashboard_ManageReviews.php");
}
