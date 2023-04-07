<?php
$sql = $pdo->prepare(
    "
    SELECT shop_logo FROM m_shop WHERE shop_id=:id
    "
);
$sql->bindValue(":id", $_SESSION["shopid"]);
$sql->execute();
$shoplog = $sql->fetchAll(PDO::FETCH_ASSOC)[0]["shop_logo"];
