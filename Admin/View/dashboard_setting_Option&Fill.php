<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_Option&Fill.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>
    <form>
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <div>
                <div class="box">
                    <label for="firsttitle">Title</label>
                    <input type="text" id="firsttitle">
                </div>
                <div class="box">
                    <label for="firstparagraph">Paragraph</label>
                    <textarea id="firstparagraph"></textarea>
                </div>
                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg">
                </div>
                <div class="box">
                    <label for="sectitle">Title</label>
                    <input type="text" id="sectitle">
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
                            <input type="text" class="paymentBox">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                    </div>

                    <div class="mt-4 me-3">
                        <div class="fw-bold fs-5">Standard</div>
                        <div class="my-3">
                            <label>$ </label>
                            <input type="text" class="paymentBox">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                    </div>


                    <div class="mt-4 me-3">
                        <div class="fw-bold fs-5">Premium</div>
                        <div class="my-3">
                            <label>$ </label>
                            <input type="text" class="paymentBox">
                            <label>per month</label>
                        </div>

                        <div>
                            <label>1</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>2</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>3</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>4</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                        <div>
                            <label>5</label>
                            <textarea class="paymentTextBox"></textarea>
                        </div>
                    </div>


                    <div>

                    </div>
                </div>
    </form>

    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
</body>

</html>