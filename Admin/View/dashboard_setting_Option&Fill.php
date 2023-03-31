<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_Option&Fill.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    include "../Controller/dashboard_optionFillDfController.php";
    ?>
    <form method="post" action="../Controller/dashboard_setting_optionFillController.php" enctype="multipart/form-data">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <div>
                <div class="box">
                    <label for="firsttitle">Title</label>
                    <input type="text" id="firsttitle" name="title" value="<?= $result[0]["title_one"] ?>">
                </div>
                <div class="box">
                    <label for="firstparagraph">Paragraph</label>
                    <textarea id="firstparagraph" name="paragraph"><?= $result[0]["paragraph"] ?></textarea>
                </div>
                <div class="box d-flex align-items-center justify-content-center ">
                    <img src="<?php if($result[0]["picture"] == "") { ?> ./resources/img/default.png <?php } else{ echo "../../Storages/".$result[0]["picture"]; } ?>" id="acceptImage">
                    <iconify-icon icon="material-symbols:cloud-upload" class="aboutIcon" id="upload" width="30" height="30"></iconify-icon>
                    <input type="file" id="picture" name="picture" accept="image/png, image/jpeg" hidden>

                </div>
                <div class="box">
                    <label for="sectitle">Title</label>
                    <input type="text" id="sectitle" name="secondTitle" value="<?= $result[0]["title_two"] ?>">
                </div>


            </div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center my-5">
            <div>

                <div class=" d-flex justify-content-around flex-wrap">
                    <div class="mt-4 me-3">
                        <div class="fw-bold fs-5">Basic</div>
                        <div class="my-3">
                            <label>$ </label>
                            <input type="number" class="paymentBox" name="basicPrice" value="<?= $result[0]["basic_price"] ?>">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox" name="basicDetail1"><?= $result[0]["basic_detail_one"] ?></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox" name="basicDetail2"><?= $result[0]["basic_detail_two"] ?></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox" name="basicDetail3"><?= $result[0]["basic_detail_three"] ?></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox" name="basicDetail4"><?= $result[0]["basic_detail_four"] ?></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox" name="basicDetail5"><?= $result[0]["basic_detail_five"] ?></textarea>
                        </div>
                        <div>
                            <label>6</label>
                            <textarea class="paymentTextBox" name="basicDetail6"><?= $result[0]["basic_detail_six"] ?></textarea>
                        </div>
                    </div>

                    <div class="mt-4 me-3">
                        <div class="fw-bold fs-5">Standard</div>
                        <div class="my-3">
                            <label>$ </label>
                            <input type="number" class="paymentBox" name="standardPrice" value="<?= $result[0]["standard_price"] ?>">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox" name="standardDetail1"><?= $result[0]["standard_detail_one"] ?></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox" name="standardDetail2"><?= $result[0]["standard_detail_two"] ?></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox" name="standardDetail3"><?= $result[0]["standard_detail_three"] ?></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox" name="standardDetail4"><?= $result[0]["standard_detail_four"] ?></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox" name="standardDetail5"><?= $result[0]["standard_detail_five"] ?></textarea>
                        </div>
                        <div>
                            <label>6</label>
                            <textarea class="paymentTextBox" name="standardDetail6"><?= $result[0]["standard_detail_six"] ?></textarea>
                        </div>
                    </div>


                    <div class="mt-4 me-3">
                        <div class="fw-bold fs-5">Premium</div>
                        <div class="my-3">
                            <label>$ </label>
                            <input type="number" class="paymentBox" name="premiumPrice" value="<?= $result[0]["premium_price"] ?>">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox" name="premiumDetail1"><?= $result[0]["premium_detail_one"] ?></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox" name="premiumDetail2"><?= $result[0]["premium_detail_two"] ?></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox" name="premiumDetail3"><?= $result[0]["premium_detail_three"] ?></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox" name="premiumDetail4"><?= $result[0]["premium_detail_four"] ?></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox" name="premiumDetail5"><?= $result[0]["premium_detail_five"] ?></textarea>
                        </div>
                        <div>
                            <label>6</label>
                            <textarea class="paymentTextBox" name="premiumDetail6"><?= $result[0]["premium_detail_six"] ?></textarea>
                        </div>
                    </div>


                    <div>

                    </div>
                </div>
                <div class="saveBtn mb-5 ">
                    <button name="savechange">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
                </div>
    </form>

    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script>
        $("#upload").click(() => {
            $("#picture").click();
            $("#picture").change(() => {
                document.getElementById("acceptImage").src = window.URL.createObjectURL(event.target.files[0]);
            })
        })
    </script>

</body>

</html>