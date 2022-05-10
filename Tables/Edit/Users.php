<?php include('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="../../register/style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <?php 
    include('../../partials/connection.php');
    $userid = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM users WHERE id=$userid");
    $data = mysqli_fetch_array($query);
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
       


        $edit = mysqli_query($connection, "UPDATE users SET users='$users',email='$email',password='$password',role='$role'");
        if($edit){
            mysqli_close($connection);
            header("location:../users.php");
            exit;
        } else {
            echo mysqli_error();
        }
    }


    ?>	
  <form method="post" action="server.php" name="registration" onsubmit="return FormValidation()">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="username" value="<?php echo $data['username']; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" id="password" value="<?php echo $data['password']; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2" id="password2" value="">
  	</div>
	  <div class="input-group">
   <select name="role" id="role">
  <option value="Property Owner">Property Owner</option>
  <option value="Customer">Customer</option>
   </select>
</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="update">Register</button>
  	</div>
  	<p>  <b>Already a member?</b><a href="login.php">Sign in</a></p>
  </form>
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