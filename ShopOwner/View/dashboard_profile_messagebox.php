<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_profile.css">
<link rel="stylesheet" href="./resources/css/dashboard_profile_messagebox.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_profile.php";
    ?>

    <div class="chatContainer row m-4">
        <div class=" col-md-8 col-12 position-relative chatBoxConatiner">

            <div class="p-1 titleBar d-flex align-items-center">
                <div><img src="./resources/img/admin.png"></div>
                <p class="fw-bold ms-3 fs-5">Admin</p>
            </div>
            <hr>
            <div class="chatBox">
                <div class="p-1 messageChatContainer d-flex">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat">Hello Owner</p>
                </div>
                <div class="p-1 messageChatContainer d-flex flex-row-reverse justify-content-start">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat me">Hello Admin</p>
                </div>
                <div class="p-1 messageChatContainer d-flex flex-row-reverse justify-content-start">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat me">Hello Admin</p>
                </div>
                <div class="p-1 messageChatContainer d-flex">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat">Hello Owner</p>
                </div>
                <div class="p-1 messageChatContainer d-flex flex-row-reverse justify-content-start">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat me">Hello Admin</p>
                </div>
                <div class="p-1 messageChatContainer d-flex flex-row-reverse justify-content-start">
                    <div><img src="./resources/img/admin.png"></div>
                    <p class="chat me">Hello Admin</p>
                </div>

            </div>


            <div class="d-flex justify-content-between align-items-center typingContainer">
                <div>
                    <iconify-icon icon="material-symbols:text-snippet-rounded" class="fs-3 ms-2"></iconify-icon>
                    <input type="text" placeholder="Text" class="typeBox">
                </div>
                <div>
                    <iconify-icon icon="ri:send-plane-fill" class="fs-3" id="send"></iconify-icon>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-12 mt-md-0 mt-4">
            <div class="chatPersonContainer">
                <div>
                    <h1 class="fs-5">From Admin</h1>
                    <div class="chatPerson d-flex align-items-center">
                        <div><img src="./resources/img/admin.png"></div>
                        <p class="ms-2 fw-bold">Admin</p>
                    </div>
                </div>
                <hr>
                <div class="mb-2">
                    <h1 class="fs-5">From Customers</h1>
                    <div class="chatPerson d-flex align-items-center">
                        <div><img src="./resources/img/cust1.jpg"></div>
                        <p class="ms-2 fw-bold">John nail</p>
                    </div>
                    <div class="chatPerson d-flex align-items-center">
                        <div><img src="./resources/img/cust2.jpg"></div>
                        <p class="ms-2 fw-bold">Creamilia</p>
                    </div>
                    <div class="chatPerson d-flex align-items-center">
                        <div><img src="./resources/img/cust3.jpg"></div>
                        <p class="ms-2 fw-bold">Smith Rival</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-----------------------   End Tab   --------------------->
    </div>
    </div>

    <script src="./resources/js/dashboard_profile.js"></script>
    <script src="./resources/js/dashboard_profile_messagebox.js"></script>
</body>

</html>