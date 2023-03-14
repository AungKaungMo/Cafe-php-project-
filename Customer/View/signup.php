<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/signup.css">

    <!--------bootstrap5-------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------icons link------->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body>
    <div class="container-fluid body">
        <div class="row">
            <div class="col-md-5 part1">
                <div class="mb-4">
                    <img src="./resources/img/footerlogo.png" alt="" width="30%">
                </div>
                <div class="mb-5">
                    <img src="./resources/img/Coffee_3D_-_Canva_Elements_Keyword-removebg-preview 1.png" alt="" class="photo2">
                </div>
            </div>
            <div class="col-md-7 part2">
                <h2 class="mt-5 mb-5">Sign Up</h2>
                <form action="" method="post">
                    <div class="form-outline form-white mb-5 gp1">
                        <input type="text" id="typeEmailX" class="box fw-bold " placeholder="Name" name="name" />
                        <iconify-icon icon="mdi:user" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp2">
                        <select class="box fw-bold" aria-label="Default select example">
                            <option selected class="">Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                        <iconify-icon icon="bx:male-female" class="icon2"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp3">
                        <input type="text" id="typeEmailX" class="box fw-bold " placeholder="Email" name="name" />
                        <iconify-icon icon="ic:baseline-mail" class="icon3"></iconify-icon>
                    </div>

                    <div class=" form-outline form-white mb-5 gp4">
                        <input type="password" id="typePasswordX" class="box fw-bold " placeholder="PASSWORD" name="password" />
                        <iconify-icon icon="ic:outline-key" class="icon4"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp5">
                        <select class="box fw-bold" aria-label="Default select example">
                            <option selected class="">Township</option>
                        </select>
                        <iconify-icon icon="material-symbols:location-on" class="icon5"></iconify-icon>
                    </div>

                    <button class="button mb-5 fw-bold" type="submit" name="send">Log in</button>
                    <br>

                    <p class="forgot">Already have an account?<a href="#" class="text-dark fw-bold">Sign In</a></p>
            </div>
            </form>
        </div>
    </div>

    </div>
</body>

</html>