<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_setting.css">
<link rel="stylesheet" href="./resources/css/dashboard_setting_FAQs.css">

</head>

<body>

    <?php
    include "./resources/shared/dashboard_setting.php";
    ?>
    <form action="../Controller/FAQsUpdateController.php" method="post">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3"> 
                <div class="box">
                    <label for="question1">Question 1</label>
                    <input type="text" id="question1" name="questionOne">
                </div>
                <div class="box">
                    <label for="answer1">Answer 1</label>
                    <textarea id="answer1" name="answerOne"></textarea>
                </div>
                
                <div class="box">
                    <label for="question2">Question 2</label>
                    <input type="text" id="question2" name="questionTwo">
                </div>
                <div class="box">
                    <label for="answer2">Answer 2</label>
                    <textarea id="answer2" name="answerTwo"></textarea>
                </div>
                <div class="box">
                    <label for="question3">Question 3</label>
                    <input type="text" id="question3" name="questionThree">
                </div>
                <div class="box">
                    <label for="answer3">Answer 3</label>
                    <textarea id="answer3" name="answerThree"></textarea>
                </div>
                <div class="box">
                    <label for="question4">Question 4</label>
                    <input type="text" id="question4" name="questionFour">
                </div>
                <div class="box">
                    <label for="answer4">Answer 4</label>
                    <textarea id="answer4" name="answerFour"></textarea>
                </div>
                <div class="box">
                    <label for="question5">Question 5</label>
                    <input type="text" id="question5" name="questionFive">
                </div>
                <div class="box">
                    <label for="answer5">Answer 5</label>
                    <textarea id="answer5" name="answerFive"></textarea>
                </div>
            </div>
        </div>
        <div class="saveBtn mb-5 ">
            <button name="saveChange">Save Change 
                <iconify-icon icon="material-symbols:save"></iconify-icon></button>
        </div>
    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>