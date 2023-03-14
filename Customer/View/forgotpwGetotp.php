<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Otp</title>
    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/forgotpwGetotp.css">

    <!--------bootstrap5-------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------icons link------->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body class="back">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card login text-white" style="border-radius: 1rem;">
                        <div class="card-body text-center">
                            <div class="mb-md-2 mt-md-5 pb-3">
                                <img src="./resources/img/footerlogo.png" alt="" class="mb-4" width="30%">
                                <p class="mb-4 forgot ">Forgot password</p>
                                <form action="" method="post">
                                    <div class="form-outline divbox form-white mb-4">
                                        <input type="emal" id="typeEmailX" class="box fw-bold " placeholder="Enter your email" name="email" />
                                        <button class="getotp fw-bold">Get Code</button>
                                    </div>
                                    <div class=" form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="box1 fw-bold " placeholder="Enter Code- - - - - -" name="code" />
                                    </div>
                                    <button class="button mb-5 fw-bold" type="submit" name="send"> <a href="./changepw.php">Continue</a> </button>
                                    <br>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>