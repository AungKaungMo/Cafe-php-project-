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

      <?php
      include "../Controller/qrController.php";
      QRcode::png($emailAdmin, "../../Storages/qr_" . $emailAdmin . ".png");
      // QRcode::png($emailAdmin);
      ?>
    </div>
    <!-- <div class="comBtn text-center">
      <button class="p-2"><a href="../View/h.php">Comfirm</a></button>
    </div> -->
  </div>

</body>

</html>