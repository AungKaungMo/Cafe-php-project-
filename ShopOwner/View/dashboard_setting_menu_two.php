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
            <h1 class="fs-4 me-5">Home Menu</h1>
        </a>
        <a href="./dashboard_setting_menu_two.php">
            <h1 class="fs-4 activeSubNav">Add&Change Menu</h1>
        </a>
    </div>
    <hr class="subLine">

    <!---------------  Add Menu  -------------->
    <form action="../Controller/shop_setting_menu_twoController.php" method="post" enctype="multipart/form-data">

        <div class=" flex-column d-flex justify-content-center align-items-center">
            <div>

                <h1 class="fs-5 my-5">Add New Menu</h1>
                <div class="box">
                    <div class="uploadImage">
                        <img src="./resources/img/default.png" id="acceptImage">
                    </div>
                </div>
                <div class="box">
                    <label for="pi1">Product Image</label>
                    <input type="file" id="pi1" accept="image/png" name="pphoto" required>
                </div>
                <div class="box">
                    <label for="pn1">Product Name</label>
                    <input type="text" name="pname" id="pn1" required>
                </div>
                <div class="box">
                    <label for="pdis">Discount</label>
                    <input type="number" name="pdis" id="pdis">
                </div>
                <div class="box">
                    <label for="price">Price</label>
                    <input type="number" name="pprice" id="price" required>
                </div>
                <div class="box">
                    <label for="instock">Instock</label>
                    <input type="number" name="pinstock" id="instock" required>
                </div>
                <div class="box">
                    <label for="coinPrice">Coin Price</label>
                    <input type="number" name="pcoinprice" id="coinPrice" required>
                </div>
            </div>
            <div class="saveBtn ">
                <button name="add">Add</button>
            </div>
        </div>
    </form>


    <!-----------------  Updated Menu  ----------------->


    <form action="../Controller/updatemenu.php" method="post" enctype="multipart/form-data">
    <h1 class="fs-4 ms-4 my-5">Updated Menu</h1>
        <div class=" d-flex flex-wrap mb-5">
    

<div class="menubox m-4">
    <div class="updateImage">
        <img src="./resources/img/cake.jpg">
    </div>
    <div class=" mt-3">
        <div>
            <input type="text" value="Espresso" class="updateName">
        </div>
        <div class="p_stock  mt-3">
            <div>
            <span>Instock - </span>
            <input type="number" value="40" class="updateInstock">
            </div>
            <div>
            <span>Sold - <span class="fw-bold"> 30 </span></span>
            </div>
        </div>
        <div class="remain mt-3">
        <span>Remain - </span><span>10</span>
        </div>
        <div class="ammount mt-3">
            <div class="price">
                <span>Price - </span>
                <input type="number">
            </div>
            <div class="coin">
                <span>Coin - </span>
                <input type="number">
            </div>
        </div>
        <div class="mt-3 del">
            <p>
            Do you want to delete this item from menu?
            </p>
            <iconify-icon icon="ion:trash-sharp" class="fs-3"></iconify-icon>
        </div>
    </div>
</div>

<div class="menubox m-4">
    <div class="updateImage">
        <img src="./resources/img/cake.jpg">
    </div>
    <div class=" mt-3">
        <div>
            <input type="text" value="Espresso" class="updateName">
        </div>
        <div class="p_stock  mt-3">
            <div>
            <span>Instock - </span>
            <input type="number" value="40" class="updateInstock">
            </div>
            <div>
            <span>Sold - <span class="fw-bold"> 30 </span></span>
            </div>
        </div>
        <div class="remain mt-3">
        <span>Remain - </span><span>10</span>
        </div>
        <div class="ammount mt-3">
            <div class="price">
                <span>Price - </span>
                <input type="number">
            </div>
            <div class="coin">
                <span>Coin - </span>
                <input type="number">
            </div>
        </div>
        <div class="mt-3 del">
            <p>
            Do you want to delete this item from menu?
            </p>
            <iconify-icon icon="ion:trash-sharp" class="fs-3"></iconify-icon>
        </div>
    </div>
</div>

<div class="menubox m-4">
    <div class="updateImage">
        <img src="./resources/img/cake.jpg">
    </div>
    <div class=" mt-3">
        <div>
            <input type="text" value="Espresso" class="updateName">
        </div>
        <div class="p_stock  mt-3">
            <div>
            <span>Instock - </span>
            <input type="number" value="40" class="updateInstock">
            </div>
            <div>
            <span>Sold - <span class="fw-bold"> 30 </span></span>
            </div>
        </div>
        <div class="remain mt-3">
        <span>Remain - </span><span>10</span>
        </div>
        <div class="ammount mt-3">
            <div class="price">
                <span>Price - </span>
                <input type="number">
            </div>
            <div class="coin">
                <span>Coin - </span>
                <input type="number">
            </div>
        </div>
        <div class="mt-3 del">
            <p>
            Do you want to delete this item from menu?
            </p>
            <iconify-icon icon="ion:trash-sharp" class="fs-3"></iconify-icon>
        </div>
    </div>
</div>

<div class="menubox m-4">
    <div class="updateImage">
        <img src="./resources/img/cake.jpg">
    </div>
    <div class=" mt-3">
        <div>
            <input type="text" value="Espresso" class="updateName">
        </div>
        <div class="p_stock  mt-3">
            <div>
            <span>Instock - </span>
            <input type="number" value="40" class="updateInstock">
            </div>
            <div>
            <span>Sold - <span class="fw-bold"> 30 </span></span>
            </div>
        </div>
        <div class="remain mt-3">
        <span>Remain - </span><span>10</span>
        </div>
        <div class="ammount mt-3">
            <div class="price">
                <span>Price - </span>
                <input type="number">
            </div>
            <div class="coin">
                <span>Coin - </span>
                <input type="number">
            </div>
        </div>
        <div class="mt-3 del">
            <p>
            Do you want to delete this item from menu?
            </p>
            <iconify-icon icon="ion:trash-sharp" class="fs-3"></iconify-icon>
        </div>
    </div>
</div>

        </div> 
        <div class="saveBtn ">
            <button class="savechange">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>

    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
    <script src="./resources/js/dashboard_setting_menu.js"></script>
    <script>
        $("#pi1").change(function() {
          document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]); 
        })
      
    </script>

</body>
</html>