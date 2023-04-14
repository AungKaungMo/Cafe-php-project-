<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";

session_start();
if (isset($_POST["confirm"])) {
    $db = new DBConnection();
    $pdo = $db->connect();
    $email = $_SESSION["email"];
    $otpcode = $_SESSION["wave_otp"];
    $enterotp = $_POST["pwd"];
    $sql = $pdo->prepare(
        "
            SELECT wave_otp FROM  m_shop WHERE shop_id=:id AND del_flg=0;
            "
    );

    $sql->bindValue(":id", $_SESSION["shopId"]);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo $result[0]["wave_otp"];
    // echo $enterotp;
    if ($result[0]["wave_otp"] == $enterotp) {
        $_SESSION["otperror"] = "";
        // echo "hell";
        header("Location: ../View/wavepay2.php");
    } else {
        $_SESSION["otperror"] = "Wrong Otp Code! Try Again..";
        echo "error";
        header("Location: ../View/wavepay1.php");
    }
}
