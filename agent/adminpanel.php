<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="header">
<center><img src="admin.png" alt="adminLogo" id="adminLogo"><br> <h2>Welcome to Admin Panel! </h2></center>
</div> 

<div class="sidebar-container">


<div id="sidebar">
<ul> 
    <li><h1>Table</h1> </li>

 <li><div class="input-group">
 <div class="dropdown">
  <button class="dropbtn">Users</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="../register/register.php">Add New User</a>
    <a href="../Tables/users.php">View Users</a>
    
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
    <a href="#">View Profile</a>
    <a href="#">Change Password</a>
    <a href="#">Log Out</a>

    
  </div>
  </div>
</div> 
</ul>


</div>    
<!--
<div id="sidebar" style="background-image: url('background.jpg');">-->

<div id ="mainContent" style="background-image: url('./img/background.jpg');">

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