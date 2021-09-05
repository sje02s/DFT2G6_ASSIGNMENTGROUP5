<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link href="admin_picture/shortcut_logo.png" rel="shortcut icon"/>
        <link href="admin_css/admin_login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="login">
            <h1>Admin Login</h1>
            <form class="login-details" method="post" action="admin_login-result.php">
                <div class="login-input">
                    <label for="studID">Email</label>
                    <input type="text" name="email" required><br/>

                    <label for="password">Password</label>
                    <input type="password" id="myInput" minlength="8" maxlength="16" required><br/>
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
                    <a href="admin_forgot-password.php">Forgot Password?</a><br/>
                </div>

                <button type="submit" class="login-btn">Login</button><br/>

                <div class="register">
                    Don't have an account?<a href="admin_register.php">&nbsp;Create an account</a><br/>
                </div>
            </form>
        </div>
    </body>
</html>