<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlogin</title>
    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/adminlogin.css">

    <!---bootstrap link----->
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
                            <div class="mb-md-3 mt-md-5 pb-3">
                                <img src="./resources/img/cafeLogo 1.png" alt="" class="mb-5" width="50%">
                                <form action="" method="post">
                                    <div class="form-outline form-white mb-4 gp1">
                                        <input type="email" id="typeEmailX" class="box fw-bold " placeholder="EMAIL" name="email" />
                                        <iconify-icon icon="ic:baseline-mail" class="icon1"></iconify-icon>
                                    </div>
                                    <div class=" form-outline form-white mb-4 gp2">
                                        <input type="password" id="typePasswordX" class="box fw-bold " placeholder="PASSWORD" name="password" />
                                        <iconify-icon icon="ic:outline-key" class="icon2"></iconify-icon>
                                    </div>
                                    <button class="button mb-5 fw-bold" type="submit" name="send">Log in</button>
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