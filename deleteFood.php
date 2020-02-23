<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Food</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<body style="background-color: #bdc3c7">

<div>
        <form class="myform" action="deleteFood.php" method="post">
                <h1>DELETE FOOD</h1>
            <!--<label><b>Username:</label><br>-->
            <input name="categoryid" type="text" class="inputvalues" placeholder="Type Category id" required/></br>
            <!--<label><b>Password:</label><br>-->
            <input name="title" type="text" class="inputvalues" placeholder="Type food name" required/></br>
            <input name="image" type="text" class="inputvalues" placeholder="Type image link" required/></br>
            <input name="delete_btn" type="submit" id="signup_btn" value="DELETE"/><br>
            <a href="admin-home.php"><input type="button" id="back_btn" value="<< Back to Home"/></a>
        </form>

        <?php
            if(isset($_POST['delete_btn']))
            {
                //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                $categoryid=$_POST['categoryid'];
                $title=$_POST['title'];
                $image=$_POST['image'];
                
                $query= "delete from food where category_id=$categoryid and title='$title' and image='$image'";
                $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("food item deleted") </script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Error...") </script>';    
                } 
            }           
        ?>
        
    </div>





</body>
</html>
