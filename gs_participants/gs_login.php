<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Login</title>
        <link href="gs_picture/gs_shortcut_logo.png" rel="shortcut icon"/>
        <link href="gs_css/gs_login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php
        include 'gs_dbcon.php';

        if (isset($_POST['submit'])) 
        {
            $studID = $_POST['studID'];
            $password = $_POST['password'];

            $studID_search = "select * from registration where studID = '$studID'";
            
            $query = mysqli_query($con, $studID_search);

            $studID_count = mysqli_num_rows($query);

            if ($studID_count) 
            {
                $studID_pass = mysqli_fetch_assoc($query);

                $db_pass = $studID_pass['password'];
            
                $_SESSION['fullName'] = $studID_pass['fullName'];
                
                $pass_decode = password_verify($password, $db_pass);
                
                if ($pass_decode) 
                {
                    ?>
                    <script>
                        alert("Login successful!");
                        location.replace("gs_homepage.php");
                    </script>
                    <?php
                } 
                else 
                {
                    ?>
                    <script>
                        alert("Password Incorrect!");
                    </script>
                    <?php
                }
            } 
            else 
            {
                ?>
                <script>
                    alert("Invalid Student ID!");
                </script>
                <?php
            }
        }
        ?>
        <div class="login">
            <h1>Login</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="login-details" method="post">
                <div class="login-input">
                    <label for="studID">Student ID</label>
                    <input type="text" name="studID" maxlength="10"><br/>

                    <label for="password">Password</label>
                    <input type="password" name="password" minlength="8" maxlength="16"><br/>
                </div>
                
                <input type="checkbox" class="check-box" onclick="myFunction()"><span class="showPwd">Show Password</span><br/>

                <script>
                function myFunction() 
                {
                    var x = document.getElementById("myInput");
                    if (x.type == "password") 
                    {
                        x.type = "text";
                    } 
                    else 
                    {
                        x.type = "password";
                    }
                }
                </script>

                <div class="forgotPwd">
                    <a href="gs_forgot-password.php">Forgot Password?</a><br/>
                </div>

                <button type="submit" class="login-btn" name="submit">Login</button><br/>

                <div class="register">
                    Don't have an account?<a href="gs_register.php">&nbsp;Create an account</a><br/>
                </div>
            </form>
        </div>
    </body>
</html>