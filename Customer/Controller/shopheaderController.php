<?php
include "../Model/dbConnection.php";
$db=new DBConnection();
$pdo=$db->connect();
$sql=$pdo->prepare(
    "
    SELECT * FROM  m_shopheader WHERE id=1
    "
);
$sql->execute();
$SHresult=$sql->fetchAll(PDO::FETCH_ASSOC);
