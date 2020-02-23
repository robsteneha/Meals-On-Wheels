<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/tstyles.css">
  </head>
  <body >
    <div>
      <form class="myform" action="admin-login.php" method="post">
        <div class="login-box">
          <h1>Login</h1>
          <div class="textbox1">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input name="username"type="text" placeholder="Username" required/>
          </div>

          <div class="textbox1">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input name="password" type="password" placeholder="Password" required/>
          </div>
          <input type="submit" class="btn" value="Sign in" name="login" id="login_btn"/>
        </div>
      </form>
      <?php
            if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];

                $query="select * from admininfo WHERE admin_name='$username' AND admin_password='$password'";
                $query_run = mysqli_query($con,$query);
                if($query_run)
                {
                    if(mysqli_num_rows($query_run)>0)
                    {
                        //valid
                        $_SESSION['username']=$username;
                        header('location:admin-home.php');
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
  </body>
</html>
