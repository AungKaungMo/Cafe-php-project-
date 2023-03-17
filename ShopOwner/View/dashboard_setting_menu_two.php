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
    <form>

        <div class=" flex-column d-flex justify-content-center align-items-center">
            <div>

                <h1 class="fs-5 my-5">Add New Menu</h1>
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
            </div>
            <div class="saveBtn ">
                <button>Add</button>
            </div>
        </div>
    </form>
    <!-----------------  Updated Menu  ----------------->

    <form>
        <div class=" flex-column d-flex justify-content-center align-items-center mb-5">
            <div>

                <h1 class="fs-5 my-5">Updated Menu</h1>
                <div class="menuBox">
                    <div class="row">
                        <div class="col-5">
                            <div class=""><img src="./resources/img/cake.jpg" width="100%" height="100%" class="rounded-3"></div>
                        </div>
                        <div class="col-7 menuDetails">
                            <div class="mb-3">
                                <input type="text" value="Espresso" class="updatedName">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span>Sold - <span class="fw-bold"> 32 </span></span>
                                </div>
                                <div>
                                    <span>Instock - <input type="number" value="40" class="updatedInstock"></span>
                                </div>
                            </div>
                            <div>
                                <span>Remain - </span><span>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="question">Do u want to delete this items from menu?</div>
                        <iconify-icon icon="ion:trash-sharp" class="fs-4 bin"></iconify-icon>
                    </div>
                </div>

                <div class="menuBox mt-3">
                    <div class="row">
                        <div class="col-5">
                            <div class=""><img src="./resources/img/cake.jpg" width="100%" height="100%" class="rounded-3"></div>
                        </div>
                        <div class="col-7 menuDetails">
                            <div class="mb-3">
                                <input type="text" value="Espresso" class="updatedName">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span>Sold - <span class="fw-bold"> 32 </span></span>
                                </div>
                                <div>
                                    <span>Instock - <input type="number" value="40" class="updatedInstock"></span>
                                </div>
                            </div>
                            <div>
                                <span>Remain - </span><span>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="question">Do u want to delete this items from menu?</div>
                        <iconify-icon icon="ion:trash-sharp" class="fs-4 bin"></iconify-icon>
                    </div>
                </div>

                <div class="menuBox mt-3">
                    <div class="row">
                        <div class="col-5">
                            <div class=""><img src="./resources/img/cake.jpg" width="100%" height="100%" class="rounded-3"></div>
                        </div>
                        <div class="col-7 menuDetails">
                            <div class="mb-3">
                                <input type="text" value="Espresso" class="updatedName">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span>Sold - <span class="fw-bold"> 32 </span></span>
                                </div>
                                <div>
                                    <span>Instock - <input type="number" value="40" class="updatedInstock"></span>
                                </div>
                            </div>
                            <div>
                                <span>Remain - </span><span>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="question">Do u want to delete this items from menu?</div>
                        <iconify-icon icon="ion:trash-sharp" class="fs-4 bin"></iconify-icon>
                    </div>
                </div>

                <div class="menuBox mt-3">
                    <div class="row">
                        <div class="col-5">
                            <div class=""><img src="./resources/img/cake.jpg" width="100%" height="100%" class="rounded-3"></div>
                        </div>
                        <div class="col-7 menuDetails">
                            <div class="mb-3">
                                <input type="text" value="Espresso" class="updatedName">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span>Sold - <span class="fw-bold"> 32 </span></span>
                                </div>
                                <div>
                                    <span>Instock - <input type="number" value="40" class="updatedInstock"></span>
                                </div>
                            </div>
                            <div>
                                <span>Remain - </span><span>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="question">Do u want to delete this items from menu?</div>
                        <iconify-icon icon="ion:trash-sharp" class="fs-4 bin"></iconify-icon>
                    </div>
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