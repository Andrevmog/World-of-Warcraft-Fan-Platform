<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> World of Warcraft Fanmade</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/side.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/wow.ico">
</head>

<body>
    <div class="container">
        <img class="wave" src="img/loginteste.png">
        <div class="login_container">
            <form class="login_form" action="login.php">
                <img class="avatar" src="img/perfil.jpg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="login_input" type="text">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class='bx bx-lock-alt'></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="login_input" type="password">
                    </div>
                </div>
                <a class="forgot" href="#">Forgot Password?</a>
                <input type="submit" class="btn_forgot" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>

</body>

</html>