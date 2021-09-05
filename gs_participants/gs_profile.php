<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="gs_css/gs_profile.css">
        <link rel="stylesheet" href="gs_css/gs_homepage.css">

        <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@700&family=Lora:ital@1&family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Green Society Profile</title>
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
        <div class="row">

            <div class="col-xs-12 col-sm-3 center">
                <span class="profile-picture">
                    <img class ="male-profile" src="gs_picture/boyprofile.png">
                </span>
            </div>


            <div class="col-xs-12 col-sm-9">
                <div  class="middle"><b>JACKSON WANG LI HONG</b>
                    <a href="studUpdate.php">edit</a>
                </div>


                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">sell</i>
                                <b>Student ID</b>
                            </div>
                            <p>20WMD02288</p>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">email</i>
                                <b>Email</b>
                            </div>
                            <p>jacksonwanglh-wm20@student.tarc.edu.my</p>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">school</i>
                                <b>Faculty</b>
                            </div>
                            <p>Faculty of Computing  And Information Technology</p>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">library_books</i>
                                <b>Programme</b>
                            </div>
                            <p>DFT - Diploma in Information Technology</p>
                        </div>
                    </div>


                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">groups</i>
                                <b>Tutorial Group</b>
                            </div>
                            <p>6</p>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <div class="material-block">
                                <i class="material-icons">call</i>
                                <b>Mobile No</b>
                            </div>
                            <p>017-7110309</p>
                        </div>
                    </div>                           


                </div>

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