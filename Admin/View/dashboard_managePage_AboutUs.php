<?php
include "./resources/shared/dashboard.php";
?>
<link rel="stylesheet" href="./resources/css/dashboard_managePage.css">
<link rel="stylesheet" href="./resources/css/dashboard_managePage_AboutUs.css">

</head>


<?php
    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","cafe_project_db");

    function connect(){
        $db=mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_errno()){
            echo "Database Connection Fail!";

        }else{
            return $db;
        }
    }

    if(isset($_POST["submit"])){
        $info=$_POST["text"];
        $file=$_FILES["file"];

    }

    function insert($info,$file){
        $db=connect();
        $time=getTimeNow();
        $qry="INSERT INTO homeabt(paragraph,photo,create_date) VALUES ('$info','$file','$time')";

        $result=mysqli_query($db,$qry);

        if($result==1){
            echo '<div class="alert alert-warning" role="alert">
            Complete!
          </div>';
        } else{
            echo '<div class="alert alert-warning" role="alert">
            Fail!
          </div>';
        }

    }

    insert($info,$file);

    function getTimeNow(){
        return date("Y-m-d",time());
    }


?>

<body>

    <?php
    include "./resources/shared/dashboard_managePage.php";
    ?>
    <form method="post" enctype="multipart/form-data">

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="my-3">

                <div class="box mt-5">
                    <label for="paragraph">Paragraph</label>
                    <textarea id="paragraph" name="text" type="text"></textarea>
                </div>
                <div class="box">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" accept="image/png, image/jpeg" name="file">
                </div>
            </div>
        </div>
        <div class="saveBtn ">
            <button name="submit" type="submit">Save Change 
                <iconify-icon icon="material-symbols:save"></iconify-icon>
            </button>
        </div>
    </form>
    <!----------  Ending Tab ------>
    </div>
    </div>
    <script src="./resources/js/dashboard.js"></script>
    <script src="./resources/js/dashboard_managePage.js"></script>
</body>

</html>