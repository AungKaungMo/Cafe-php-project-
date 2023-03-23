<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fill Informations</title>

  <!-------------------------    GOOGLE FONTS   ------------------------------>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

  <!------------------------  BOOTSTRAP  --------------------------------------------->
  <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
  <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-----------------------    Jquery   ---------------------------->
  <script src="./lib/Jquery/jquery3.6.0.js"></script>

  <!------------------------   JS    ------------------------------>
  <script src="./resources/js/shopFillInformation.js"></script>

  <!-------------------------   Iconify   --------------------->
  <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>


  <!-------------------------   CSS   ---------------------------------->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/shopFillInformation.css">

</head>

<body>
  <div>

    <div class="mt-4 mx-sm-5 mx-2 fs-1 backIcon">
      <a href="./buyShop.php"><iconify-icon icon="material-symbols:arrow-back-rounded" class="backIcon"></iconify-icon></a>
    </div>
    <div class="navLine"></div>
  </div>
  <!-- action="../Controller/buyShopFillInformationController.php"  -->
  <form method="post" action="../Controller/buyShopFillInformationController.php">

    <div class="mx-sm-5 mx-2">
      <div class="mt-5 fw-bold fs-4">Please fill the following informations.</div>
      <div class="mt-5 row informations">
        <div class="col-md-6 col-12">
          <div>
            <label for="package">
              Package Type
            </label><br><br>
            <select id="package" name="packageType">
              <option value="1">Basic</option>
              <option value="2">Standard</option>
              <option value="3">Premium</option>
            </select>
          </div>

          <div>
            <input type="email" placeholder="Email" class="inputFill" name="email" required>
          </div>

          <div>
            <input type="password" placeholder="Password" class="inputFill" name="password" id="psw" required>
          </div>

          <div>
            <input type="password" placeholder="Confirm Password" class="inputFill" name="confirmPassword" id="confirmPsw" required>
          </div>

        </div>

        <div class="col-md-6 col-12">
          <div class="fw-bold fs-4 mt-md-0 mt-5">Billing Info</div>
          <div>
            <input type="text" placeholder="Shop's Name" class="inputFill" name="shopName" required>
          </div>

          <div>
            <input type="phone" placeholder="Phone Number" class="inputFill" name="phoneNumber" required>
          </div>

          <div>
            <input type="text" placeholder="Address" class="inputFill" name="address" required>
          </div>

          <div>
            <label for="township" class="township">
              Township
            </label><br><br>
            <select aria-label="Default select example" id="township" name="township">
              <option selected value="1">Ahlon</option>
              <option value="2">Bahan</option>
              <option value="3">Dagon</option>
              <option value="4">Hlaing</option>
              <option value="5">Kamayut</option>
              <option value="6">Kyauktada</option>
              <option value="7">Kyimyindaing</option>
              <option value="8">Lanmadaw</option>
              <option value="9">Latha</option>
              <option value="10">Mayangon</option>
              <option value="11">Pabedan</option>
              <option value="12">Sanchaung</option>
              <option value="13">Botataung</option>
              <option value="14">Dagon Seikkan</option>
              <option value="15">Dawbon</option>
              <option value="16">Mingala Taungnyunt</option>
              <option value="17">East(New Dagon)</option>
              <option value="18">West(New Dagon)</option>
              <option value="19">North(New Dagon)</option>
              <option value="20">South(New Dagon)</option>
              <option value="21">North Okkalapa</option>
              <option value="22">South Okkalapa</option>
              <option value="23">Pazundaung</option>
              <option value="24">Tamwe</option>
              <option value="25">Thaketa</option>
              <option value="26">Thingangyun</option>
              <option value="27">Yankin</option>
              <option value="28">Insein</option>
              <option value="29">Hlaingthaya</option>
              <option value="30">Mingaladon</option>
              <option value="31">Yankin</option>
              <option value="32">Insein</option>
            </select>
          </div>

          <div>
            <label for="payment" class="payment">
              Payment Type
            </label><br><br>
            <select id="payment" name="payment">
              <option value="1">KBZ</option>
              <option value="2">Wave</option>
            </select>
          </div>

        </div>
        <div class="text-center submitBtn my-5">
          <a href="./wavepay1.php" target="_blank">
            <button class="fw-bold px-2 py-3" name="submit" id="submit">Submit</button></a>
        </div>

      </div>
    </div>
  </form>


</body>

</html>