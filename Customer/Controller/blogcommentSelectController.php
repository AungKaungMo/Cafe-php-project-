<?php
ini_set("display_errors", "1");
// include "../Model/dbconnection.php";

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(

    "
        SELECT * FROM m_blogcomment AS cb INNER JOIN m_customer AS 
        cu ON cb.user_id = cu.cus_id WHERE cb.del_flg=0
        ORDER BY comment_id DESC
        "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- "
SELECT * FROM m_cusreview AS rev INNER JOIN

m_customer AS cus ON rev.user_id = cus.cus_id

WHERE rev.del_flg=0 ORDER BY rev.rating = 3 DESC LIMIT 3
" -->