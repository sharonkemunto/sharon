<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="../Tables/table.css"/>

</head>
<body>
<div id="header">
<center><img src="admin.png" alt="adminLogo" id="adminLogo"><br> <h2><b>Welcome to Admin Panel!</b> </h2></center>
</div> 

<div class="sidebar-container">
<div id="sidebar" style="width:450px;">
<ul> 
    <li><h1>Table</h1> </li>

 <li><div class="input-group">
 <div class="dropdown">
  <button class="dropbtn">Users</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="register.php">Add New User</a>
    <a href="users.php">View Users</a>
    
  </div>
</div>

    

<li><div class="input-group">
<div class="dropdown">
  <a class="dropbtn">Payment</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Approved</a>
    <a href="#">Pending</a>
    <a href="#">View All Payments</a>  
  </div>
  </div>

<li>
<div class="input-group">
<div class="dropdown">
  <a class="dropbtn">Property</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="addproperty.php">Add New Property</a>
    <a href="#">View Properties</a>
    
  </div>
  </div>

<li><div class="input-group">
<div class="dropdown">
<a class="dropbtn">Logs Table</a>
  
</div> </div>

<li><div class="input-group">
    
<div class="dropdown">
<a class="dropbtn">Reports</a>
  
</div> </div>


<li><div class="input-group">
<div class="dropdown">
  <a class="dropbtn">My Profile</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="./profile.php">View Profile</a>
    <a href="#">Change Password</a>
    <a href="#">Log Out</a>

    
  </div>
  </div>
</div> 
</ul>


</div>    

<div id ="mainContent">
  <!--content-->
  <div class="container">
      <?php 
        include('../partials/connection.php');
        $sql = "SELECT * FROM users";
        $result = $connection->query($sql);
        $connection->close();
      ?>
        <table class="tableContainer">
            <h2>Users Table</h2>
            <tr>
                <th>user id</th>
                <th>username</th>
                <th>email</th>
                <th>role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while($rows=$result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['username'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['role'] ?></td>  
                <td><a href="./Edit/Users.php?id=<?php echo $rows['id']?>">Edit</a></td>
                <td>Delete</td>    
            </tr>
            <?php } ?>
        </table>

    </div>

</div>
</div>    

<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>


</body>
<!--link to javascript file thats used to display the children elements in the block-->
<script src="../scripts/script.js"></script>
</html>