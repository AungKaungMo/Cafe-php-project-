<?php
session_start();
// if(isset($_POST["confirm"])) {
$cartLists = $_SESSION["cartLists"];
$cartItemsLists = $_SESSION["cartItemsLists"];
//  echo "<pre>";
//  print_r($cartLists);
//  echo "<pre>";
//  print_r($cartItemsLists);
$token = rand(0, 100000);

$cusTownship =   $_SESSION["cusTownship"];
$cusAddress = $_SESSION["cusAddress"];
$cusNote = $_SESSION["cusNote"];
$cusPhone = $_SESSION["cusPhone"];
$cusName = $_SESSION["cusName"];
$payment = $_SESSION["cusPayment"];
$deliFee = $_SESSION["cusDeliFee"];
$totalPrice = $_SESSION["cusTotalPrice"];

include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
   "
         SELECT product_instock,sold_quantity FROM m_product WHERE del_flg = 0 AND FIND_IN_SET(product_id,:pid)
      "
);
$ids = [];
for ($i = 0; $i < count($cartItemsLists); $i++) {
   array_push($ids, $cartItemsLists[$i]["product_id"]);
}
$sql->bindValue(":pid", implode(",", $ids));
$sql->execute();
$instocks = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($instocks);
$sql = $pdo->prepare(
   "
         INSERT INTO m_orderdetails
         (
            cus_name,
            cus_township,
            order_token,
            cus_id,
            cus_address,
            cus_note,
            cus_phone,
            total_price,
            delivery_fee,
            payment_id
         )
         VALUES
         (
            :cusName,
            :cusTownship,
            :orderToken,
            :cusId,
            :cusAddress,
            :cusNote,
            :cusPhone,
            :cusTotalPrice,
            :deliveryFee,
            :paymentId
         )
      "
);
$sql->bindValue(":cusName", $cusName);
$sql->bindValue(":cusTownship", $cusTownship);
$sql->bindValue(":orderToken", $token);
$sql->bindValue(":cusId", $_SESSION["userid"]);
$sql->bindValue(":cusAddress", $cusAddress);
$sql->bindValue(":cusNote", $cusNote);
$sql->bindValue(":cusPhone", $cusPhone);
$sql->bindValue(":cusTotalPrice", $totalPrice);
$sql->bindValue(":deliveryFee", $deliFee);
$sql->bindValue(":paymentId", $payment);
$sql->execute();


for ($i = 0; $i < count($cartItemsLists); $i++) {

   $sql = $pdo->prepare(
      "
            INSERT INTO m_order 
            (
               order_token,
               total_quantity,
               bought_product_name,
               bought_product_id,
               product_note,
               shop_id
            )
            VALUES
            (
               :orderToken,
               :totalQuantity,
               :boughtPName,
               :boughtPId,
               :productNote,
               :shopId
            )
         "
   );
   $sql->bindValue(":orderToken", $token);
   $sql->bindValue(":totalQuantity", $cartLists[$i]["quantity"]);
   $sql->bindValue(":boughtPName", $cartItemsLists[$i]["product_name"]);
   $sql->bindValue(":boughtPId", $cartItemsLists[$i]["product_id"]);
   $sql->bindValue(":productNote", $cartLists[$i]["orderNote"]);
   $sql->bindValue(":shopId", $cartItemsLists[$i]["shop_id"]);
   $sql->execute();

   $sql = $pdo->prepare(
      "UPDATE m_product SET
               product_instock = :pinstock,
               sold_quantity = :soldQuantity
               WHERE product_id = :pid AND del_flg = 0
            "
   );

   $sql->bindValue(":pinstock", $instocks[$i]["product_instock"] - number_format($cartLists[$i]["quantity"]));
   $sql->bindValue(":soldQuantity", $cartLists[$i]["quantity"] + $instocks[$i]["sold_quantity"]);
   $sql->bindValue(":pid", $cartItemsLists[$i]["product_id"]);
   $sql->execute();
}
   //  echo $payment;

   $_SESSION["cartLists"] = "";
   $_SESSION["cartItemsLists"] = "";
   $_SESSION["cusTownship"] = "";
   $_SESSION["cusAddress"] = "";
   $_SESSION["cusNote"] = "";
   $_SESSION["cusPhone"] = "";
   $_SESSION["cusName"] = "";
   $_SESSION["cusDeliFee"] = "";
   $_SESSION["cusTotalPrice"] = ""; 
if($payment == 2){
   $_SESSION["payment"] = ""; 
   header("Location: ../View/wavepay4.php");
}else if($payment == 3) {
   $_SESSION["payment"] = ""; 
   $_SESSION["finished"] = "finished";
   header("Location: ../View/h.php");
}
