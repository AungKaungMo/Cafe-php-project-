<?php 
ini_set("display_errors", "1");

include "../Model/dbConnection.php";

if(isset($_POST["booking"])){
    $bookDate = $_POST["bookdate"]; 
    $bookTime = $_POST["booktime"]; 
    $bookPlace = $_POST["bookplace"];    
    $totalPax = $_POST["totalpax"];  
    $bookName = $_POST["bookname"]; 
    $bookEmail = $_POST["bookemail"]; 
    $bookPhone = $_POST["bookphone"]; 
    $bookNote = $_POST["booknote"]; 
    
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO m_booking
        (
            booking_date,
            booking_time,
            booking_place,
            total_person,
            booking_name,
            booking_email,
            booking_phone,
            booking_note
        )
        VALUES
        (
            :bookDate,
            :bookTime,
            :bookPlace,
            :totalPax,
            :bookName,
            :bookEmail,
            :bookPhone,
            :bookNote
        )
        "
    );

    $sql->bindValue(":bookDate",$bookDate);
    $sql->bindValue(":bookTime",$bookTime);
    $sql->bindValue(":bookPlace",$bookPlace );
    $sql->bindValue(":totalPax",$totalPax);
    $sql->bindValue(":bookName",$bookName);
    $sql->bindValue(":bookEmail",$bookEmail);
    $sql->bindValue(":bookPhone",$bookPhone );
    $sql->bindValue(":bookNote",$bookNote);

    $sql->execute();
 header("Location: ../View/booking.php");
}
else {
    echo "ERROR";
}

?>

     