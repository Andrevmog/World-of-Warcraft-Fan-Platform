<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> World of Warcraft Fanmade</title>
    <!--Custom Css-->
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/mounts.css">
    <!--Fonts and Icons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/wow.ico">
</head>

<body>

    <!--Navbar Start-->
    <?php
    include 'common/navbar.html';
    ?>
    <!--Navbar End-->

    <!--Main Body Start-->
    <div class="mount_content">
        <div class="header">
            <div class="header_name">
                Mounts
            </div>
            <div class="header_sub">
                Home / Mounts
            </div>
        </div>

        <div class="search_bar">
            <div class="search">
                <input type="text" class="search_input" placeholder="Insert a mount name...">
                <input type="submit" class="btn_search" value="Search">
            </div>
            
        </div>
        

    </div>
    <!--Main Body End-->

    <!--JS Scripts Start-->
    <script src="js/navbar.js"></script>
    <!--JS Scripts End-->

</body>

</html>