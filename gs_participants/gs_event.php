<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="gs_css/gs_event.css">
        <link rel="stylesheet" href="gs_css/gs_homepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
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
                        <a href="event.php">Event</a>
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
    <body>
        <div class="myBtnContainer">
            <button class="slide-btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="slide-btn" onclick="filterSelection('2016')"> 2016</button>
            <button class="slide-btn" onclick="filterSelection('2017')"> 2017</button>
            <button class="slide-btn" onclick="filterSelection('2018')"> 2018</button>
            <button class="slide-btn" onclick="filterSelection('2019')"> 2019</button>
            <button class="slide-btn" onclick="filterSelection('2020')"> 2020</button>
            <button class="slide-btn" onclick="filterSelection('2021')"> 2021</button>
        </div>

        <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
        <div class="container">
            <div class="filterDiv 2016">
                <div class="container1">
                    <img class='photo'  src="gs_picture/20161.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20162.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20163.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/#.jpeg" alt="" />
                    <div class="event-text">
                    </div>
                </div>
            </div>
            <div class="filterDiv 2017">
                <div class="container1">
                    <img class='photo'  src="gs_picture/20171.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20172.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/#" alt="" />
                    <img class='photo'  src="gs_picture/#" alt="" />
                    <div class="event-text">
                    </div>

                </div>
            </div>
            <div class="filterDiv 2018"><div class="container1">
                    <img class='photo'  src="gs_picture/20182.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20183.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20185.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20186.jpeg" alt="" />
                    <div class="event-text">
                    </div>
                </div></div>
            <div class="filterDiv 2019"><div class="container1">
                    <img class='photo'  src="gs_picture/20191.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20192.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20193.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20194.jpeg" alt="" />
                    <div class="event-text">
                    </div>
                </div></div>
            <div class="filterDiv 2020"><div class="container1">
                    <img class='photo'  src="gs_picture/20201.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20202.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20203.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20204.jpeg" alt="" />
                    <div class="event-text">
                    </div>
                </div></div>
            <div class="filterDiv 2021"><div class="container1">
                    <img class='photo'  src="gs_picture/20214.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20211.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20212.jpeg" alt="" />
                    <img class='photo'  src="gs_picture/20213.jpeg" alt="" />
                    <div class="event-text">
                    </div>
                </div></div>

        </div>
        <script src="gs_css/event.js"></script>

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