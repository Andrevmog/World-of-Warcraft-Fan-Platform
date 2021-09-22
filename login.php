<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> World of Warcraft Fanmade</title>
    <!--Custom Css-->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/side.css">
    <!--Fonts and Icons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--Site Icon-->
    <link rel="shortcut icon" type="image/png" href="img/wow.ico">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Body Start-->
    <div class="container">
        <!--Background Image-->
        <img class="wave" src="img/loginteste.png">
        <!--Login Windown Start-->
        <div class="login_container">
            <form class="login_form" action="login.php">
                <!--Image Profile-->
                <img class="avatar" src="img/perfil.jpg">
                <!--Welcome Text-->
                <h2>Welcome</h2>
                <!--Username Box Start-->
                <div class="input-div one">
                    <!--Icon-->
                    <div class="i">
                        <i class='bx bx-user'></i>
                    </div>
                    <!--User Input-->
                    <div>
                        <h5>Username</h5>
                        <input class="login_input" type="text">
                    </div>
                </div>
                <!--Username Box End-->
                <!--Password Box Start-->
                <div class="input-div two">
                    <!--Icon-->
                    <div class="i">
                        <i class='bx bx-lock-alt'></i>
                    </div>
                    <!--User Input-->
                    <div>
                        <h5>Password</h5>
                        <input class="login_input" type="password">
                    </div>
                </div>
                <!--Password Box End-->
                <a class="forgot" href="#">Forgot Password?</a>
                <input type="submit" class="btn_forgot" value="Login">
            </form>
        </div>
        <!--Login Windown End-->
    </div>
    <!--Main Body End-->
    <!--JS Scripts Start-->
    <script type="text/javascript" src="js/login.js"></script>
    <!--JS Scripts End-->
</body>

</html>