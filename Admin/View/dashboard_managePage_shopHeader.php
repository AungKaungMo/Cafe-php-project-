<?php
ini_set("display_errors", "1");
session_start();
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_shopHeader.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php"; 
    include "../Controller/shopheader_showController.php";
    ?>
  <form method="post" action="../Controller/shopHeaderController.php" enctype="multipart/form-data">

<div class="d-flex flex-column justify-content-center align-items-center">

    <div class="my-3">
        <div class="box">
            <div class="m-auto aboutImg">
                <img src="../../Storages/<?= $img?>" alt="" id="acceptImage">
                <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon" width="30" height="30" id="upload"></iconify-icon>

            </div>
            <input type="file" hidden id="picture" accept="image/png, image/jpeg" name="headerImage">
        </div>
        <div class="box mt-5">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="headerTitle" value="<?= $result[0]["header_title"]; ?>">
                </div>
        <div class="box mt-5">
            <label for="paragraph">Paragraph</label>
            <textarea id="paragraph" class="text-start" name="headerText" type="text" ><?= $result[0]["header_text"]; ?>
            </textarea>
        </div>

    </div>
</div>
<div class="saveBtn ">
    <button name="submit" type="submit">Save Change
        <iconify-icon icon="material-symbols:save"></iconify-icon>
    </button>
</div>
</form>

    
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
    <script>
        $("#upload").click(() => {
            $("#picture").click();
            $("#picture").change(() => {
                document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]);
            })
        })
    </script>
     

</body>

</html>