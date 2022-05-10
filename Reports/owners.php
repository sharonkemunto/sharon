<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>propertymanagement</title>
    <link  rel="stylesheet" type="text/css" href="../index/style.css">
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
   
    <div class="container">
      <?php 
        include('../partials/connection.php');
        $sql = "SELECT * FROM users WHERE role='owner'";
        $result = $connection->query($sql);
        $connection->close();
      ?>
        <table>
            <h2>Users Table</h2>
            <tr>
                <th>user id</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while($rows=$result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['username'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['password'] ?></td>
                <td><?php echo $rows['role'] ?></td>  
                <td><a href="./Edit/Users.php?id=<?php echo $rows['id']?>">Edit</a></td>
                <td>Delete</td>    
            </tr>
            <?php } ?>
        </table>

    </div>
<!--Section 7: Footer-->

<div class="footer">
. . .

<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
<div class="footer-content-right">
  <a href="https://github.com/digitalocean"><img src="../img/github.jpeg" class="icon-style" alt="Github icon"></a>
  <a href="https://www.twitter.com/DigitalOcean"><img src="../img/twitter.jpeg" class="icon-style" alt="Twitter icon"></a>
  <a href="https://www.twitter.com"><img src="../img/email.jpeg" class="icon-style" alt="Emailicon"></a>
</div>
  </p>
</div>
</div>


</body>

</html>