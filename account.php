<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lipstick</title>
        <!--css-->
        <link rel="stylesheet" href="css/account.css" />
        <!--icon-->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <!--swiper-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <!--form register-->
                <form action="php/register.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bx bxl-facebook-circle"></i></a>
                        <a href="#" class="social"><i class="bx bxl-google"></i></a>
                        <a href="#" class="social"><i class="bx bxl-instagram"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" name="name_tk" placeholder="Name" />
                    <input type="text" name="email_tk" placeholder="Email" />
                    <input type="password" name="password_tk" placeholder="Password" />
                    <button>Sign Up</button>
                    <a href="home.php"> <i class="bx bx-home"></i> </a>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <!--from login-->
                <form action="php/login.php" method="post" hidden>
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bx bxl-facebook-circle"></i></a>
                        <a href="#" class="social"><i class="bx bxl-google"></i></a>
                        <a href="#" class="social"><i class="bx bxl-instagram"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="text" name="email-signin" placeholder="Email" />
                    <input type="password" name="password-signin" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                    <a href="home.php"> <i class="bx bx-home"></i> </a>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>
                            To keep connected with us please login with your personal info
                        </p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="loader-container">
            <img src="images/loader.gif" alt="" />
        </div>
        <script src="js/account.js"></script>
    </body>

</html>