<?php
ini_set("display_errors", "1");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/dbconnection.php";
include "../Controller/blogSelectController.php";
$bid = $_GET["bid"];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>

    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!------------------------  BOOTSTRAP  --------------------------------------------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-------------------------   Iconify   --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>


    <!-------------------------   CSS   ---------------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/selectedBlog.css">


    <!-----------------------    Jquery   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   JS   -------------------------------->
    <script src="./resources/js/selectedBlog.js"></script>

</head>

<body>


    <div class="mt-4 mx-sm-5 mx-2 fs-1 backIcon">
        <a href="./shopinterface.php?id=<?= $resultB[0]["shop_id"] ?>"><iconify-icon icon="material-symbols:arrow-back-rounded" class="backIcon"></iconify-icon></a>
    </div>
    <div class="navLine"></div>
    </div>

    <div class="row mx-sm-5 mx-2">
        <div class="col-md-6 col-12">
            <div class="w-75 my-5 bg-info rounded-4">
                <img src="../../Storages/<?= $resultB[0]["blog_image"]; ?> " width="100%" class="rounded-4">
            </div>
            <h1 class="fs-2 fw-bold title"> <?= $resultB[0]["main_title"]; ?>
                <!-- Essential Guide to Healthy Eating -->

            </h1>
            <div>
                <div class="mt-4">
                    <h1 class="fs-3 fw-bold subtitle">
                        <?php
                        echo $resultB[0]["first_title"];
                        ?>
                        <!-- Essential -->
                    </h1>
                    <p>
                        <?php
                        echo $resultB[0]["first_para"];
                        ?>


                    </p>
                </div>

                <div class="mt-4 ">
                    <h1 class="fw-bold fs-4 subtitle">
                        <?php
                        echo $resultB[0]["sec_title"];
                        ?>
                        <!-- Guide -->

                    </h1>
                    <p>
                        <?php
                        echo $resultB[0]["sec_para"];
                        ?>


                    </p>
                </div>

                <div class="mt-4">
                    <h1 class="fw-bold fs-4 subtitle"><?php
                                                        echo $resultB[0]["third_title"];
                                                        ?>
                        <!-- Healthy -->
                    </h1>
                    <p>
                        <?php
                        echo $resultB[0]["third_para"];
                        ?>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mt-5">
            <div class="d-flex">
                <div class="me-4 aurthorImg">
                    <img src="../../Storages/<?= $resultB[0]["author_image"]; ?> ">
                </div>
                <div>
                    <div class="fs-5 aurthorName">Author - <span> <?php
                                                                    echo $resultB[0]["author_name"];
                                                                    ?>
                        </span></div>
                    <div class="fs-5 blogTitle">Title - <span>
                            <?php
                            echo $resultB[0]["main_title"];
                            ?>
                        </span></div>
                    <div class="socialGp d-flex mt-4">
                        <a href="<?= $resultB[0]["fb_link"]; ?>"><iconify-icon icon="ic:baseline-facebook">
                            </iconify-icon></a>
                        <a href="<?= $resultB[0]["ig_link"]; ?>"><iconify-icon icon="ph:instagram-logo-fill" class="mx-4">
                            </iconify-icon></a>
                        <a href="<?= $resultB[0]["twt_link"]; ?>"><iconify-icon icon="ph:twitter-logo-fill">
                            </iconify-icon></a>
                    </div>
                </div>
            </div>

            <?php
            include "../Controller/blogcommentSelectController.php";
            $result1 = $result;
            // echo "<pre>";
            // print_r($result1)
            ?>
            <div class="line mt-4"></div>
            <div>
                <div class="fw-bold fs-4 mt-4">User Comments</div>

                <div class="commentSection">

                    <?php if (count($result1) == 0) { ?>
                        <div class="line mt-4"></div>
                        <form action="../Controller/blogcommentInsertController.php" method="post">
                            <div class="commentBox">
                                <div class="fw-bold fs-4 my-4">Leave Comments.</div>
                                <div class="typeBox">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center submitBtn mt-3 mb-5">
                                    <button class="p-2" name="submit">Submit</button>
                                    <input type="text" value="<?= $bid ?>" name="id" hidden>
                                </div>
                            </div>
                        </form>
                    <?php } else if (count($result1) > 0) {  ?>
                        <?php for ($i = 0; $i < count($result1); $i++) { ?>
                            <div class="comment mt-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex">
                                        <div class="commentImage"><img src="../../Storages/<?= $result1[$i]["cus_profile"] ?>"></div>
                                        <div class="ms-4">
                                            <p class="personName fw-bold mb-0 fs-5">
                                                <?php echo $result1[$i]["cus_name"]  ?>
                                            </p>
                                            <p class="commentDate">
                                                <?php
                                                echo $result1[$i]["created_date"];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <iconify-icon icon="mdi:cards-heart-outline" class="likeIcon fs-2"></iconify-icon>
                                        <iconify-icon icon="mdi:cards-heart" class="unLikeIcon d-none fs-2"></iconify-icon>
                                    </div>
                                </div>
                                <div class="commentText mt-4">
                                    <p class="p-3">
                                        <?php
                                        echo $result1[$i]["comment"];
                                        ?>
                                    </p>
                                </div>
                            </div>

                        <?php }   ?>
                        <div class="line mt-4"></div>
                        <form action="../Controller/blogcommentInsertController.php" method="post">
                            <div class="commentBox">
                                <div class="fw-bold fs-4 my-4">Leave Comments.</div>
                                <div class="typeBox">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center submitBtn mt-3 mb-5">
                                    <input type="text" value="<?= $bid ?>" name="id" hidden>
                                    <button class="p-2" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>

            <?php   }  ?>
            </div>



        </div>
    </div>

</body>

</html>



<!-- We mean real food as opposed to processed food.
                        Real food is fruits, vegetables, meats, dairy, seafood,
                        nuts, seeds, whole grains and beans. Natural
                        sweeteners, coffee, chocolate and wine count,
                        too — just in moderation. Avoid food that is
                        mass-produced, emulsified (where water and oil don’t
                        separate) or shelf-stable. -->

<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quia doloremque temporibus quasi magni vitae, culpa fuga in dolor ratione! -->
<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quia doloremque temporibus quasi magni vitae, culpa fuga in dolor ratione! -->
<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quia doloremque temporibus quasi magni vitae, culpa fuga in dolor ratione! -->

<!-- We mean real food as opposed to processed food.
                        Real food is fruits, vegetables, meats, dairy, seafood,
                        nuts, seeds, whole grains and beans. Natural
                        sweeteners, coffee, chocolate and wine count,
                        too — just in moderation.  -->

<!-- Eating real food leads to eating more nutrient-rich
                        food without much effort.When it comes to carbs,
                        the more natural and whole, the better. Go for
                        complex carbs like 100% whole-grain breads
                        and pasta, brown rice, starchy vegetables, legumes,
                        nuts, seeds, low-fat dairy and plenty of fruits and
                        vegetables. Limit simple sugars from refined
                        grains, processed snack foods, sweets and
                        sugar-sweetened beverages. -->

<!-- <div class="comment mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <div class="commentImage"><img src="./resources/img/aurthor.jpg"></div>
            <div class="ms-4">
                <p class="personName fw-bold mb-0 fs-5" name="name">
                    Calara
                </p>
                <p class="commentDate" name="date">
                    <?php
                    echo $result1[1]["created_date"];
                    ?>
                </p>
            </div>
        </div>
        <div>
            <iconify-icon icon="mdi:cards-heart-outline" class="likeIcon fs-2"></iconify-icon>
            <iconify-icon icon="mdi:cards-heart" class="unLikeIcon d-none fs-2"></iconify-icon>
        </div>
    </div>
    <div class="commentText mt-4">
        <p class="p-3">
            <?php
            echo $result1[1]["comment"];
            ?>
        </p>
    </div>
</div>

<div class="comment mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <div class="commentImage"><img src="./resources/img/aurthor.jpg"></div>
            <div class="ms-4">
                <p class="personName fw-bold mb-0 fs-5">
                    Calara
                </p>
                <p class="commentDate">
                    <?php
                    echo $result1[2]["created_date"];
                    ?>
                </p>
            </div>
        </div>
        <div>
            <iconify-icon icon="mdi:cards-heart-outline" class="likeIcon fs-2"></iconify-icon>
            <iconify-icon icon="mdi:cards-heart" class="unLikeIcon d-none fs-2"></iconify-icon>
        </div>
    </div>
    <div class="commentText mt-4">
        <p class="p-3">
            <?php
            echo $result1[2]["comment"];
            ?>
        </p>
    </div>
</div> -->