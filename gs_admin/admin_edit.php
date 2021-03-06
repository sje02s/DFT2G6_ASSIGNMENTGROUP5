<?php
include 'dbConnector.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Homepage</title>
        <link href="admin_css/admin.css" rel="stylesheet"/>
        <link href="admin_picture/shortcut_logo.png" rel="shortcut icon"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="admin-panel clearfix">
            <div class="slidebar">
                <div class="logo">
                    <img src='admin_picture/shortcut_logo.png' alt='shortcut logo' width='145px' height="145px">
                </div>
                <ul>
                    <li><a href="dash">dashboard</a></li>
                    <li><a href="admin_edit.php">Edit Profile</a></li>
                    <li><a href="admin_message.php">Question</a></li>
                    <li><a href="editeventlisting.php">Edit Event</a></li>
                </ul>
            </div>

            <form action="edit.php"method="POST">
                <div class="update-field">
                    <label for="studID">Student ID</label>
                    <input type="text" name="studID" required>
                    <button type="submit" class="update-btn" name="cmpID">Submit</button><br/>
                </div>
            </form>
            <?php
            if (isset($_POST['cmpID'])) {
                $id = isset($_POST['studID']) ? trim($_POST['studID']) : null;

                $dbConnection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                $selectCommand = "SELECT StudentID FROM profile";

                $results = mysqli_query($dbConnection, $selectCommand);

                while ($row = mysqli_fetch_array($results)) {
                    if ($id == $row['StudentID']) {
                        ?>

                        <div class="main">
                            <div class="update-box">

                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="studName">Student Name</label>
                                        <input type="text" name="studName" required>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>

                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="gender">Gender</label>
                                        <input type="radio" name="gender" id="M" value="M" />
                                        <label for="M">Male</label>

                                        <input type="radio" name="gender" id="F" value="F" />
                                        <label for="F">Female</label>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" required>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="mobile">Mobile No</label>
                                        <input type="tel" name="mobile" pattern="" required>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="position">Position</label>
                                        <select id="position" name="position">
                                            <option value="member">Member</option>
                                            <option value="publicity">Publicity Director</option>
                                            <option value="activity">Acitivity Director</option>
                                            <option value="auditor">Auditor</option>
                                            <option value="v-treasurer">Vice Treasurer</option>
                                            <option value="treasurer">Treasurer</option>
                                            <option value="v-secretary">Vice Secretary</option>
                                            <option value="secretary">Secretary</option>
                                            <option value="v-president">Vice President</option>
                                            <option value="president">President</option>
                                            <option value="advisor">Advisor</option>
                                        </select>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="pwd">Password</label>
                                        <input type="password" id="pwd" name="pwd" required>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="faculty">Faculty</label>
                                        <select id="faculty" name="faculty">
                                            <option value="FAFB">FAFB</option>
                                            <option value="FOAS">FOAS</option>
                                            <option value="FOCS">FOCS</option>
                                            <option value="FOBE">FOBE</option>
                                            <option value="FOET">FOET</option>
                                            <option value="FCCI">FCCI</option>
                                            <option value="FSSH">FSSH</option>
                                            <option value="CPUS">CPUS</option>
                                            <option value="CPSR">CPSR</option>
                                        </select>
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="programme">Programme</label>
                                        <input type="text" name="programme">
                                        <button type="submit" class="update-btn" name="updateName">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="year">Year</label>
                                        <select id="year" name="year">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <button type="submit" class="update-btn" name="updateYear">Update</button><br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="sem">Sem</label>
                                        <select id="year" name="year">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <button type="submit" class="update-btn" name="updateSem">Update</button>
                                        <br/>
                                    </div>
                                </form>
                                <form action="edit.php"method="POST">
                                    <div class="update-field">
                                        <label for="grp">Group</label>
                                        <input type="text" name="grp">
                                        <button type="submit" class="update-btn" name="updateGroup">Update</button>
                                        <br/>
                                    </div>

                                </form>
                            </div>

                        </div>

            <?php
        } else {
            echo "id not found";
        }
    }
}
?>


        </div>
        <ul class="statusbar">
            <li class="logout"><a href="?????????">Logout</a></li>
        </ul>
    </div>
</div>

</body>
</html>