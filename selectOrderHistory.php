<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Home</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table{
            margin-top:30px;
            margin-left: 20px;
            margin-right: 20px;
            border-collapse: collapse;
            width:98%;
            color: #588c7e;
            font-family: monospace;
            font-size:20px;
            text-align: left;
        }
        th{
            background-color: #588c7e;
            color: black;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
  <!-- side bar -->
  
  <!-- nav bar -->
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Meals On Wheels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin-home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">View Order History<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Update Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insertFood.php">Insert Food</a>
          <a class="dropdown-item" href="deleteFood.php">Delete FOOD</a>
          <a class="dropdown-item" href="updateFood.php">Update FOOD</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="selectAllFood.php">View Menu</a>
        </div>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <form class="form-inline my-2 my-lg-0" method="post">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">LogOut</button>
      </form>
      <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:index.php');
            }
        ?>
  </div>
</nav>
</div>
<!--content -->
<div>
<table>
    <tr>
        <th>CUTOMER ID</th>
        <th>CATEGORY ID</th>
        <th>FOOD ID</th>
        <th>FOOD TITLE</th>
        <th>FOOD PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL AMOUNT</th>
    </tr>
    <?php
        $sql="select * FROM orderhistory where order_status='c'";
        $result=$con->query($sql);
//$result=mysqli_query($con,$sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo"<tr><td>".$row["c_id"]."</td><td>".$row["category_id"]."</td><td>".$row["f_id"]."</td><td>".$row["f_title"]."</td><td>".$row["f_price"]."</td><td>".$row["quantity"]."</td><td>".$row["totalAmount"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo"NO ROWS AVAILABLE";
        }
    ?>
</table>
</div>
<!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>