<?php
session_start();
?>

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
    <div class="container-fluid">
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
                        <input type="text" class="box fw-bold " placeholder="Name" name="name" required />
                        <iconify-icon icon="mdi:user" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <select class="box fw-bold" aria-label="Default select example" name="gender" required>
                            <option selected class="">Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <iconify-icon icon="bx:male-female" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <input type="text" class="box fw-bold " placeholder="Email" name="email" required />
                        <iconify-icon icon="ic:baseline-mail" class="icon1"></iconify-icon>
                        <p class="text-danger">
                            <?php
                            if (isset($_SESSION["signuperror"])) {
                                echo  $_SESSION["signuperror"];
                            }
                            ?>
                        </p>
                    </div>

                    <div class=" form-outline form-white mb-5 gp1">
                        <input type="password" id="typePasswordX" class="box fw-bold " placeholder="PASSWORD" name="password" required />
                        <iconify-icon icon="ic:outline-key" class="icon1"></iconify-icon>
                    </div>

                    <div class="form-outline form-white mb-5 gp1">
                        <select class="box fw-bold" aria-label="Default select example" name="township" required>
                            <option selected value="1">Ahlon</option>
                            <option value="2">Bahan</option>
                            <option value="3">Dagon</option>
                            <option value="4">Hlaing</option>
                            <option value="5">Kamayut</option>
                            <option value="6">Kyauktada</option>
                            <option value="7">Kyimyindaing</option>
                            <option value="8">Lanmadaw</option>
                            <option value="9">Latha</option>
                            <option value="10">Mayangon</option>
                            <option value="11">Pabedan</option>
                            <option value="12">Sanchaung</option>
                            <option value="13">Botataung</option>
                            <option value="14">Dagon Seikkan</option>
                            <option value="15">Dawbon</option>
                            <option value="16">Mingala Taungnyunt</option>
                            <option value="17">East(New Dagon)</option>
                            <option value="18">West(New Dagon)</option>
                            <option value="19">North(New Dagon)</option>
                            <option value="20">South(New Dagon)</option>
                            <option value="21">North Okkalapa</option>
                            <option value="22">South Okkalapa</option>
                            <option value="23">Pazundaung</option>
                            <option value="24">Tamwe</option>
                            <option value="25">Thaketa</option>
                            <option value="26">Thingangyun</option>
                            <option value="27">Yankin</option>
                            <option value="28">Insein</option>
                            <option value="29">Hlaingthaya</option>
                            <option value="30">Mingaladon</option>
                            <option value="31">Yankin</option>
                            <option value="32">Insein</option>
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