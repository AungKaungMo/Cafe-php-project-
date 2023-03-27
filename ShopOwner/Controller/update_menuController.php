<?php

if (isset($_POST["update"])) {
  
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $upfile = $_FILES["upimage"];
    $upName = $_POST["uname"];
    $upInstock = $_POST["uinstock"];
    $upPrice = $_POST["uprice"];
    $upDis = $_POST["udis"];
    $upType = $_POST["ptype"];
    $upId = $_POST["pid"];
    // echo "<pre>";
    // print_r($upfile);
    // if($upfile != ""){
        // $location = $_FILES["pphoto"]["tmp_name"];
        // echo "file exist";
    // }else{
        // echo "file not found";
    // }
    
        $sql = $pdo->prepare(
            "
                UPDATE m_product SET
                product_name = :pname,
                product_price = :pprice,
                product_instock = :pinstock,
                product_discount = :pdis,
                product_type = :ptype
                WHERE product_id = :pid
            "
        );
        $sql->bindValue(":pname",$upName);
        $sql->bindValue(":pprice",$upPrice);
        $sql->bindValue(":pinstock",$upInstock);
        $sql->bindValue(":pdis",$upDis);
        $sql->bindValue(":ptype",$upType);
        $sql->bindValue(":pid",$upId);
        $sql->execute();

        header("location: ../View/dashboard_setting_menu_two.php");
}
?>