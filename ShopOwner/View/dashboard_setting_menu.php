<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_menu.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>

    <div class="d-flex justify-content-center mt-4 subnav">
        <a href="./dashboard_setting_menu.php">
            <h1 class="fs-4 activeSubNav me-5">Home Menu</h1>
        </a>
        <a href="./dashboard_setting_menu_two.php">
            <h1 class="fs-4">Add&Change Menu</h1>
        </a>
    </div>
    <hr class="subLine">

    <form>
        <div class=" flex-column d-flex justify-content-center align-items-center">
            <div>

                <h1 class="fs-5 my-5">Special Menu</h1>
                <div class="box">
                    <label for="pi1">Product Image1</label>
                    <input type="file" id="pi1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn1">Product Name1</label>
                    <input type="text" id="pn1">
                </div>
                <div class="box">
                    <label for="price">Price</label>
                    <input type="text" id="price">
                </div>
                <div class="box">
                    <label for="instock">Instock1</label>
                    <input type="text" id="instock">
                </div>
                <div class="box">
                    <label for="pi2">Product Image2</label>
                    <input type="file" id="pi2" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn2">Product Name2</label>
                    <input type="text" id="pn2">
                </div>
                <div class="box">
                    <label for="price2">Price2</label>
                    <input type="text" id="price2">
                </div>
                <div class="box">
                    <label for="instock2">Instock2</label>
                    <input type="text" id="instock2">
                </div>
                <div class="box">
                    <label for="pi3">Product Image3</label>
                    <input type="file" id="pi3" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn3">Product Name3</label>
                    <input type="text" id="pn3">
                </div>
                <div class="box">
                    <label for="price3">Price3</label>
                    <input type="text" id="price3">
                </div>
                <div class="box">
                    <label for="instock3">Instock3</label>
                    <input type="text" id="instock3">
                </div>
                <div class="box">
                    <label for="illustration">Illustration</label>
                    <input type="file" id="illustration" accept="image/png, image/jpeg">
                </div>
            </div>


            <div class="mostPopular">
                <div class="d-flex justify-content-between chooseMenu">
                    <h1 class="fs-5 my-5 activeSubNav popular">Most Popular</h1>
                    <h1 class="fs-5 my-5 feature">Feature Menu</h1>
                </div>

                <div class="box">
                    <label for="pi1">Product Image1</label>
                    <input type="file" id="pi1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn1">Product Name1</label>
                    <input type="text" id="pn1">
                </div>
                <div class="box">
                    <label for="price">Price</label>
                    <input type="text" id="price">
                </div>
                <div class="box">
                    <label for="instock">Instock1</label>
                    <input type="text" id="instock">
                </div>
                <div class="box">
                    <label for="pi2">Product Image2</label>
                    <input type="file" id="pi2" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn2">Product Name2</label>
                    <input type="text" id="pn2">
                </div>
                <div class="box">
                    <label for="price2">Price2</label>
                    <input type="text" id="price2">
                </div>
                <div class="box">
                    <label for="instock2">Instock2</label>
                    <input type="text" id="instock2">
                </div>
                <div class="box">
                    <label for="pi3">Product Image3</label>
                    <input type="file" id="pi3" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn3">Product Name3</label>
                    <input type="text" id="pn3">
                </div>
                <div class="box">
                    <label for="price3">Price3</label>
                    <input type="text" id="price3">
                </div>
                <div class="box">
                    <label for="instock3">Instock3</label>
                    <input type="text" id="instock3">
                </div>
                <div class="box">
                    <label for="illustration">Illustration</label>
                    <input type="file" id="illustration" accept="image/png, image/jpeg">
                </div>
            </div>


            <div class="featureMenu d-none">
                <div class="d-flex justify-content-between chooseMenu">
                    <h1 class="fs-5 my-5 popular">Most Popular</h1>
                    <h1 class="fs-5 my-5 activeSubNav feature">Feature Menu</h1>
                </div>

                <div class="box">
                    <label for="pi1">Product Image1</label>
                    <input type="file" id="pi1" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn1">Product Name1</label>
                    <input type="text" id="pn1">
                </div>
                <div class="box">
                    <label for="price">Price</label>
                    <input type="text" id="price">
                </div>
                <div class="box">
                    <label for="instock">Instock1</label>
                    <input type="text" id="instock">
                </div>
                <div class="box">
                    <label for="pi2">Product Image2</label>
                    <input type="file" id="pi2" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn2">Product Name2</label>
                    <input type="text" id="pn2">
                </div>
                <div class="box">
                    <label for="price2">Price2</label>
                    <input type="text" id="price2">
                </div>
                <div class="box">
                    <label for="instock2">Instock2</label>
                    <input type="text" id="instock2">
                </div>
                <div class="box">
                    <label for="pi3">Product Image3</label>
                    <input type="file" id="pi3" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="pn3">Product Name3</label>
                    <input type="text" id="pn3">
                </div>
                <div class="box">
                    <label for="price3">Price3</label>
                    <input type="text" id="price3">
                </div>
                <div class="box">
                    <label for="instock3">Instock3</label>
                    <input type="text" id="instock3">
                </div>
                <div class="box">
                    <label for="illustration">Illustration</label>
                    <input type="file" id="illustration" accept="image/png, image/jpeg">
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
    <script src="./resources/js/dashboard_setting.js"></script>
    <script src="./resources/js/dashboard_setting_menu.js"></script>
</body>

</html>