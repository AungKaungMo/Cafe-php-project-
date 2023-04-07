<?php


include "../Model/dbConnection.php";

if (isset($_POST["save"])) {
    $paragraph = $_POST["paragraph"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $file = $_FILES['profile']['name'];

    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != "") {
        $location = $_FILES['profile']['tmp_name'];
        // $extension = pathinfo($file)['extension'];
        if (move_uploaded_file($location, "../../Storages/contactus/" . $file)) {
            $sql = $pdo->prepare(
                "
        UPDATE m_contactus SET
        paragraph=:paragraph,
        address=:address,
        phone=:phone,
        picture=:profile,
        email=:email
        WHERE id=1
        "
            );

            $sql->bindValue(":paragraph", $paragraph);
            $sql->bindValue(":address", $address);
            $sql->bindValue(":phone", $phone);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":profile", "contactus/" . $file);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_ContactUs.php");
        }
    }
} else {
    echo "error";
}
