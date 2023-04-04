<?php
include "./resources/shared/dashboard.php";
include "../Controller/selectreviewController.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_review.css">
</head>

<body>
    <form action="../Controller/reviewController.php" method="post">
        <div class="d-flex flex-column justify-content-center align-items-center mt-4">
            <div>
                <div class="commentBox">
                    <label class="fs-5">Your Comment</label><br>
                    <?php
                    if ($mode == 1) { ?>
                        <textarea class="p-2 rounded-3" placeholder="Write Something" name="com"></textarea>
                    <?php } else { ?>
                        <textarea class="p-2 rounded-3" placeholder="Write Something" name="com"><?= $Result[0]["comment"] ?></textarea>
                    <?php    }

                    ?>
                </div>
                <div class="mt-4 rating">
                    <p class="fs-5 mb-1">Rating</p>
                    <div class="starBox p-2">
                        <label for="s1">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s1"></iconify-icon>
                        </label>
                        <label for="s2">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s2"></iconify-icon>
                        </label>
                        <label for="s3">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s3"></iconify-icon>
                        </label>
                        <label for="s4">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s4"></iconify-icon>
                        </label>
                        <label for="s5">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s5"></iconify-icon>
                        </label>
                        <input type="text" name="rate" id="rate" hidden>
                    </div>
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <input type="hidden" name="select" id="" value="<?= $mode ?>">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------------  End Tab  ------------------>
    </div>
    </div>
    <script src="./resources/js/dashboard_review.js"></script>
</body>

</html>