<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" charset="utf-8" content="text/html>
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="gs_css/gs_register.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="register">
            <h1>Register</h1>
            <form action="gs_register_result.php" method="post">
                <div class="register-input">
                    <div class="left-input">
                        <label for="fullName">Full Name</label>
                        <input type="text" name="fullName" maxlength="70" required><br/>

                        <label for="studID">Student ID</label>
                        <input type="text" name="studID" maxlength="10" required><br/>

                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" id="M" value="M" required=""/>
                        <label for="M">Male</label>
                        
                        <input type="radio" name="gender" id="F" value="F" required/>
                        <label for="F">Female</label><br/>

                        <label for="email">Email</label>
                        <input type="email" name="email" required><br/>

                        <label for="mobile">Mobile No</label>
                        <input type="tel" name="mobile" required><br/>

                        <label for="position">Position</label>
                        <select id="position" name="position" class="required">
                            <option value=""> - Choose an option - </option>
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
                        </select><br/>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" maxlength="16" required><br/>
                    </div>
                    <div class="right-input">
                        <label for="faculty">Faculty</label>
                        <select id="faculty" name="faculty" class="required">
                            <option value=""> - Choose an option - </option>
                            <option value="FAFB">FAFB</option>
                            <option value="FOAS">FOAS</option>
                            <option value="FOCS">FOCS</option>
                            <option value="FOBE">FOBE</option>
                            <option value="FOET">FOET</option>
                            <option value="FCCI">FCCI</option>
                            <option value="FSSH">FSSH</option>
                            <option value="CPUS">CPUS</option>
                            <option value="CPSR">CPSR</option>
                        </select><br/>

                        <label for="programme">Programme</label>
                        <input type="text" name="programme" maxlength="3" required><br/>

                        <label for="year">Year</label>
                        <select id="year" name="year" class="required">
                            <option value=""> - Choose an option - </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br/>

                        <label for="sem">Sem</label>
                        <select id="sem" name="sem" class="required">
                            <option value=""> - Choose an option - </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br/>

                        <label for="grp">Group</label>
                        <input type="text" name="grp" required=""><br/>

                        <label for="pwd">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" maxlength="16" required=""><br/>
                    </div>
                </div>
                <button type="submit" name="submit" class="register-btn">Register</button><br/>
            </form>
        </div>
    </body>
</html>