<!--<?php include('server.php') ?>-->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="header">
  	<h2>AdminLogin</h2>
  </div>
	 
  <form method="post" action="">
  	
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
</body>

<!--Section: Footer-->

<div class="footer-content-right">
  <a href="https://github.com/digitalocean"><img src="images/github.jpeg" class="icon-style" alt="Github icon"></a>
  <a href="https://www.twitter.com/DigitalOcean"><img src="images/twitter.jpeg" class="icon-style" alt="Twitter icon"></a>
  <a href="https://www.twitter.com"><img src="images/email.jpeg" class="icon-style" alt="Emailicon"></a>
</div>
</html>

