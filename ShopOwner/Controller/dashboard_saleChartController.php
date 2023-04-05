<?php
// session_start();
//  $paymentDate = '2023/04/03';
//  echo $day = date('l', strtotime($paymentDate));
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
            SELECT * FROM m_order
            WHERE shop_id = :shopid
        "
);
$sql->bindValue(":shopid", $_SESSION["shopId"]);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$monthly = array(
    0, 0, 0, 0, 0, 0, 0
);

for ($i = 0; $i < count($result); $i++) {
    $month = substr($result[$i]["created_date"], 6, 1);

    for ($j = 0; $j < count($monthly); $j++) {
        if ($month == $j) {
            $monthly[$j - 1] += $result[$i]["total_quantity"];
            echo "<br>";
        }
    }
}

$sql = $pdo->prepare(
    "
            SELECT * FROM m_product
            WHERE shop_id = :shopid
        "
);
$sql->bindValue(":shopid", $_SESSION["shopId"]);
$sql->execute();
$result2 = $sql->fetchAll(PDO::FETCH_ASSOC);
$productsType = array(0, 0, 0);

for ($i = 0; $i < count($result2); $i++) {
    $quantity = $result2[$i]["sold_quantity"];
    if ($result2[$i]["product_type"] == 1) {
        $productsType[0] +=  $result2[$i]["sold_quantity"];
    } else if ($result2[$i]["product_type"] == 2) {
        $productsType[1] +=  $result2[$i]["sold_quantity"];
    } else if ($result2[$i]["product_type"] == 3) {
        $productsType[2] +=  $result2[$i]["sold_quantity"];
    }
}
// echo "<pre>";
// print_r($productsType);


$sql = $pdo->prepare(
    "
    SELECT * FROM `m_product` WHERE shop_id =:shopid ORDER BY sold_quantity DESC;
    "
);
$sql->bindValue(":shopid", $_SESSION["shopId"]);
$sql->execute();
$top_selling = $sql->fetchAll(PDO::FETCH_ASSOC);
