<?php
session_start();
include "../Model/dbConnection.php";
if (isset($_POST["searchText"])) {
  $searchItems = $_POST["searchText"];
  $db = new DBConnection();
  $pdo = $db->connect();

  $sql = $pdo->prepare(
    "
            SELECT * FROM m_product WHERE product_name LIKE :search
        "
  );


  $sql->bindValue(":search", "%" . $searchItems . "%");
  $sql->execute();
  $productSearchLists = $sql->fetchAll(PDO::FETCH_ASSOC);
  // echo json_encode($productSearchLists);
  // echo "<pre>";
  // print_r($productSearchLists);
  $a = "";
  $returnData = "";
  if (empty($_SESSION["userid"])) {
    $a = "data-bs-toggle='modal' data-bs-target='#staticBackdropCheckLogin'";
  } else {
    $a = "data-bs-toggle='modal' data-bs-target='#staticBackdrop' ";
  };
  for ($i = 0; $i < count($productSearchLists); $i++) {

    $returnData .= "
    <div class='m-auto searchProductContainer'>
        <div class='detailsBox pt-3 d-flex justify-content-between'>
              <div class='productImage ms-3'>
                      <img src='../../Storages/" . $productSearchLists[$i]['product_photo'] . "' class='img imgUnset'>
              </div>
            <div class='me-4 mb-3'>
                  <div class='d-flex justify-content-between'>
                      <p class='pname productName'>" . $productSearchLists[$i]['product_name'] . "</p>
                      <p class='price priceChange priceUnset productAmount'>" . $productSearchLists[$i]['product_price'] . " MMK</p>
                  </div>
                      <p class='cafeName opacity-75 '>Enjoy your search product items.</p>
                  <div class='d-flex justify-content-between'>
                      <button class='goShopBtn'><a href='./shopinterface.php?id=" . $productSearchLists[$i]['shop_id'] . "'>Go Shop</a></button>
                      <iconify-icon icon='ph:shopping-cart-simple-fill' data-id='" . $productSearchLists[$i]['product_id'] . "' index='" . $i . "'  " . $a . " class='buyCart buy'></iconify-icon>
                  </div>
            </div>
        </div>
    </div>
                    ";
  };
  echo $returnData;
  // print_r($productSearchLists[0]["product_name"]);
}
