<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../index/style.css">
</head>
<body>
<nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#"> View Property</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Get in Touch</a></li>
           <!--<div class=""><li><a href="#">login</a></li></div>-->

        </ul>
    </nav>

<div class="sidebar-container">


<div id="sidebar">
<ul> 
    <li><h1>Customer Dashboard</h1> </li>

 <li><div class="input-group">
 <div class="dropdown">
  <button class="dropbtn">Payments</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Pending</a>
    <a href="#">Approved</a>
    <a href="#">View All payments</a>
    
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

<div id ="mainContent" style="background-image: url('');">

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