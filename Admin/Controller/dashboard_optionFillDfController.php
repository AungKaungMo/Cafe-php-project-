<?php
    include "../Model/dbConnection.php";
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
            SELECT * FROM m_option_fill WHERE 1
        "
    );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(count($result) == 0){
        $result = array(
            array(
            "title_one" => "",
            "title_two" => "",
            "picture" => "",
            "paragraph" => "",
            "basic_price" => "",
            "standard_price" => "",
            "premium_price" => "",
            "basic_detail_one" => "",
            "basic_detail_two" => "",
            "basic_detail_three" => "",
            "basic_detail_four" => "",
            "basic_detail_five" => "",
            "basic_detail_six" => "",
            "standard_detail_one" => "",
            "standard_detail_two" => "",
            "standard_detail_three" => "",
            "standard_detail_four" => "",
            "standard_detail_five" => "",
            "standard_detail_six" => "",
            "premium_detail_one" => "",
            "premium_detail_two" => "",
            "premium_detail_three" => "",
            "premium_detail_four" => "",
            "premium_detail_five" => "",
            "premium_detail_six" => ""
            )
        );
    }
    // echo "<pre>";
    // print_r($result);
?>