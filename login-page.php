<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
            <title>Login Page</title>
            <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <!--<div id="main-wrapper">
        <center>
            
            <img src="images/login.jpg" class="avatar"/>
        </center>-->
    <div>
        <form class="myform" action="login-page.php" method="post">
            <h1>Login</h1>
            <!--<label><b>Username:</label><br>-->   
            <input name="username" type="text" placeholder="Username" required /></br>
            <!--<label><b>Password:</label><br>-->
            <input name="password" type="password"  placeholder="Password" required/></br>
            <input name="login" type="submit" id="login_btn" value="Login"/><br>
            <a href="signup.php"><input type="button" id="register_btn" value="Register"/></a>
        </form>
        <?php
            if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];

                $query="select * from userinfo WHERE u_name='$username' AND u_password='$password'";
                $query_run = mysqli_query($con,$query);
                if($query_run)
                {
                    if(mysqli_num_rows($query_run)>0)
                    {
                        //valid
                        $_SESSION['username']=$username;
                        header('location:homepage.php');
                    }
                    else
                    {
                        //invalid
                        echo '<script type="text/javascript"> alert("Invalid Credentials!") </script>';    
                    }
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Database Error")</script>';
                }    
            }
            else
            {
            }
        ?>
    </div>
    <!--</div>-->
</body>
</html>