<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_review.css">
</head>

<body>
    <form>
        <div class="d-flex flex-column justify-content-center align-items-center mt-4">
            <div>
                <div class="commentBox">
                    <label class="fs-5">Your Comment</label><br>
                    <textarea class="p-2 rounded-3" placeholder="Write Something"></textarea>
                </div>
                <div class="mt-4 rating">
                    <p class="fs-5 mb-1">Rating</p>
                    <iconify-icon icon="material-symbols:star-rounded" class="rateStar"></iconify-icon>
                    <iconify-icon icon="material-symbols:star-rate-half-rounded" class="rateStar"></iconify-icon>
                    <iconify-icon icon="material-symbols:star-rate-outline-rounded" class="rateStar"></iconify-icon>
                    <div class="starBox p-2"></div>
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <button>Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>


    <!----------------  End Tab  ------------------>
    </div>
    </div>
    <script src="./resources/js/dashboard_review.js"></script>
</body>

</html>