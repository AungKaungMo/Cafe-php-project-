<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_slider.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    ?>
    <form>

        <div class="d-flex flex-column justify-content-center align-items-center"> 

            <div class="my-3">
               <div class="sliderTitle">Slider 1</div>

               <div class="box">
                    <label for="title">Title</label>
                    <input type="text" id="title">
                </div>

                <div class="box">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph"></textarea>
                </div>

                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg">
                </div>

            </div>

            <div class="my-3">
               <div class="sliderTitle">Slider 2</div>

               <div class="box">
                    <label for="title">Title</label>
                    <input type="text" id="title">
                </div>

                <div class="box">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph"></textarea>
                </div>

                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg">
                </div>

            </div>

            <div class="my-3">
               <div class="sliderTitle">Slider 3</div>

               <div class="box">
                    <label for="title">Title</label>
                    <input type="text" id="title">
                </div>

                <div class="box">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph"></textarea>
                </div>

                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg">
                </div>

            </div>
        </div>
        <div class="saveBtn ">
            <button>Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>

        </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>