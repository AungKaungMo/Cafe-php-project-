<?php
ini_set("display_errors", "1");

include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_gallery.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    include  "../Controller/galleryDfController.php";
    ?>

    <form action="../Controller/galleryController.php" method="post" enctype="multipart/form-data">

        <div class="d-flex justify-content-center flex-column align-items-center">
            <h1 class="fs-2">Gallery</h1>
            <div class="my-3">
                <h1 class="fs-4">Slider</h1>
                <div>
                    <div class="text-center  mb-3">
                        <?php
                        if ($mode == 1) {  ?>
                            <img src="./resources/img/default.png" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg" />
                        <?php  } else {  ?>
                            <img src="../../Storages/<?= $imglist[0]["shopgallery_1"]  ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg" />
                        <?php }
                        ?>
                    </div>
                    <div class="box">
                        <label for="s1img1"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                        <input type="file" id="s1img1" accept="image/png, image/jpeg" name="img1" required hidden>
                    </div>
                    <div class="text-center  mb-3">
                        <?php
                        if ($mode == 1) {  ?>
                            <img src="./resources/img/default.png" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg1" />
                        <?php  } else {  ?>
                            <img src="../../Storages/<?= $imglist[0]["shopgallery_2"]  ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg1" />
                        <?php }
                        ?>
                    </div>
                    <div class="box">
                        <label for="s1img2"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                        <input type="file" id="s1img2" accept="image/png, image/jpeg" name="img2" required hidden>
                    </div>
                    <div class="text-center  mb-3">
                        <?php
                        if ($mode == 1) {  ?>
                            <img src="./resources/img/default.png" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg2" />
                        <?php  } else {  ?>
                            <img src="../../Storages/<?= $imglist[0]["shopgallery_3"]  ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg2" />
                        <?php }
                        ?>
                    </div>
                    <div class="box">
                        <label for="s1img3"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                        <input type="file" id="s1img3" accept="image/png, image/jpeg" name="img3" required hidden>
                    </div>
                    <div class="text-center  mb-3">
                        <?php
                        if ($mode == 1) {  ?>
                            <img src="./resources/img/default.png" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg3" />
                        <?php  } else {  ?>
                            <img src="../../Storages/<?= $imglist[0]["shopgallery_4"]  ?>" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg3" />
                        <?php }
                        ?>
                    </div>
                    <div class="box">
                        <label for="s1img4"><iconify-icon icon="material-symbols:cloud-upload" class="fs-2 uicon"></iconify-icon></label>
                        <input type="file" id="s1img4" accept="image/png, image/jpeg" name="img4" required hidden>
                    </div>
                </div>
            </div>
        </div>
        <div class="saveBtn">
            <input type="hidden" name="select" id="" value="<?= $mode ?>">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
    <script>
        s1img1.addEventListener("change", function() {
            document.getElementById("profileimg").src = window.URL.createObjectURL(event.target.files[0]);
        })

        s1img2.addEventListener("change", function() {
            document.getElementById("profileimg1").src = window.URL.createObjectURL(event.target.files[0]);
        })

        s1img3.addEventListener("change", function() {
            document.getElementById("profileimg2").src = window.URL.createObjectURL(event.target.files[0]);
        })

        s1img4.addEventListener("change", function() {
            document.getElementById("profileimg3").src = window.URL.createObjectURL(event.target.files[0]);
        })
    </script>

</body>

</html>