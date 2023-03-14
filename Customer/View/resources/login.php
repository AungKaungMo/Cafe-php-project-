<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-------css links----->
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/login.css">

    <!--------bootstrap5-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                                <h2 class="fw-bold mb-1 text-white letter">SignIn on</h2>
                                <img src="./img/footerlogo.png" alt="" class="mb-4" width="30%">
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
                                    <p class="forgot">Forgot Password? <a href="#" class="text-white fw-bold">Click Here</a></p>
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