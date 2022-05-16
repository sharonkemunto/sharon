<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Available Property </title>
    <link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
<nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="viewproperty.php"> View Property</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Get in Touch</a></li>
            <div class="admin"><li><a href="#">login</a></li></div>

        </ul>
    </nav> 
<?php 
include('../partials/connection.php');
$propid = $_GET['propid'];
$query = mysqli_query($connection, "SELECT * FROM property WHERE pid=$propid");
$data = mysqli_fetch_array($query);
if(isset($_POST['update'])){
    $pname = $_POST['pname'];
    $owner = $_POST['owner'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $price = $_POST['price'];


    $edit = mysqli_query($connection, "UPDATE property SET pname='$pname',owner='$owner',image='$image',type='$type',location='$location',status='$status',price='$price'");
    if($edit){
        mysqli_close($connection);
        header("location:../property.php");
        exit;
    } else {
        echo mysqli_error();
    }
}


 ?>	
   
<div class="prop-con">

          	  
  	  <div class="prop-detail"> <img src="../img/<?php echo $data['image'] ?>"/></div>
  	 
      
    
  	  <div class="prop-detail">Property Name :<?php echo $data['pname'] ?><br/>
        <label>property type:</label><?php echo $data['type'] ?><br/>
        <label>property Location:</label><?php echo $data['location'] ?><br/>
        <label>property status:</label><?php echo $data['status'] ?><br/>
        <label>property Price:</label><?php echo $data['price'] ?><br/>
        <a href="../payments/payment.php"><button type="submit" class="btn" name="update"> Buy Now !</button></a>
    </div>
  	
  
  	  
  	
</div>


<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>




  </body>
</html>