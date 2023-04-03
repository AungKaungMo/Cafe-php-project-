<?php
include "../Model/dbConnection.php";
$db=new DBConnection();
$pdo=$db->connect();
$sql=$pdo->prepare(
    "
    SELECT * FROM m_cusreview WHERE del_flg=0
    "
);
$sql->execute();
$resultreview=$sql->fetchAll(PDO::FETCH_ASSOC);
