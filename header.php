<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sexy Book Club</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <nav>
        <div class="wrapper">
            <ul>
                <li><a href='index.php'>HOME</a></li>
                <li><a href='discover.php'>ABOUT US</a></li>
                <?php 
                    if(isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>My Profile</a></li>";
                        echo "<li><a href='logout.php'>Log Out</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>SIGN UP</a></li>";
                        echo "<li><a href='login.php'>LOGIN</a></li>";
                    }
                ?>

            </ul>
        </div>
    </nav>
    
    <div class="wrapper">