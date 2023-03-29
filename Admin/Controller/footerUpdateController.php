<?php


include "../Model/dbconnection.php";

if (isset($_POST["save"])) {
    $nav1 = $_POST["nav1"];
    $nav2 = $_POST["nav2"];
    $nav3 = $_POST["nav3"];
    $nav4 = $_POST["nav4"];
    $some1 = $_POST["some1"];
    $some2 = $_POST["some2"];
    $some3 = $_POST["some3"];
    $sm1 = $_POST["sm1"];
    $sm2 = $_POST["sm2"];
    $sm3 = $_POST["sm3"];
    $text = $_POST["ctext"];
    $file = $_FILES['logo']['name'];

    $db = new DBConnection();
    $pdo = $db->connect();
    if ($file != "") {
        $location = $_FILES['logo']['tmp_name'];
        // $extension = pathinfo($file)['extension'];
        if (move_uploaded_file($location, "../../Storages/footer/" . $file)) {
            $sql = $pdo->prepare(
                "
        UPDATE m_footer SET
        nav_link1=:nav1,nav_link2=:nav2,nav_link3=:nav3,nav_link4=:nav4,
        some_link1=:some1, some_link2=:some2, some_link3=:some3,
        sm_link1=:sm1, sm_link2=:sm2, sm_link3=:sm3,
        c_text=:text,
        logo=:logo
        WHERE id=1
        "
            );

            $sql->bindValue(":nav1", $nav1);
            $sql->bindValue(":nav2", $nav2);
            $sql->bindValue(":nav3", $nav3);
            $sql->bindValue(":nav4", $nav4);
            $sql->bindValue(":some1", $some1);
            $sql->bindValue(":some2", $some2);
            $sql->bindValue(":some3", $some3);
            $sql->bindValue(":sm1", $sm1);
            $sql->bindValue(":sm2", $sm2);
            $sql->bindValue(":sm3", $sm3);
            $sql->bindValue(":text", $text);
            $sql->bindValue(":logo", "footer/" . $file);
            $sql->execute();
            header("Location: ../View/dashboard_managePage_Footer.php");
        }
    }
} else {
    echo "error";
}
