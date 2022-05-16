<?php
session_start();

// initializing variables
$username = "";
$email = "";
$errors = array(); 

// connect to the database
include('../partials/connection.php');
// REGISTER USER
if (isset($_POST['registration']) || isset($_POST['username'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $password2 = mysqli_real_escape_string($connection, $_POST['password2']);
  $role = mysqli_real_escape_string($connection, $_POST['role']);

  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
 // Finally, register user if there are no errors in the form
 if (count($errors) == 0) {
  $password = md5($password);//encrypt the password before saving in the database

  $query = "INSERT INTO users (id, username, email, password,role) 
        VALUES (NULL,'$username', '$email', '$password','$role')";

  $result = mysqli_query($connection, $query);
  if ($result){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: log.php');
  }
 
}
}




?>