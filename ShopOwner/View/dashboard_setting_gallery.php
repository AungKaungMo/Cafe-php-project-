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
                <h1 class="fs-4">Slider1</h1>
                <div>

                    <div class="box">
                        <label for="s1img1">Image1</label>
                        <input type="file" id="s1img1" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img2">Image2</label>
                        <input type="file" id="s1img2" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img3">Image3</label>
                        <input type="file" id="s1img3" accept="image/png, image/jpeg">
                    </div>

                </div>
            </div>

            <div class="my-3">
                <h1 class="fs-4">Slider2</h1>
                <div>

                    <div class="box">
                        <label for="s1img1">Image1</label>
                        <input type="file" id="s1img1" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img2">Image2</label>
                        <input type="file" id="s1img2" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img3">Image3</label>
                        <input type="file" id="s1img3" accept="image/png, image/jpeg">
                    </div>

                </div>
            </div>

            <div class="my-3">
                <h1 class="fs-4">Slider3</h1>
                <div>

                    <div class="box">
                        <label for="s1img1">Image1</label>
                        <input type="file" id="s1img1" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img2">Image2</label>
                        <input type="file" id="s1img2" accept="image/png, image/jpeg">
                    </div>
                    <div class="box">
                        <label for="s1img3">Image3</label>
                        <input type="file" id="s1img3" accept="image/png, image/jpeg">
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


</body>

</html>