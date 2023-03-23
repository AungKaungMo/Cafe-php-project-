<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/shoplogin.css">

    <!--------bootstrap5-------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------icons link------->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body class="back">
    <form method="post" action="../Controller/shopLoginController.php">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card login text-white" style="border-radius: 1rem;">
                        <div class="card-body text-center">
                            <div class="mb-md-3 mt-md-5 pb-3">
                                <h2 class="fw-bold mb-1 text-white letter">SignIn on</h2>
                                <img src="./resources/img/footerlogo.png" alt="" class="mb-4" width="30%">
                                <p class="text-danger fw-bold"><?php echo $_SESSION["shopEmail"].''.$_SESSION["shopPassword"] ?></p>
                                <form action="" method="post">
                                    <div class="form-outline form-white mb-4 gp1">
                                        <input type="email" id="typeEmailX" class="box fw-bold " placeholder="EMAIL" name="email" required/>
                                        <iconify-icon icon="ic:round-email" class="icon1"></iconify-icon>
                                    </div>
                                    <div class=" form-outline form-white mb-4 gp1">
                                        <input type="password" id="typePasswordX" class="box fw-bold" placeholder="PASSWORD" name="password" required/>
                                        <iconify-icon icon="material-symbols:key-rounded" class="icon1"></iconify-icon>
                                    </div>
                                    <button class="button mb-5 fw-bold" type="submit" name="logIn">Log in</button>
                                    <br>
                                    <p class="forgot">Forgot Password? <a href="#" class="text-white fw-bold">Click Here</a></p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </form>
</body>

</html>