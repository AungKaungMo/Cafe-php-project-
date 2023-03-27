<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_ContactUs.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";

    include "../Model/dbConnection.php";

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
    SELECT * FROM m_contactus WHERE id = 1
    "
    );
    $sql->execute();
    $contactresult = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <form action="../Controller/contactusController.php" method="post" enctype="multipart/form-data">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3 mt-5">

                <div class="box">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph" name="paragraph"><?php echo $contactresult[0]["paragraph"] ?></textarea>
                </div>
                <div class="box">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="<?php echo $contactresult[0]["address"] ?>">
                </div>
                <div class="box">
                    <label for="phone">Ph.No</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $contactresult[0]["phone"] ?>">
                </div>
                <div class="box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $contactresult[0]["email"] ?>">
                </div>

                <div class="text-center mb-3">
                    <img src="../../Storages/<?php echo $contactresult[0]["picture"] ?>" width="200px">
                </div>

                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg" name="profile">
                </div>

            </div>

        </div>
        <div class="saveBtn ">
            <button name="save">Save Change <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>

    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
    <script>
        picture.addEventListener("change", function() {
            document.getElementById("profileimg").src = window.URL.createObjectURL(event.target.files[0]);
        })
    </script>
</body>

</html>