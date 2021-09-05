<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="admin_css/admin_homepage.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script>
            function openSlideMenu()
            {
                document.getElementById('menu').style.width = '220px';
                document.getElementById('nav').style.marginLeft = '220px';
            }
            function closeSlideMenu()
            {
                document.getElementById('menu').style.width = '0';
                document.getElementById('nav').style.marginLeft = '0';
            }
        </script>
    </head>
    <body>
        <div id="nav">
            <span class="slide">
                <a href="#" onclick="openSlideMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </span>

            <div id="menu" class="navList">
                <a href="#" class="close" onclick="closeSlideMenu()">
                    <i class="fa fa-times"></i>
                </a>

                <div class="section">
                    <a href="#">Dashboard</a>
                    <a href="#">Edit events</a>
                    <a href="#">Edit profile</a>
                    <a href="#">Question</a>
                </div>
            </div>
            
            <h1>Dashboard Content</h1>
        </div>
    </body>
</html>