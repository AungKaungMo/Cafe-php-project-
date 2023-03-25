<?php
include "../Model/dbConnection.php";

session_start();
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $userpassword = $_POST["password"];

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_admin WHERE admin_email = :email AND del_flg=0;
        "
    );

    $sql->bindValue(":email", $email);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    if (count($result) == 0) {
        //fail login
        $_SESSION["error"] = "UserEmail OR Password not match!!";
        header("Location: ../View/adminlogin.php");
    } else {
        $dbpasssword = $result[0]["cus_password"];
        if ($userpassword == $dbpasssword) {
            $_SESSION["error"] = "";
            header("Location: ../View/dashboard_manageList_ShopList.php");
        } else {
            // $_SESSION["error"] = "UserEmail OR Password not match!!";
            // header("Location: ../View/login.php");
            echo "error";
        }
    }
}
