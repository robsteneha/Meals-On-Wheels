<?php
    session_start();
    require 'dbconfig/config.php';
    
    //echo $_SESSION['username'] ;
$uname=$_SESSION['username'];
$sql="select * FROM userinfo where u_name='$uname'";
        $result=$con->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                //echo"<br>".$row["id"];
                $userid=$row["id"];
                //echo"<br>userid=".$userid;
            }
        }
        else{
            echo"0 result";
        } 
?>