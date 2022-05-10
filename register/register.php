<?php include('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
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
            <div class="admin">  <li><a href="# ">login</a></li></div>

        </ul>
    </nav>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="server.php" name="registration" onsubmit="return FormValidation()">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" id="email" value="<?php echo $useremail; ?>">
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
  <option value="Property Owner">owner</option>
  <option value="Customer">customer</option>
   </select>
</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>  <b>Already a member?</b><a href="login.php">Sign in</a></p>
  </form>
  
<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>

  <script>
    
	function FormValidation(){
		username = document.registration.username.value;
		email = document.registration.email.value;
		password=document.registration.password.value;
		password2= document.registration.password2.value;
		role= document.registration.role.value;
		if(username == ""){
		  alert('Username cannot be blank');
		  document.getElementById('username').focus();
		  return false;
		}
		if(email == ""){
		  alert('Payment id cannot be blank');
		  document.getElementById('email').focus();
		  return false;
		}
		if(password == ""){
		  alert('Payment date cannot be blank');
		  document.getElementById('password').focus();
		  return false;
		}
		if(password2 == ""){
		  alert('Payment date cannot be blank');
		  document.getElementById('password2').focus();
		  return false;
		}
		if(role == ""){
		  alert('Payment date cannot be blank');
		  document.getElementById('role').focus();
		  return false;
		}
	  }
	</script>
</body>
</html>