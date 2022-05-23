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
  
   <!--enctype=”multipart/form-data is the action which encoding the files and allow you to sent through POST-->
   <form method="POST" action="insertproperty.php" name="property" onsubmit="return FormValidation()" enctype="multipart/form-data" >
<div> <h3> Add New Property</h3></div>
  	<div class="input-group">
  	  <label>Property Name:</label>
  	  <input type="text" name="pname"  id="pname" >
  	</div>
  	<div class="input-group">
  	  <label>Property Owner: </label>
  	  <input type="text" name="owner" id="owner">
  	</div>
  	<div class="input-group">
  	  <label>property image:</label>
  	  <input type="file" name="image" id="image">
  	</div> 
      <div class="input-group">
  	  <label>Property type:</label>
      <select name="type">
        <option value="">--select--</option>
        <option value="studio apartment">Studio apartment</option>
        <option value="Office Space">Office space</option>
        <option value="One bedroom apartment">One bedroom apartment</option>
        <option value="Two bedroom apartment">Two bedroom apartment</option>
        <option value="Three bedroom apartment">Three bedroom apartment</option>
        </select>
      </div>
      <div class="input-group">
  	  <label>Property Location: </label>
      <select name="location">
        <option value="">--select--</option>
        <option value="Diani">Diani</option>
        <option value="Ruaka">Ruaka</option>
        <option value="Limuru">Limuru</option>
        <option value="Majengo">Majengo</option>
        <option value="Juja">juja</option>
        <option value="Kitengela">kitengela</option>
        <option value="Ongata Rongai">Ongata Rongai</option>
        <option value="Kilimani">Kilimani</option>
        <option value="Karen">Karen</option>
        <option value="koja">koja</option>
        <option value="Ngara">Ngara</option>
      </select>
      </div>
  	 
    
      <div class="input-group">
  	  <label>property status:</label>
  	  <select>
      <option value="">--select--</option>
        <option value="Vacant">Vacant</option>
        <option value="Occupied">Occupied</option>
      </select>
  	</div>
      <div class="input-group">
  	  <label>property Price:</label>
  	  <input type="text" name="price" id="price">
  	</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="AddProperty">Add Property</button>
  	</div>
  </form>

</div>
</div>    
<script>
    
    function FormValidation(){
        pname = document.property.pname.value;
        owner = document.property.owner.value;
        type=document.property.type.value;
        location= document.property.location.value;
        status= document.property.status.value;
      price= document.property.price.value;
        if(pname == ""){
          alert('Username cannot be blank');
          document.getElementById('pname').focus();
          return false;
        }
        if(owner == ""){
          alert('Payment id cannot be blank');
          document.getElementById('owner').focus();
          return false;
        }
        if(type == ""){
          alert('type cannot be blank');
          document.getElementById('type').focus();
          return false;
        }
      if(location == ""){
          alert('location cannot be blank');
          document.getElementById('location').focus();
          return false;
        }
      if(status == ""){
          alert('status cannot be blank');
          document.getElementById('status').focus();
          return false;
        }
      if(price == ""){
          alert('price cannot be blank');
          document.getElementById('price').focus();
          return false;
        }
    }
    </script> 

<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>

</body>



<!--link to javascript file thats used to display the children elements in the block-->
<script src="../scripts/script.js"></script>
</html>