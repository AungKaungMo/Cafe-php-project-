<?php


include "../Model/dbConnection.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
