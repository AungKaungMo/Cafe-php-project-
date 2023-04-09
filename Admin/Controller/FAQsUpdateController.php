<?php
ini_set("display_errors", "1");


include "../Model/dbConnection.php";

if (isset($_POST["saveChange"])) {
    $questionOne = $_POST["questionOne"];
    $answerOne = $_POST["answerOne"];
    $questionTwo = $_POST["questionTwo"];
    $answerTwo = $_POST["answerTwo"];
    $questionThree = $_POST["questionThree"];
    $answerThree = $_POST["answerThree"];
    $questionFour = $_POST["questionFour"];
    $answerFour = $_POST["answerFour"];
    $questionFive = $_POST["questionFive"];
    $answerFive = $_POST["answerFive"];

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(

        "
        UPDATE m_faqs SET
        questionOne=:questionOne,
        answerOne=:answerOne,
        questionTwo=:questionTwo,
        answerTwo=:answerTwo,
        questionThree=:questionThree,
        answerThree=:answerThree,
        questionFour=:questionFour,
        answerFour=:answerFour,
        questionFive=:questionFive,
        answerFive=:answerFive
        WHERE id=2
        ;      
        "
    );

    $sql->bindValue(":questionOne", $questionOne);
    $sql->bindValue(":answerOne", $answerOne);
    $sql->bindValue(":questionTwo", $questionTwo);
    $sql->bindValue(":answerTwo", $answerTwo);
    $sql->bindValue(":questionThree", $questionThree);
    $sql->bindValue(":answerThree", $answerThree);
    $sql->bindValue(":questionFour", $questionFour);
    $sql->bindValue(":answerFour", $answerFour);
    $sql->bindValue(":questionFive", $questionFive);
    $sql->bindValue(":answerFive", $answerFive);

    $sql->execute();
    header("Location: ../View/dashboard_setting_fAQs.php");
    // echo $answerFive;

} else {
    echo "ERROR";
}




// INSERT INTO m_faqs
// (
//     questionOne,
//     answerOne,
//     questionTwo,
//     answerTwo,
//     questionThree,
//     answerThree,
//     questionFour,
//     answerFour,
//     questionFive,
//     answerFive
// )
// VALUES
// (
//     :questionOne,
//     :answerOne,
//     :questionTwo,
//     :answerTwo,
//     :questionThree,
//     :answerThree,
//     :questionFour,
//     :answerFour,
//     :questionFive, 
//     :answerFive