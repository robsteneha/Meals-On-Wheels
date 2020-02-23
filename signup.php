<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">

    <!--<div id="main-wrapper">
        <center>
            <h2> Sign Up</h2>
            <img src="images/login.jpg" class="avatar"/>
        </center>-->
    <div>
        <form class="myform" action="signup.php" method="post">
                <h1> Sign Up</h1>
            <!--<label><b>Username:</label><br>-->
            <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/></br>
            <!--<label><b>Password:</label><br>-->
            <input name="emailid" type="text" class="inputvalues" placeholder="Type your email id" required/></br>
            <input name="phoneno" type="text" class="inputvalues" placeholder="Type your Phone no." required/></br>
            <input name="address" type="text" class="inputvalues" placeholder="Type your Address" required/></br>
            <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/></br>
            <!--<label><b>Confirm Password:</label><br>-->
            <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/></br>
            <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
            <a href="login-page.php"><input type="button" id="back_btn" value="<< Back to Login"/></a>
        </form>

        <?php
            if(isset($_POST['submit_btn']))
            {
                //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                $username=$_POST['username'];
                $emailid=$_POST['emailid'];
                $phoneno=$_POST['phoneno'];
                $address=$_POST['address'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                
                if($password==$cpassword)
                {
                    $query= "select * from userinfo WHERE u_name='$username'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        //there is already a user with same username
                        echo '<script type="text/javascript"> alert("User already exists... Try another username") </script>';
                    }
                    else
                    {
                        $query= "insert into userinfo(u_name,u_password,u_email,u_phone,u_address) values('$username','$password','$emailid','$phoneno','$address')";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("User Registered... Go To Login Page to login") </script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("Error...") </script>';    
                        }
                    }
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Password and Confirm Password doesn\'t match") </script>';
                }
            }
            
        ?>
        
    </div>
</body>
</html>