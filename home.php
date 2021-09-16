<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> World of Warcraft Fanmade</title>
    <!--Custom Css-->
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/typing.css">
    <!--Fonts and Icons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/wow.ico">
</head>

<body>

    <!--Navbar Start-->
    <?php 
    include 'common/navbar.html';
    ?>
    <!--Navbar End-->
    
    <!--Main Body Start-->
    <div class="home">

        <?php 
        include 'common/chat.html';
        ?>

        <div class="content">
            <div class="content_home">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean venenatis augue id mattis pretium. Proin bibendum tincidunt eros sed viverra. Donec ac cursus dolor, ut condimentum orci. Nullam sollicitudin elit id molestie cursus. Aliquam vitae hendrerit velit. Curabitur malesuada luctus risus, eget accumsan quam placerat ut. Vestibulum dapibus auctor massa. Pellentesque in aliquet dolor. Ut at blandit nulla. Donec sagittis nibh eget enim dignissim venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse porta ligula lectus, nec consequat purus aliquam et. Aliquam elementum, massa ut dignissim scelerisque, nisi ipsum hendrerit quam, non mattis risus mi bibendum est. Aliquam suscipit convallis hendrerit.
                Morbi hendrerit egestas felis, a ornare tortor pulvinar id. Suspendisse id ligula vitae augue rhoncus hendrerit a vel massa. Nulla volutpat pulvinar magna sit amet aliquet. Nam bibendum lacus diam, in facilisis dui mollis nec. Praesent imperdiet sapien sed lobortis mattis. In ac nunc et elit faucibus maximus rutrum in neque. Donec et semper ante. Sed dolor ipsum, faucibus non faucibus vel, varius in est. Sed accumsan venenatis turpis, et sodales dui vehicula et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla auctor eu mauris quis elementum.
                Proin urna nibh, tempor nec urna sed, consequat viverra erat. Sed diam augue, aliquet et fringilla quis, dictum nec mi. Duis auctor dapibus fringilla. Duis blandit viverra augue nec vehicula. Curabitur et pharetra urna, vel ullamcorper dolor. In ut urna a tellus ultricies blandit. Sed sagittis, lorem ac fringilla tincidunt, tellus est rhoncus nisl, ut blandit nunc ligula iaculis dolor. Aliquam facilisis diam elit, quis tempus ipsum luctus vitae. Mauris a lacus pulvinar, auctor nisl et, aliquam est. Donec sit amet elit arcu. Phasellus placerat feugiat eros vel vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae eros felis. Nam velit turpis, sodales nec commodo quis, consectetur non odio. Suspendisse fringilla ultrices fermentum.
                Aenean tincidunt viverra facilisis. Phasellus at vehicula sapien, ut mollis enim. Vivamus nec nisi eget diam mattis dignissim. Cras aliquam ipsum at nunc fermentum finibus. Suspendisse massa augue, tempor non malesuada et, consequat id risus. Ut tristique fringilla velit at mollis. Phasellus quis quam ex. Donec fringilla lobortis orci sit amet pretium. Donec sit amet accumsan lorem, id feugiat orci.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer et nibh ac enim pharetra mollis quis fermentum lacus. Fusce vehicula leo tempus leo tincidunt eleifend. Integer cursus lacus placerat tellus porta, in semper enim convallis. Etiam dapibus ligula vel lorem consectetur blandit. Mauris pulvinar, ligula et vestibulum luctus, lorem neque mattis dolor, eu ultrices enim dolor sit amet massa. Etiam tincidunt ante et tempor dictum. Suspendisse libero turpis, congue quis iaculis eget, congue at leo.
            </div>
            <div class="social_media">
                <div class="twitter">
                    <div class="twitter_header">
                        <i class="fab fa-twitter"></i>
                        <span>World of Warcraft</span>
                    </div>
                    <div class="timeline">
                        <a class="twitter-timeline" href="https://twitter.com/Warcraft?ref_src=twsrc%5Etfw">Tweets by Warcraft</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    
                </div>
                <div class="twitch">
                    <span class="twitch_header">
                        <i class="fab fa-twitch"></i>
                        <span>World of Warcraft</span>
                    </span>
                    <div class="twitch-video">
                        <iframe
                        src="https://player.twitch.tv/?channel=warcraft&parent=localhost&autoplay=false"
                        frameborder="0"
                        scrolling="no"
                        allowfullscreen="true"
                        height="100%"
                        width="100%">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
        
        
        
 
    </div>
    <!--Main Body End-->
   <!--JS Scripts Start-->
    <script src="js/navbar.js"></script>
    <script src="js/app.js"></script>
    <script src="js/chat.js"></script>
    <!--JS Scripts End-->

</body>

</html>