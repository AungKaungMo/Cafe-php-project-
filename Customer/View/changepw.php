<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CangePassword</title>

    <!--------bootstrap5-------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------icons link------->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>

    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/changepw.css">
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
                                <p class="mb-4 new">Create new password</p>
                                <form action="../Controller/createnewController.php" method="post">
                                    <div class=" form-outline form-white mb-4">
                                        <input type="password" class="box fw-bold " placeholder="Comfirm your password" name="newpw1" />
                                    </div>
                                    <div class=" form-outline form-white mb-4">
                                        <input type="password" class="box fw-bold " placeholder="Comfirm your password" name="newpw2" />
                                    </div>

                                    <button class="button mb-5 fw-bold" type="submit" name="send">Change</button>
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