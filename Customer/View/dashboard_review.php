<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_review.css">
</head>

<body>
    <form action="../Controller/reviewController.php" method="post">
        <div class="d-flex flex-column justify-content-center align-items-center mt-4">
            <div>
                <div class="commentBox">
                    <label class="fs-5">Your Comment</label><br>
                    <textarea class="p-2 rounded-3" placeholder="Write Something" name="com"></textarea>
                </div>
                <div class="mt-4 rating">
                    <p class="fs-5 mb-1">Rating</p>
                    <div class="starBox p-2">
                        <label for="s1">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s1"></iconify-icon>
                        </label>
                        <input type="text" id="s1" value="1" name="rate1" hidden>
                        <label for="s2">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s2"></iconify-icon>
                        </label>
                        <input type="text" id="s2" hidden value="2" name="rate2">
                        <label for="s3">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s3"></iconify-icon>
                        </label>
                        <input type="text" name="rate3" id="s3" value="3" hidden>
                        <label for="s4">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s4"></iconify-icon>
                        </label>
                        <input type="text" name="rate4" id="s4" value="4" hidden>
                        <label for="s5">
                            <iconify-icon icon="ic:round-star" class="ratestar" id="s5"></iconify-icon>
                        </label>
                        <input type="text" name="rate5" id="s5" value="5" hidden>
                    </div>
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------------  End Tab  ------------------>
    </div>
    </div>
    <script src="./resources/js/dashboard_review.js"></script>
</body>

</html>