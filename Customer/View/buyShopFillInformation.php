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

  <div class="mx-sm-5 mx-2">
    <div class="mt-5 fw-bold fs-4">Please fill the following informations.</div>
    <div class="mt-5 row">
      <div class="col-md-6 col-12">
      <div>
      <label for="package">
        Package Type
      </label><br><br>
      <select id="package">
        <option value="basic">Basic</option>
        <option value="standard">Standard</option>
        <option value="premium">Premium</option>
      </select>
      </div>

      <div>
        <input type="text" placeholder="Email" class="inputFill">
      </div>

      <div>
        <input type="text" placeholder="Password" class="inputFill">
      </div>

      <div>
        <input type="text" placeholder="Confirm Password" class="inputFill">
      </div>

      </div>
     
     <div class="col-md-6 col-12">
      <div class="fw-bold fs-4 mt-md-0 mt-5">Billing Info</div>
      <div>
        <input type="text" placeholder="Name" class="inputFill">
      </div>

      <div>
        <input type="phone" placeholder="Phone Number" class="inputFill">
      </div>

      <div>
        <input type="text" placeholder="Address" class="inputFill">
      </div>

      <div>
      <label for="township" class="township">
        Township
      </label><br><br>
      <select id="township">
        <option value="north dagon">North Dagon</option>
        <option value="south dagon">South Dagon</option>
        <option value="thingangyun">Thingangyun</option>
      </select>
      </div>

     </div>
     <div class="text-center submitBtn my-5">
      <button class="fw-bold px-2 py-3">Submit</button>
     </div>
      
    </div>
  </div>
</body>

</html>