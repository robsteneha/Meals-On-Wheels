<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LOG OUT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
        <!--<img src="images/login.jpg" class="avatar"/>-->
        
    
        <form class="myform" action="logout.php" method="post">
        <center>
            <h2></h2>
            <h3>Are you sure?
        </h3>
        </center>
            <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
            
        </form>

        <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:index.php');
            }
        ?>
    </div>
</body>