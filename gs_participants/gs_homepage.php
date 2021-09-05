<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Green Society TAR UC</title>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="gs_css/gs_homepage.css" rel="stylesheet">
        <link href="gs_css/gs_slideshow.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar">
                <a href="gs_homepage.php">
                    <img src="gs_picture/gs_shortcut_logo.png" class="logo" alt="Green Society logo"/>
                </a>
                
                <div class="navbar-container">
                    <div class="search-container">
                        <form action="gs_search-result.php">
                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    
                    <div class="dropdown">
                        <button class="dropbtn">Announcement<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="gs_article.php">Article</a>
                            <a href="gs_event.php">Event</a>
                        </div>
                    </div>
                    <div class="navlist">
                        <a href="gs_booking.php">Booking</a>
                        <a href="gs_aboutus.php">About us</a>
                        <a href="gs_login.php">Login / Register</a>
                        <a href="gs_profile.php">Profile</a>
                    </div>
                </div>
            </nav>
        </header>
        
        <div class="main-content">
            <div class="slideshow-container">
                <div class="mySlides animated">
                    <div class="slide-number">1/3</div>
                    <img src="gs_picture/beanecowarrier.jpg" rel="ecowarrior" usemap="#map1">

                    <map name="map1">
                        <area shape="default" alt="p1" href="">
                    </map>
                </div>

                <div class="mySlides animated">
                    <div class="slide-number">2/3</div>
                    <img src="gs_picture/sippintea.png" rel="sippintea" usemap="#map2">

                    <map name="map2">
                        <area shape="default" alt="p2" href="">
                    </map>
                </div>

                <div class="mySlides animated">
                    <div class="slide-number">3/6</div>
                    <img src="gs_picture/ses2.jpg" rel="sesion2" usemap="#map3">

                    <map name="map3">
                        <area shape="default" alt="p3" href="">
                    </map>
                </div>

                <a class="slide-prev" onclick="plusSlides(-1)">❮</a>
                <a class="slide-next" onclick="plusSlides(1)">❯</a>
            </div>

            <div class="slide-dot-control">
                <span class="slide-dot" onclick="currentSlide(1)"></span>
                <span class="slide-dot" onclick="currentSlide(2)"></span>
                <span class="slide-dot" onclick="currentSlide(3)"></span>
            </div>

            <script>
            var slideIndex = 1;
            function showSlides() 
            {
                var slides = document.getElementsByClassName("mySlides");
                if (slideIndex > slides.length) {slideIndex = 1;}
                if (slideIndex < 1) {slideIndex = slides.length;}
                for (var i = 0; i < slides.length; i++) 
                {
                    slides[i].style.display = "none";
                }
                slides[slideIndex-1].style.display = "block";
                var dots = document.getElementsByClassName("slide-dot");
                for (var i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" slide-dot-active", "");
                }
                dots[slideIndex-1].className += " slide-dot-active";
            }
            function plusSlides(n) 
            {
                slideIndex += n;
                showSlides();
            }
            function currentSlide(n) {
                slideIndex = n;
                showSlides();
            }
            window.onload = showSlides;
            </script>
            
            
        <footer>
            <div class="footer-content"> 
                <div class="left box">
                    <h2>About us</h2>
                    <div class="content">
                        <p>Green Society TAR UC a platform for the student body to participate in environmental-based events.</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/greensocietytaruckl"><span class="fa fa-facebook-square"></span></a>
                            <a href="mailto:greensocietytaruckl@gmail.com"><span class="fa fa-envelope"></span></a>
                            <a href="https://www.instagram.com/gstaruc/"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Advisors details</h2>
                    <div class="content">
                        <div class="advisor-1">
                            <span class="fa fa-user"></span>
                            <span class="text">Mr. Yogerisham A/L Panir Silvam</span><br/>

                            <span class="fa fa-envelope"></span>
                            <span class="text">yogerishamps@tarc.edu.my</span><br/>
                        </div>

                        <div class="advisor-2">
                            <br><span class="fa fa-user"></span>
                            <span class="text">Mr. Thilip Kumar A/L Moorthy</span><br/>

                            <span class="fa fa-envelope"></span>
                            <span class="text">thilipkumar@tarc.edu.my</span><br/>
                        </div>
                    </div>
                </div>

                <div class="right box">
                    <h2>Contact us</h2>
                    <div class="content">
                        <form action="gs_contact-result.php">
                            <div class="name">
                                <div class="text">Name</div>
                                <input type="text" required>
                            </div>

                            <div class="email">
                                <div class="text">Email</div>
                                <input type="text" required>
                            </div>

                            <div class="msg">
                                <div class="text">Message</div>
                                <textarea rows="6" cols="40" required></textarea>
                            </div>

                            <div class="btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom">
                &copy; 2016 - 2021 Green Society TAR UC | Designed by Song Jia En, Chin Poh Lian, Lee Xi Rouh
            </div>
        </footer>
    </body>
</html>