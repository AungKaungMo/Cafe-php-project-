<?php


$sql = $pdo->prepare(
    "
    SELECT shop_id FROM m_shop WHERE shop_name= :shopName AND del_flg = 0
    "
);
$sql->bindValue(":shopName", $_SESSION["shopName"]);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

       $sql = $pdo->prepare(
        "INSERT INTO m_shop_history
        (
         shop_id,
         create_details_title,
         create_details_paragraph,
         expire_details_title,
         expire_details_paragraph,
         package_expire_date
         )
         VALUES
         (
             :shopId,
             :createTitle,
             :createParagraph,
             :expireTitle,
             :expireParagraph,
             :expDate
         )
        ");
        $package = "";
        if($_SESSION["packageType"] == 0){
            $package = "basic";
        }else if ($_SESSION["packageType"] == 1){
            $package = "standard";
        }else {
            $package = "premium";
        }

        $sql->bindValue(":shopId", $result[0]["shop_id"]);
        $sql->bindValue(":createTitle", "You bought $package package.");
        $sql->bindValue(":createParagraph", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, est modi saepe illo velit obcaecati eum soluta temporibus quae doloremque?ectetur adipisicing elit. Harum, est modi saepe illo velit obcaecati eum");
        $sql->bindValue(":expireTitle", "Your package expire soon");
        $sql->bindValue(":expireParagraph", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, est modi saepe illo velit obcaecati eum soluta temporibus quae doloremque?ectetur adipisicing elit. Harum, est modi saepe illo velit obcaecati eum");
        $sql->bindValue(":expDate", date("Y-m-d", strtotime(' + 1 months')));
        $sql->execute();
     
?>