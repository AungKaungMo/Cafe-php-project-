<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_AboutUs.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    include "../Controller/aboutUs_showController.php";
    ?>
    <form method="post" action="../Controller/aboutUsController.php" enctype="multipart/form-data">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">
                <div class="box">
                    <div class="m-auto aboutImg">
                        <img src="<?php if($result[0]["about_image"] == "") { echo "./resources/img/default.png"; }else { echo "../../Storages/".$result[0]["about_image"]; } ?> " id="acceptImage">
                        <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon" width="30" height="30" id="upload"></iconify-icon>

                    </div>
                    <input type="file" hidden id="picture" accept="image/png, image/jpeg" name="aboutImage">
                </div>
                <div class="box mt-5">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph" class="text-start" name="aboutText" type="text"><?= $result[0]["about_text"]; ?>
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