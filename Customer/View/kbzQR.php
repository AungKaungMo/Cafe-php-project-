<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KBZ QR code</title>
  <!-------css links----->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/kbzQR.css">

  <!--------bootstrap5-------->
  <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
  <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

  <!------icons link------->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body>
  <div class="box">
    <div class="card">

      <iconify-icon class="qrCode" icon="clarity:qr-code-line"></iconify-icon>

      <?php

      QRcode::png($emailAdmin, "../../Storages/qr_" . $emailAdmin . ".png");
      // QRcode::png($emailAdmin);
      ?>

    </div>

    <!-- <div class="comBtn text-center">
      <a href="<?php if ($_SESSION["order"] == 1) { ?>../Controller/orderconfirmController.php<?php } else if ($_SESSION["order"] == 0) { ?>../Controller/paymentController.php<?php } ?>">
        <button class="p-2">Comfirm</button>
    </div> -->
    <!-- <div class="card"> -->
    <!-- <iconify-icon class="qrCode" icon="clarity:qr-code-line"></iconify-icon> -->
    <!-- <?php
          include "../Controller/qrController.php";
          QRcode::png($emailAdmin[0]["admin_email"], "../View/kbzQR_" . $emailAdmin[0]["admin_id"] . ".png");
          ?> -->
    <!-- </div> -->
  </div>
</body>

</html>