<?php
// session_start();
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_menu.css">

</head>

<body>

    <?php
    include "../Controller/update_menu_showController.php";
    ?>

    <form action="../Controller/update_menuController.php" method="post" enctype="multipart/form-data">

        <div class=" flex-column d-flex justify-content-center align-items-center">
            <div>

                <h1 class="fs-5 my-5">Update Menu</h1>
                <input type="hidden" value="<?= $_GET["id"] ?>" name="pid">
                <div class="box">
                    <div class="uploadImage">
                        <img src="../../Storages/<?php echo $result[0]["product_photo"] ?>" id="acceptImage">
                        <input type="file" id="pi1" name="upimage" accept="image/png" hidden>
                    </div>
                </div>
                <div class="box">
                    <label for="pn1">Product Name</label>
                    <input type="text" value="<?php echo $result[0]["product_name"] ?>" name="uname" id="pn1" required>
                </div>
                <div class="box">
                    <label for="pdis">Discount</label>
                    <input type="number" value="<?php echo $result[0]["product_discount"] ?>" name="udis" id="pdis">
                </div>
                <div class="box">
                    <label for="pinstock">Instock</label>
                    <input type="number" value="<?php echo $result[0]["product_instock"] ?>" name="uinstock" id="pinstock">
                </div>
                <div class="box">
                    <label for="premain">Sold</label>
                    <input type="number" value="<?php echo $result[0]["sold_quantity"] ?>" name="usold" id="pprice" readonly>
                </div>
                <div class="box">
                    <label for="premain">Remain</label>
                    <input type="number" value="<?php echo $result[0]["remain_stock"] ?>" name="uremain" id="pprice" readonly>
                </div>
                <div class="box">
                    <label for="ptype">Type</label>
                    <select id="ptype" name="ptype" required>
                        <option value="1" <?php
                                            if ($result[0]["product_type"] == 1) {
                                                echo "selected";
                                            }
                                            ?>>Coffee</option>
                        <option value="2" <?php
                                            if ($result[0]["product_type"] == 2) {
                                                echo "selected";
                                            }
                                            ?>>Dessert</option>
                        <option value="3" <?php
                                            if ($result[0]["product_type"] == 3) {
                                                echo "selected";
                                            }
                                            ?>>Juice</option>
                    </select>
                </div>
                <div class="box">
                    <label for="pprice">Price</label>
                    <input type="number" value="<?php echo $result[0]["product_price"] ?>" name="uprice" id="pprice" required>
                </div>
            </div>
            <div class="saveBtn ">
                <button type="submit" name="update">Update</button>
            </div>
        </div>
    </form>


    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
    <script>
        $("#acceptImage").click(() => {
            $("#pi1").click();
            $("#pi1").change(() => {
                document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]);
            })
        })
    </script>
</body>

</html>