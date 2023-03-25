<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_gallery.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>

    <form action="../Controller/galleryController.php" method="post" enctype="multipart/form-data">

        <div class="d-flex justify-content-center flex-column align-items-center">
            <h1 class="fs-2">Gallery</h1>
            <div class="my-3">
                <h1 class="fs-4">Slider</h1>
                <div>
                    <div class="text-center  mb-3">
                        <img src="./resources/img/cake.jpg" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg" />
                    </div>
                    <div class="box">
                        <label for="s1img1">Image1</label>
                        <input type="file" id="s1img1" accept="image/png, image/jpeg" name="img1" required>
                    </div>
                    <div class="text-center  mb-3">
                        <img src="./resources/img/cake.jpg" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg1" />
                    </div>
                    <div class="box">
                        <label for="s1img2">Image2</label>
                        <input type="file" id="s1img2" accept="image/png, image/jpeg" name="img2" required>
                    </div>
                    <div class="text-center  mb-3">
                        <img src="./resources/img/cake.jpg" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg2" />
                    </div>
                    <div class="box">
                        <label for="s1img3">Image3</label>
                        <input type="file" id="s1img3" accept="image/png, image/jpeg" name="img3" required>
                    </div>
                    <div class="text-center  mb-3">
                        <img src="./resources/img/cake.jpg" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" width="200px" id="profileimg3" />
                    </div>
                    <div class="box">
                        <label for="s1img3">Image4</label>
                        <input type="file" id="s1img4" accept="image/png, image/jpeg" name="img4" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="saveBtn ">
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