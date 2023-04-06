<?php
    include "../Model/dbConnection.php";
    if(isset($_POST["searchText"])){
        $searchItems = $_POST["searchText"];
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_product WHERE product_name LIKE :search
        "
    );

    $sql->bindValue(":search", "%". $searchItems ."%");
    $sql->execute();
    $productSearchLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($productSearchLists);
}
?>