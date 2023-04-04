<?php
ini_set("display_errors", "1");


include "../Model/dbconnection.php";

if (isset($_POST["submit"]))
{
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

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        UPDATE m_blog SET
        main_title = :mainTitle,
        first_title = :firstTitle,
        sec_title = :secTitle,
        third_title = :thirdTitle,
        first_para = :firstPara,
        sec_para = :secPara,
        third_para = :thirdPara,
        blog_image = :bImage,
        author_name = :auName,
        author_image = :aImage,
        fb_lilnk = :fbLink,
        ig_link = :igLink,
        twt_link - :twtLink
        WHERE id=1
        "
    );
    $sql->bindValue(":mainTitle", $mainTitle);
    $sql->bindValue(":firstTitle", $firstTitle);
    $sql->bindValue(":secTitle", $secTitle );
    $sql->bindValue(":thirdTitle", $thirdTitle );
    $sql->bindValue(":firstPara", $firstPara);
    $sql->bindValue(":secPara", $secPara);
    $sql->bindValue(":thirdPara", $thirdPara);
    $sql->bindValue(":bImage", $file1);
    $sql->bindValue(":auNmae", $authorName);
    $sql->bindValue(":aImage", $file2);
    $sql->bindValue(":fbLink", $fbLink);
    $sql->bindValue(":igLink", $igLink);
    $sql->bindValue(":twtLink", $twtLink);

    $sql->execute();
    header("Location: ../View/dashboard_setting_blog.php");
}
else{
    echo "error";
} 