<?php
// session_start();
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
        <!-- <a href="./dashboard_setting_menu.php">
            <h1 class="fs-4 me-5">Home Menu</h1>
        </a> -->
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
                        <input type="file" id="pi1" accept="image/png" name="pphoto" required hidden>
                    </div>
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
                    <label for="pinstock">Instock</label>
                    <input type="number" name="pinstock" id="pinstock">
                </div>
                <div class="box">
                    <label for="ptype">Product Type</label>
                    <select id="ptype" name="ptype" required>
                        <option value="1">Coffee</option>
                        <option value="2" selected>Dessert</option>
                        <option value="3">Juice</option>
                    </select>
                </div>
                <div class="box">
                    <label for="pprice">Price</label>
                    <input type="number" name="pprice" id="pprice" required>
                </div>

            </div>
            <div class="saveBtn ">
                <button name="add">Add</button>
            </div>
        </div>
    </form>


    <!-----------------  Updated Menu  ----------------->

    <?php
    include "../Controller/menu_showController.php";
    ?>
    <div>
        <div class="fs-4 ms-4 mb-4">Updated Menu</div>
        <div class="mx-4">
            <table class="table">

                <tbody class="tableBody">

                    <?php
                    for ($i = 0; $i < count($result); $i++) { ?>
                        <tr>
                            <td data-label="productImg">
                                <div class="productImg">
                                    <img src="../../Storages/<?php echo $result[$i]["product_photo"] ?>">
                                </div>
                            </td>
                            <td data-label="ProductName">
                                <?php echo $result[$i]["product_name"] ?>
                            </td>
                            <td data-label="Instock">
                                <?php echo $result[$i]["product_instock"] ?>
                            </td>
                            <td data-label="Sold">
                                <?php echo $result[$i]["sold_quantity"] ?>
                            </td>
                            <td data-label="Remain">
                                <?php echo $result[$i]["remain_stock"] ?>
                            </td>
                            <td data-label="Price">
                                <?php echo $result[$i]["product_price"] ?>
                            </td>
                            <td data-label="Discount">
                                <?php echo $result[$i]["product_discount"] ?> %
                            </td>
                            <td data-label="Type">
                                <?php echo $result[$i]["product_discount"] ?>
                            </td>
                            <td colspan="2" class="action">
                                <a href="./dashboard_update_menu.php?id=<?php echo $result[$i]['product_id'] ?>" class="me-2">Edit</a>
                                <a href="../Controller/delete_menuController.php?id=<?php echo $result[$i]['product_id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <!----------  Ending Tab ------>
    </div>
    </div>

    <script src="./resources/js/dashboard_setting.js"></script>
    <script src="./resources/js/dashboard_setting_menu.js"></script>
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