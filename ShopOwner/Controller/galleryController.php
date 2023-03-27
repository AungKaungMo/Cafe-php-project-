<?php
// session_start();
include "../Model/dbConnection.php";
if (isset($_POST["save"])) {
    $shopid = $_SESSION["shopid"];

    echo $shopid;
}
