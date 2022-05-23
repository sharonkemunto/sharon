
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
  <div class="header">
  	<h2>AdminLogin</h2>
  </div>
	 
  <form method="post">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>


  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>


  <?php 

session_start(); 

include "./partials/connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $pass = validate($_POST['password']);
//this code checks if the field is empty  

    if (empty($username)) {
        header("Location: adminlogin.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: adminlogin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE user_name='$username' AND password='$password'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: adminlogin.php");

                exit();

            }else{

                header("Location: adminlogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: adminlogin.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: adminpanel.php");

    exit();

}?>


</body>

<!--Section: Footer-->


</html>

