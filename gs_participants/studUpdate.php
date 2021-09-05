<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../CPLassignment/admin/dbConnector.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="studUpdate.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="form-box">
            <form action="studUpdate.php"method="POST">
                <div class="update-field">
                    <label for="studID">Student ID</label>
                    <input type="text" name="studID" required>
                    <button type="submit" class="cmp-btn" name="cmpID">Submit</button><br/>
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



            <?php
        } else {
            echo "<div class='error'>ID not found</div>";
        }
    }
}
?>
        </div>
    </body>
</html>