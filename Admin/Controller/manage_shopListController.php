
<?php
ini_set("display_errors", "1");
// session_start();

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart < 0) ? 0 : $pageStart;

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

//all data count
$sql = $pdo->prepare(
    "
SELECT* FROM m_shop 
    WHERE del_flg = 0
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


//add shop
$sql = $pdo->prepare(

    "
    SELECT* FROM m_shop 
    WHERE del_flg = 0 
    LIMIT $pageStart, $rowLimit"

);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$shop = $result;
$pageList = ceil(count($totalRecord) / $rowLimit);

?>