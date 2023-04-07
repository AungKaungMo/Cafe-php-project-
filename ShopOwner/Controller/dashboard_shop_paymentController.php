<?php
// session_start();
// include "../Model/dbConnection.php";
// $db = new DBConnection();
// $pdo = $db->connect();

// $sql = $pdo->prepare(
//     "
//             UPDATE m_shop SET
//             package_type = :ptype,
//             payment_type = :payType,
//             package_expiredate = :pexp
//             WHERE shop_id = :shopId AND del_flg =0
//         "
// );
// $sql->bindValue(":ptype", $_SESSION["shopPayment"]);
// $sql->bindValue(":payType", $_SESSION["shopPackage"]);
// $sql->bindValue(":pexp", );
// $sql->bindValue(":shopId", $_SESSION["shopId"]);