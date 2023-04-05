<?php 
ini_set("display_errors", "1");

include "../Model/dbConnection.php";

if(isset($_POST["submit"])){
    $comment = $_POST["message"];   
    
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_blogcomment
        (
            comment 
        )
        VALUES
        (
            :message 
        )
        "
    );

    $sql->bindValue(":message",$comment);  

    $sql->execute();
 header("Location: ../View/selectedBlog.php");
}
else {
    echo "ERROR";
}

?>

     