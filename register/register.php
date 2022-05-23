  <?php 
  include('server.php');
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
  
<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>

<script type="text/javascript">
	// document.getElementById('registration').addEventListener('submit',  function(e){});
	  //get the form with the id attribute 
	  let form = document.getElementById('registration')
	  form.addEventListener('submit',  function (e){
		  //prevent the form from submitting
		e.preventDefault();

		var username = document.registration.username.value;
		var email = document.registration.email.value;
		var password=document.registration.password.value;
		var password2= document.registration.password2.value;
		var role= document.getElementById('role').value;
		console.log(role);
		
		if(username == ""){
		  alert('Username cannot be blank');
		  document.getElementById('username').focus();
		  return false;
		}
		if(email == ""){
		  alert('Email address cannot be blank');
		  document.getElementById('email').focus();
		  return false;
		}
		 //VALIDATE EMAIL FIELD
		 var emailFormat = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;//regular expression
        if(!email.match(emailFormat)){
            alert("Please enter a valid Email address"); //error message alert
        document.getElementById("email").focus();
        return false;
        }
		
		if(password == ""){
		  alert('Password cannot be blank');
		  document.getElementById('password').focus();
		  return false;
		}
		if(password2 == ""){
		  alert('Password  cannot be blank');
		  document.getElementById('password2').focus();
		  return false;
		}
		if(password2 !== password){
		  alert('Passswords do not match');
		  document.getElementById('password2').focus();
		  return false;
		}
		if(role == ""){
		  alert('Please select a role');
		  document.getElementById('role').focus();
		  return false;
		}
		form.submit();
	  });


	  
    
	
	</script>
  
</body>
</html>