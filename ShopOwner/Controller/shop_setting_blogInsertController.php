<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbconnection.php";

if (isset($_POST["submit"])) {
    $shopid = $_SESSION["shopId"];
    $mainTitle = $_POST["mTitle"];
    $firstTitle = $_POST["fTitle"];
    $secTitle = $_POST["sTitle"];
    $thirdTitle = $_POST["tTitle"];
    $firstPara = $_POST["fPara"];
    $secPara = $_POST["sPara"];
    $thirdPara = $_POST["tPara"];
    $file1 = $_FILES['bImage'];
    $authorName = $_POST["auName"];
    $file2 = $_FILES['aImage'];
    $fbLink = $_POST["fbLink"];
    $igLink = $_POST["igLink"];
    $twtLink = $_POST["twtLink"];
    $file = [$file1, $file2];

    echo $shopid;
    $db = new DBConnection();
    $pdo = $db->connect();

    $newquery = "INSERT INTO m_blog ( shop_id,";
    $newquery1 = "blog_image,main_title,first_title,sec_title,third_title,first_para,sec_para,third_para,author_name,author_image,fb_link,ig_link,twt_link";
    $queryvalue1 = "VALUES";
    $queryvalue2 =":id,:img1,:text1,:text2,:text3,:text4,:text5,:text6,:text7,:text8,:name,:img2,:link1,:link2,:link3";
    for ($i = 0; $i < count($file); $i++) {
        $location = $file[$i]['tmp_name'];
        if (move_uploaded_file($location, "../../Storages/blog/" . $file[$i]['name'])) {
            $error = true;
        }
    }

        $finalquery = $newquery . $newquery1 . ")" . $queryvalue1 . "(" . $queryvalue2 . ")";
            $sql = $pdo->prepare(
            $finalquery
        );
        $sql->bindValue(":img1", "blog/" . $file1['name']);
        $sql->bindValue(":img2", "blog/" . $file2['name']);
        $sql->bindValue(":text1", $mainTitle );
        $sql->bindValue(":text2", $firstTitle );
        $sql->bindValue(":text3", $secTitle );
        $sql->bindValue(":text4", $thirdTitle);
        $sql->bindValue(":text5", $firstPara);
        $sql->bindValue(":text6", $secPara);
        $sql->bindValue(":text7", $thirdPara);
        $sql->bindValue(":text8", $authorName);
        $sql->bindValue(":link1", $fbLink);
        $sql->bindValue(":link2", $igLink);
        $sql->bindValue(":link3", $twtLink);
        $sql->bindValue(":id", $shopid);
        $sql->execute();
        header("Location: ../View/dashboard_setting_blog.php");
    }