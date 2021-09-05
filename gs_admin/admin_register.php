<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register as Admin</title>
        <link href="admin_picture/shortcut_logo.png" rel="shortcut icon"/>
        <link href="admin_css/admin_register.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="register">
            <h1>Register</h1>
            <form action="admin_register-result.php" method="post">
                <div class="register-input">
                    <label for="fullName">Username</label>
                    <input type="text" name="userName" maxlength="70" required><br/>

                    <label for="email">Email</label>
                    <input type="email" name="email" required><br/>

                    <label for="pwd">Password</label>
                    <input type="password" id="password" name="password" maxlength="16" required><br/>

                    <label for="pwd">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" maxlength="16" required=""><br/>
                </div>
                <button type="submit" class="register-btn">Register</button><br/>
            </form>
        </div>
    </body>
</html>