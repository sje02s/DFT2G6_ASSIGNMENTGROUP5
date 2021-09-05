<?php
    session_start();
?>

<?php
    // Return an array of all gender.
    function getGender()
    {
        return array(     //key >= value
            'Female' => 'Female',
            'Male' => 'Male',
        );
    }
    
    // Return an array of all position.
    function getPosition()
    {
        return array(
            'Member' => 'Member',
            'Publicity Director' => 'Publicity Director',
            'Acitivity Director' => 'Acitivity Director',
            'Auditor' => 'Auditor',
            'Vice Treasurer' => 'Vice Treasurer',
            'Treasurer' => 'Treasurer',
            'Vice Secretary' => 'Vice Secretary',
            'Secretary' => 'Secretary',
            'Vice President' => 'Vice President',
            'President' => 'President',
            'Advisor' => 'Advisor',
        );
    }
    
    // Return an array of all faculty.
    function getFaculty()
    {
        return array(     //key >= value
            'FAFB' => 'Faculty of Accountancy, Finance and Business',
            'FOAS' => 'Faculty of Applied Sciences',
            'FOCS' => 'Faculty of Computing and Information Technology',
            'FOBE' => 'Faculty of Built Environment',
            'FOET' => 'Faculty of Engineering and Technology',
            'FCCI' => 'Faculty of Communication & Creative Industries',
            'FSSH' => 'Faculty of Social Science and Humanities',
            'CPUS' => 'Centre for Pre-University Studies',
            'CPSR' => 'Centre for Postgraduate Studies and Research',
        );
    }
    
    function detectInputError()
    {
        // Global Variables
        global $fullName, $studID, $gender, $email, $mobile, $password, $programme, $grp, $confirmPassword;
        
        // For holding error messages.
        $error = array();
        
        // Full Name Validation
        if ($fullName == null)
        {
            $error['fullName'] = 'Nameless? Please enter your <strong>full name</strong>.';
        }
        // EXTRA: To prevent hacks.
        else if (strlen($fullName) > 70)
        {
            $error['fullName'] = 'Your <strong>full name</strong> is too long. It must be less than or equal 70 characters.';
        }
        else if (!preg_match('/^[A-Za-z @,\'\.\-\/]+$/', $fullName))
        {
            $error['fullName'] = 'There are invalid characters in your <strong>full name</strong>. Only alphabets and whitespace are allowed.';
        }
        
        // Student ID Validation
        if ($studID == null)
        {
            $error['studID'] = 'Please enter <strong>Student ID</strong>.';
        }
        // EXTRA: To prevent hacks.
        else if (strlen($studID) > 10)
        {
            $error['studID'] = 'Your <strong>student ID</strong> is too long. It must be less than or equal 10 characters.';
        }
        else if (!preg_match('/^\d{2}[A-Z]{3}\d{5}$/', $studID))
        {
            $error['studID'] = 'There are invalid characters in your <strong>student ID</strong>. Valid format is 99XXX99999';
        }
        
        // gender
        if ($gender == null)
        {
            $error['gender'] = 'Unisex? Please select your <strong>gender</strong>.';
        }
        // EXTRA: To prevent hacks.
        else if (!preg_match('/^[MF]$/', $gender))
        {
            $error['gender'] = '<strong>Gender</strong> can only be either Male or Female.';
        }
        
        // Email Validation
        if ($email == null)
        {
            $error["email"] = 'Please enter your <strong>Email Address</strong>.';
        }
        else if (strlen($email) > 50) // Prevent hacks.
        {
            $error["email"] = '<strong>Email Address</strong> must not more than 50 characters.';
        }

        else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {            
            $error["email"] = '<strong>Email Address</strong> is of invalid format.';
        }
        
        // Mobile No Validation
        if ($mobile == null)
        {
            $error['mobile'] = 'Please enter your <strong>mobile no</strong> number.';
        }
        // EXTRA: To prevent hacks.
        else if (!preg_match('/^01\d-\d{8}$/', $mobile))
        {
            $error['mobile'] = 'Your <strong>mobile no</strong> number is invalid. Format: 999-99999999 and starts with 01.';
        }
        
        // Password Validation
        if ($password == null)
        {
            $error["password"] = 'Please enter your <strong>Password</strong>.';
        }
        else if (strlen($password) < 8 || strlen($password) > 16)
        {
            $error["password"] = '<strong>Password</strong> must between 8 to 16 characters.';
        }
        else if (!preg_match('/^\w+$/', $password))
        {
            $error["password"] = '<strong>Password</strong> must contain only alphabet, digit and underscore.';
        }
        
        // Programme validation
        if ($programme == null)
        {
            $error["programme"] = 'Please enter your <strong>programme</strong>.';
        }
        else if (!preg_match('/[A-Z]{3}$/', $programme))
        {
            $error["programme"] = '<strong>Programme</strong> just contain 3 alphabet.';
        }
        
        // Tutorial Group Validation
        if ($grp == null)
        {
            $error['grp'] = 'Nameless? Please enter your <strong>tutorial group</strong>.';
        }
        // EXTRA: To prevent hacks.
        else if ($grp > 30)
        {
            $error['grp'] = 'Your <strong>tutorial group</strong> must not more than 30';
        }
        
        // Confirm Password Validation
        if ($confirmPassword == null)
        {
            $error["confirmPassword"] = 'Please enter your <strong>Confirm Password</strong>.';
        }
        else if (strlen($confirmPassword) < 8 || strlen($confirmPassword) > 16)
        {
            $error["confirmPassword"] = '<strong>Confirm Password</strong> must between 8 to 16 characters.';
        }
        else if ($confirmPassword != $password)
        {
            $error["confirmPassword"] = '<strong>Confirm Password</strong> must match with your password.';
        }
               
        return $error;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Result</title>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="gs_css/gs_register.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="register">
            <h1>Register</h1>
            <?php
                $fullName = '';
                $studID = '';
                $gender = '';
                $email = ''; 
                $mobile = '';
                $position = '';
                $password = ''; 
                $faculty = '';
                $programme = ''; 
                $year = '';
                $sem = '';
                $grp = ''; 
                $confirmPassword = '';
            
                if (!empty($_POST)) // Something posted back.
                {
                    $fullName = trim($_POST['fullName']);
                    $studID = strtoupper(trim($_POST['studID']));
                    $gender = trim($_POST['gender']);
                    $email = trim($_POST['email']); 
                    $mobile = trim($_POST['mobile']);
                    $position  = $_POST['position']; // It is an array.
                    $password = trim($_POST['password']);
                    $faculty  = $_POST['faculty']; // It is an array.
                    $programme = strtoupper(trim($_POST['programme'])); 
                    $year = $_POST['year'];
                    $sem = $_POST['sem'];
                    $grp = trim($_POST['grp']); 
                    $confirmPassword = trim($_POST['confirmPassword']);
                
                    $error = detectInputError();
                    
                    if (empty($error))
                    {
                        printf('
                            <div class="info">
                                Dear <strong>%s</strong>, your account has been created.
                            </div>', $fullName);

                        // Reset fields.
                        $fullName = $studID = $gender = $email = $mobile = $position = $faculty = $programme = $year = $sem = $grp = $password = $confirmPassword = null;
                    }
                    else
                    {
                        echo '<ul class="error">';
                        foreach ($error as $value)
                        {
                            echo "<li>$value</li>";
                        }
                        echo '</ul>';
                    }
                }
                
                include 'gs_dbcon.php';
                
                if(isset($_POST['submit'])) {
                    $fullName = mysqli_real_escape_string($con ,$_POST['fullName']);
                    $studID = mysqli_real_escape_string($con ,$_POST['studID']);
                    $gender = mysqli_real_escape_string($con ,$_POST['gender']);
                    $email = mysqli_real_escape_string($con ,$_POST['email']); 
                    $mobile = mysqli_real_escape_string($con ,$_POST['mobile']);
                    $position  = mysqli_real_escape_string($con ,$_POST['position']); // It is an array.
                    $password = mysqli_real_escape_string($con ,$_POST['password']);
                    $faculty  = mysqli_real_escape_string($con ,$_POST['faculty']); // It is an array.
                    $year = mysqli_real_escape_string($con ,$_POST['year']);
                    $sem = mysqli_real_escape_string($con ,$_POST['sem']);
                    $programme = mysqli_real_escape_string($con ,$_POST['programme']);
                    $grp = mysqli_real_escape_string($con ,$_POST['grp']); 
                    $confirmPassword = mysqli_real_escape_string($con ,$_POST['confirmPassword']);
                }
                
                $pass = password_hash($password, PASSWORD_BCRYPT);
                $cpass = password_hash($confirmPassword, PASSWORD_BCRYPT);

                $emailquery = " select * from registration where email = '$email'";
                $query = mysqli_query($con, $emailquery);

                $emailcount = mysqli_num_rows($query);

                if($emailcount > 0) {
                    echo "Email already exists.";
                } else {
                    if($password === $confirmPassword) {
                        $insertquery = "insert into registration(fullName, studID, gender, email, mobile, position, faculty, programme, year, sem, grp, password) values('$fullName','$studID','$gender','$email','$mobile','$position','$faculty','$programme','$year','$sem','$grp','$pass')";

                        $iquery = mysqli_query($con, $insertquery);
                        
                        if($iquery) {
                            ?>
                                <script>
                                    alert("Inserted Successful");
                                </script>
                            <?php
                        }else {
                            ?>
                                <script>
                                    alert("No Inserted");
                                </script>
                            <?php
                        }
                    }else {
                    ?>
                        <script>
                            alert("Password are not matching.");
                        </script>
                    <?php
                    }
                }
                ?>
                    
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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