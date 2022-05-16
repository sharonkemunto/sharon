<?php 

include ('../partials/connection.php');
// LOGIN USER
if (isset($_POST['login_user'])) {
  error_reporting(0); //checks error_reporting setting and then display nothing hereby creating an overhead.
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($userpass);
  	$query = "SELECT * FROM users WHERE username='$username' AND '$password'='$password'";
  	$results = mysqli_query($connection, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ./propertyowner/requestform.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>