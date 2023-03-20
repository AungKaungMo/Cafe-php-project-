<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Success</title>
  <!-------css links----->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/confirmpopup.css">

  <!--------bootstrap5-------->
  <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
  <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

  <!------icons link------->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Confirm 
  </button>

  <!-- Modal -->
  <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  ">
      <div>
        <div class="modal-content text-center subPop">         
          <div class=" text-end">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div>
          <div><iconify-icon class= "circleClick"icon="mdi:question-mark-circle-outline"></iconify-icon></div>
          </div>
          <div class="modal-body text-center">
            <div class="mainPop">         
            <div class="h2 mb-3 fw-bold">Confirm Title</div>
            <div class="mb-5 thankPurchase">Confirm Message</div>     
            <button type="button" class="btn text-white Back2Home me-5">Cancel </button>
            <button type="button" class="btn text-white Back2Home ms-5">Confirm</button>
            </div>       
          </div> 
        </div>
      </div>
    </div>
  </div>

</body>

</html>