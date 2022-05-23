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
  <!-- <p>content</p>
<p style="background-image: url('../bg2.jpg');">  -->
<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" id="registration" name="registration" action="server.php">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" id="email" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" id="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2" id="password2">
  	</div>

	  <div class="input-group">
   <select name="role" id="role">
   <option value="">Choose Your role in the system</option>
  <option value="Property Owner">Owner</option>
  <option value="Customer">Customer</option>
   </select>
</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>  <b>Already a member?</b><a href="login.php">Sign in</a></p>
  </form>

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