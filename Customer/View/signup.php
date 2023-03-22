<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!--------bootstrap5-------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------icons link------->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>

    <!-------css links----->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/signup.css">
</head>

<body>
    <div class="container-fluid body">
        <div class="row">
            <div class="col-md-5 d-md-block d-none part1">
                <div class="mb-4">
                    <img src="./resources/img/footerlogo.png" alt="" width="30%">
                </div>
                <div class="mb-5">
                    <img src="./resources/img/Coffee_3D_-_Canva_Elements_Keyword-removebg-preview 1.png" alt="" class="photo2">
                </div>
            </div>
            <div class="col-md-7 col-12 part2">
                <h2 class="mt-5 mb-5">Sign Up</h2>
                <form action="../Controller/signupController.php" method="post">


                    <div class="form-outline form-white mb-5 gp1">
                        <input type="text" class="box fw-bold " placeholder="Name" name="name" require />
                        <iconify-icon icon="mdi:user" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <select class="box fw-bold" aria-label="Default select example" name="gender" require>
                            <option selected class="">Gender</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Other</option>
                        </select>
                        <iconify-icon icon="bx:male-female" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <input type="text" class="box fw-bold " placeholder="Email" name="email" require />
                        <iconify-icon icon="ic:baseline-mail" class="icon1"></iconify-icon>
                    </div>

                    <div class=" form-outline form-white mb-5 gp1">
                        <input type="password" id="typePasswordX" class="box fw-bold " placeholder="PASSWORD" name="password" require />
                        <iconify-icon icon="ic:outline-key" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <select class="box fw-bold" aria-label="Default select example" name="township" require>
                            <option selected class="">Township</option>
                        </select>
                        <iconify-icon icon="material-symbols:location-on" class="icon1"></iconify-icon>
                    </div>


                    <button class="button mb-5 fw-bold" type="submit" name="send">Register</button>
                    <br>

                    <p class="forgot">Already have an account?<a href="./login.php" class="text-dark fw-bold">Sign In</a></p>

                </form>
            </div>
        </div>

    </div>
</body>

</html>