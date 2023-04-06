<?php
//include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    SELECT * FROM  m_cusreview AS rev INNER JOIN
    
    m_customer AS cus ON rev.user_id = cus.cus_id
    
    WHERE rev.del_flg=0  ORDER BY rev.rating = 3  DESC LIMIT 3
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
