<?php 

include ('../partials/connection.php');
// LOGIN USER
if (isset($_POST['login_user'])) {
	error_reporting(0); //checks error_reporting setting and then display nothing hereby creating an overhead.
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$userpass = mysqli_real_escape_string($connection, $_POST['password']);



  if (empty($username) || empty($userpass)) {
  	echo $errors, "Username and password are required <br/> <a href='login.php'><button>Back</button></a>";
  } 
//    elseif (empty($password)) {
//   	echo $errors, "Password is required <br/> <a href='login.php'><button>Back</button></a>";
//   } 
  else {

	// if (count($errors) == 0) {
		$password = md5($userpass);
		$query = "SELECT * FROM users  WHERE username='$username' AND password='$password'";
		$results = mysqli_query($connection, $query);
		if (mysqli_num_rows($results) == 1) {
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
			while($rows=$results->fetch_assoc()){
				$role = $rows['role'];
				echo $role;
				if($role == 0){
					header('Location:../customer/index.php');
				} else {
				echo "hello world";
				header('Location:../propertyowner/dashboard.php');
			}
			}
		}
	}
}
?>
