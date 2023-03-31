<<<<<<< HEAD
=======
<?php
//include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM m_footer WHERE id = 1
    "
);

$sql->execute();
$footer = $sql->fetchAll(PDO::FETCH_ASSOC);
>>>>>>> 276a3da1f3a715d9cf7af324354e13ccf31abac3
