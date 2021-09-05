<?php
    include 'dbConnector.php';
?>

<!DOCTYPE html>]
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
                    <img src='Images/gs_shortcut_logo.png' alt='shortcut logo' width='145px' height="145px">
                </div>
                <ul>
                    <li><a href="#dashboard" id="targeted">dashboard</a></li>
                    <li><a href="edit.php">Edit Profile</a></li>
                    <li><a href="message.php">Questions</a></li>
                    <li><a href="editeventlisting.php">Edit Event</a></li>
                </ul>
            </div>
            <div class="question-box">
                <?php
                $dbConnection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                $selectCommand = "SELECT * FROM cpltable";

                // mysqli_query = get something from database
                $results = mysqli_query($dbConnection, $selectCommand);
                echo "<table class='student-info'>";
                echo"<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Messages</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($results)) {

                    echo "<tr>";
                    echo "<td class='info-name'>" . $row['Name'] . "</td>";
                    echo "<td class='info-email'>" . $row['Email'] . "</td>";
                    echo "<td class='info-messages'>" . $row['Messages'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
                ?>
            </div>


        </div>
        <ul class="statusbar">
            <li class="logout"><a href="">Logout</a></li>
        </ul>
    </div>
</div>

</body>
</html>