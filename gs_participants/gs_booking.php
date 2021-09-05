<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listing</title>
        <link href="gs_css/gs_booking.css" rel="stylesheet"/>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="gs_css/gs_homepage.css" rel="stylesheet">
        <script type ="text/javascript" src="listingdeeeeer.js"></script>
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

        <h1 class="title">Booking Events</h1>
        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Be An Eco Warrior</span>
                    <img class="choice-image" src="gs_picture/beanecowarrier.jpg">

                    <div class="choice-details">
                        <span class="choice-des">A virtual competition to raise environmental awareness and spread green messages as well as allow our fellow participants to learn how to be sustainable and environmentally friendly</span>
                    </div>

                    <a class="button" href="#popup1">View Detail</a>


                    <div id="popup1" class="overlay">

                        <div class="popup">
                            <h2>Be An Eco Warrior</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/beanecowarrier.jpg">
                                Date : 16 July 2021<br>
                                Time : 8-9.30PM<br>
                                Platform : KAHOOT<br>

                                <button class="book" onclick="Function()">BOOKING</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Sippin' Tea with Green Society 2021</span>
                    <img class="choice-image" src="gs_picture/sippintea.png">

                    <div class="choice-details">
                        <span class="choice-des">A virtual gathering to introduce our current committees to our new members also to close bond with our new members and promote our upcoming event(s), and most importantly, to have lots of fun!</span>                </div>
                </div>

                <a class="button" href="#popup2">View Detail</a>


                <div id="popup2" class="overlay">

                    <div class="popup">
                        <h2>Sippin' Tea with Green Society 2021</h2>
                        <a class="close" href="#">&times;</a>

                        <div class="content">
                            <img class="content-image" src="gs_picture/sippintea.png">
                            Date : 10 July 2021<br>
                            Time : 2-3PM<br>
                            Platform : Google Meet<br>

                            <button class="book" onclick="Function()">BOOKING</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">River and River Pollution</span>
                    <img class="choice-image" src="gs_picture/ses1.jpg">

                    <div class="choice-details">
                        <span class="choice-des">River is considered a lifeline of civilization, but why do we care less about rivers? In this talk, we will be exploring the issues regarding rivers in Malaysia.</span>
                    </div>

                    <a class="button" href="#popup3">View Detail</a>


                    <div id="popup3" class="overlay">

                        <div class="popup">
                            <h2>River and River Pollution</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/ses1.jpg">
                                Date : 3 February 2021<br>
                                Time : 8PM<br>
                                Platform : Google Meet<br>

                                <button class="book" onclick="Function()">BOOKING</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Climate Change & Climate Emergency</span>
                    <img class="choice-image" src="gs_picture/ses2.jpg">

                    <div class="choice-details">
                        <span class="choice-des">Why is the flood situation in Malaysia getting worse every year?Will climate change cause famine and wars? This seminar introduces the issue of climate change, including how it will affect the lives of Malaysians.</span>
                    </div>

                    <a class="button" href="#popup4">View Detail</a>


                    <div id="popup4" class="overlay">

                        <div class="popup">
                            <h2>Climate Change&Climate Emergency</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/ses2.jpg">
                                Date : 10 February 2021<br>
                                Time : 8PM<br>
                                Platform : Google Meet<br>

                                <button class="book" onclick="Function()">BOOKING</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Sustainable Lifestyle</span>
                    <img class="choice-image" src="gs_picture/ses3.jpg">

                    <div class="choice-details">
                        <span class="choice-des">Sustainable Lifestyle is concept of reducing an individual's use of Earth's natural resources. But how can we apply it in our daily life?</span>
                    </div>

                    <a class="button" href="#popup5">View Detail</a>


                    <div id="popup5" class="overlay">

                        <div class="popup">
                            <h2>Sustainable Lifestyle</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/ses1.jpg">
                                Date : 17 February 2021<br>
                                Time : 8PM<br>
                                Platform : Google Meet<br>

                                <button class="book" onclick="Function()">BOOKING</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Gibbon Conservation</span>
                    <img class="choice-image" src="gs_picture/ses4.jpg">

                    <div class="choice-details">
                        <span class="choice-des">Gibbons, cute and agile. Also known as Malaysia's Only Singing Apes. Unfortunately, they are listed as endangered under IUCN. But why? And how can we help them?</span>
                    </div>

                    <a class="button" href="#popup6">View Detail</a>


                    <div id="popup6" class="overlay">

                        <div class="popup">
                            <h2>Gibbon Conservation</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/ses4.jpg">
                                Date : 24 February 2021<br>
                                Time : 8PM<br>
                                Platform : Google Meet<br>

                                <button class="book" onclick="Function()">BOOKING</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="type">
            <div class="events">
                <div class="choice">
                    <span class="choice-title">Environmental Aspirations Sharing</span>
                    <img class="choice-image" src="gs_picture/ses5.jpg">

                    <div class="choice-details">
                        <span class="choice-des">Sharing Green Society's members and TAR UC students' view and aspiration for environmental issues. Students will share their hopes for the future of environmentalism in Malaysia.</span>
                    </div>

                    <a class="button" href="#popup7">View Detail</a>


                    <div id="popup7" class="overlay">

                        <div class="popup">
                            <h2>Environmental Aspirations Sharing</h2>
                            <a class="close" href="#">&times;</a>

                            <div class="content">
                                <img class="content-image" src="gs_picture/ses5.jpg">
                                Date : 3 March 2021<br>
                                Time : 8PM<br>
                                Platform : Google Meet<br>

                                <button class="book" onclick="Function()">BOOKING</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script>
            function Function() {
                confirm("Click OK to confirm booking");
            }
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