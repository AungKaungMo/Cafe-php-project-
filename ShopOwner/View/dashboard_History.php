 <?php
    session_start();
    include "./resources/shared/dashboard.php";
    
    include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
        SELECT * FROM m_shop_history WHERE shop_id = :shopId AND del_his_flg = 0
    "
);
$sql->bindValue(":shopId", $_SESSION["shopId"]);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>
 <link rel="stylesheet" href="./resources/css/dashboard_history.css">

 </head>

 <body>

     <?php
        for ($i = 0; $i < count($result); $i++) {
        ?>

         <div class="historyBoxContainer mx-sm-5 mx-3 my-5">
             <div class="historyBox p-4">
                 <div class="d-flex justify-content-between">
                     <div>
                         <h1 class="fs-4 fw-bold"><?php echo $result[$i]["create_details_title"] ?><span class="fs-6 opacity-75"> <?php echo ' ('. substr($result[$i]["package_create_date"],0,10)  . ')' ?></span></h1>

                     </div>
                     <div class="d-flex align-items-center justify-content-center rounded-circle closeIcon">
                     <a href="../Controller/shop_history_deleteController.php?id=<?= $result[$i]["id"] ?>" class="d-flex align-items-center justify-content-center">
                         <iconify-icon icon="fa6-solid:xmark" class="fs-3 "></iconify-icon>
                     </a>
                     </div>
                 </div>
                 <div class="mt-4 historyText">
                     <?php echo $result[$i]["create_details_paragraph"] ?>
                 </div>
             </div>
         </div>
         <?php
        }
            ?>

         <!--------------  Ending Tab for dashboard  ----------------->
         </div>
         </div>

 </body>

 </html>