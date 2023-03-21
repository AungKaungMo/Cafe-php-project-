<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_ContactUs.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    ?>
    <form>

        <div class="d-flex flex-column justify-content-center align-items-center"> 

            <div class="my-3 mt-5"> 

                <div class="box">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph"></textarea>
                </div>
                <div class="box">
                    <label for="address">Address</label>
                    <input type="text" id="address">
                </div>
                <div class="box">
                    <label for="phone">Ph.No</label>
                    <input type="text" id="phone">
                </div>
                <div class="box">
                    <label for="email">Email</label>
                    <input type="text" id="email">
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